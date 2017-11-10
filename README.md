# EmployeeDirectory
//Will try to improve the doc in the furute and add for MAC
//Add admin seed

ON WINDOWS
1) Install XAMPP 
2) Copy the entire project inside the folder htdocs (delete the rest of folder) 
3) Run Apache and Mysql on XAMPP. 
4) Inside the phpMyAdmin paste the following SQL code: 
 GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY PASSWORD '*14E65567ABDB5135D0CFD9A70B3032C179A49EE7' WITH GRANT OPTION; 
 GRANT ALL PRIVILEGES ON `employeedb`.* TO 'admin'@'localhost'; 
5) Create a new database named 'employeedb' 
6) Run the following sentence inside the project: 
php artisan migrate:refresh --seed 
