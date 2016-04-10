
			How To Run 

--------------------------------------------------------------
Process 1 (with composer) | Localhost Use
--------------------------------------------------------------
1. Install Xampp/Wampp. 

2. Download composer from https://getcomposer.org/Composer-Setup.exe

3.Run Xampp/Wamp and start MySQL database and Apache Web server.

4.If you have Wamp/Xampp then follow this path D:\wampp(or Xampp)\php\php.ini and search for below list and uncomment if these starts with semiclone,

Search:upload
uncomment: 

file_uploads = On
extension=php_fileinfo.dll


then change:

max_file_uploads = 20 
upload_max_filesize = 20M

5. Create a database at PhpMyadmin. 

6.Open project folder, follow the path ...\Building-Management-Project\app\config\local\database.php and
 change user_name/user_pass/database_name in mysql connection.
 
7. Open project folder, Right click and select cmd/command window... then copy paste single line and press enter,

-->php artisan migrate
-->php artisan db:seed
-->php artisan migrate --package=cmgmyr/messenger
-->php artisan serve
Note: Don't close the command window while running the app. 

8. Open browser and type "localhost:8000" and press Enter.


--------------------------------------------------------------
Process 2 (with sql file) | Localhost Use
--------------------------------------------------------------
1. Install Xampp/Wampp. 
2.Run Xampp/Wamp and start MySQL database and Apache Web server.

3.If you have Wamp/Xampp then follow this path D:\wampp(or Xampp)\php\php.ini and search for below list and uncomment if these starts with semiclone,

Search:upload
uncomment: 

file_uploads = On
extension=php_fileinfo.dll


then change:

max_file_uploads = 20 
upload_max_filesize = 20M

4. Create a database at PhpMyadmin. 

5.Open project folder, follow the path ...\Building-Management-Project\app\config\local\database.php and
 change user_name/user_pass/database_name in mysql connection.
 
 
6. Import the SQL file into your database.

7. Put the project folder into Xampp(or Wamp)\htdocs and open browser and type "localhost/project_folder_name/public/"


--------------------------------------------------------------
Upload Server (with sql file) | Server
--------------------------------------------------------------
1. Convert the project folder into zip.
2. Upload the project into your server.
3. Create new database in your server PhpMyadmin.
4. Import the SQL file.
5. change the \Building-Management-Project\app\config\database.php file configuration. 


