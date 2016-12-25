Here I put multiple projects for the demo of the application.
taskdemo - is angular and php based project using mysql database to store and retrieve data. it is using mysqli to connect to db.
The following changes (uncomments) need to done in the php.ini in widnows system-
Directory in which the loadable extensions (modules) reside.
  include_path = ".;c:\php\includes" 
  extension_dir = "ext"
  extension=C:/tools/php/ext\php_mysqli.dll
for PDO connection, uncomment the following line in windows php.ini file
extension=php_pdo_mysql.dll

productdemo - is pure php based project using bootstrap, and jquery and PDO approach to connect to mysql database.

