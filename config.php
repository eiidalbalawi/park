<?PHP

$mysqli = new mysqli("localhost", "root", "", "park");
			  //   127.0.0.1 ,username,password,name of db
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
 $mysqli->host_info . "\n";

?>
