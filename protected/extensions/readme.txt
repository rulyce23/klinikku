MySQL database restore class, version 1.0.0

HOW TO USE

1. Create the instance of MySQL_Restore class.
2. Define necessary properties.
3. Call Execute() method to create backup.

require_once 'mysql_restore.class.php';
$restore_obj = new MySQL_Restore();

$restore_obj->server = 'localhost';
$restore_obj->username = 'username';
$restore_obj->password = 'password';
$restore_obj->database = 'dbname';
if (!$restore_obj->Execute(MSR_FILE, 'backups/10_02_05__12_24_22.sql.gz', true, false))
{
  die($restore_obj->error);
}


PUBLIC PROPERTIES

var $server = 'localhost';
The name of MySQL server.

var $port = 3306;
The port of MySQl server.

var $username = 'root';
Database username.

var $password = '';
Database password.

var $database = '';
Name of the database.

var $link_id = -1;
MySQL link identifier of the current connection. You can set this if you
want to connect the MySQL server by your own.

var $connected = false;
Set true if the connection is already established before calling Execute().

var $queries = array();
Array of separate queries from SQL file or SQL commands string.

var $error = '';
Error message.


PUBLIC METHODS

function Execute($param, $mode = MSR_STRING, $is_compressed = false, $split_only = false)
$param - filename or SQL commands string;
$mode - Type of SQL data: MSR_STRING - param is the string of SQL commands;
  MSR_FILE - param is the filename of SQL file.
$is_compressed - decompress GZip compressed SQL data (file or string)?
$split_only - only split SQL content to separate queries without executing them.