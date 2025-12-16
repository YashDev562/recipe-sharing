<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require "db.php";

$recipeKey  = $_POST['recipe_key'];
$name       = $_POST['name'];
$desc       = $_POST['description'];
$fullRecipe = $_POST['full_recipe'];

$imagePath = "default.png";

if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];

    if (in_array($_FILES['image']['type'], $allowedTypes)) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid("recipe_", true) . "." . $ext;
        $uploadDir = "../img/uploads/";
        $uploadPath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadPath)) {
            $imagePath = "uploads/" . $fileName;
        }
    }
}

$stmt = $conn->prepare(
    "INSERT INTO recipes (recipe_key, name, description, full_recipe, image_path)
     VALUES (?, ?, ?, ?, ?)"
);

$stmt->bind_param("sssss", $recipeKey, $name, $desc, $fullRecipe, $imagePath);

if ($stmt->execute()) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => "Recipe already exists"]);
}

