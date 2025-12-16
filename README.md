# recipe-sharing
The reason it was created was due to odin project 
Now it is being driven due to this being my Web EL

Learning points 
CSS : 
1. changing the display from none to flex/block - this allows for pop ups to work 
2. box-shadow - offset-x offset-y blur-radius color
3. rgba - normal rgb + alpha which means the transparency 
4. transform - this changes the various characteristics of an element without affecting the layout. here the general translateY is used to move it in Y direction to give that 3d movement effect
5. z-index - this is predominantly used with fixed position which allows for overlapping of elements
 
HTML :
1. data-id - these are custom ids which can be changed accordingly and also accessed by the js code 

JS : 
1. trim() - removes excess blank space
2. .replace() 
3. appendChild()
4. .dataset.id

Apache 
Web Server which listens in on the port 80 , php only works with apache
Browser -> (HTTP request) -> Apache -> PHP script -> (SQL) -> MySQL

MySQL 
So this code was typed on phpmyadmin run through xampp 
CREATE TABLE recipes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    recipe_key VARCHAR(100) UNIQUE NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    full_recipe TEXT NOT NULL
);
here auto increment means literally it increases the value from 1 to how many ever recipes we put 
text allows for 65000 char while varchar allows for 255 only 
NOT NULL means it doesnt allow null values so some text must be written in it 
UNIQUE means two rows cant have the same value for recipe_key
PRIMARY KEY cannot be null , is unique , only one per table

When using VS Code with WSL, Git integration and extensions must be installed separately inside the WSL environment. Until this setup completes, Git status indicators may not appear even though the repository is valid.