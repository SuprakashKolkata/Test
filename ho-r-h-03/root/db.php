<?php /*?><?php
ob_start();
$con=mysql_connect("localhost","root","");
if(!$con)
{
	echo "connection to the database console was unsuccesful";
}
$select=mysql_select_db("db_erp",$con);
if(!$select)
{
	echo "connection to the database console was unsuccesful";
}
?><?php */?>
<?php
class Connection {

    protected $host = "localhost";
    protected $dbname = "demo_hotel_2";
    protected $user = "root";
    protected $pass = "";
    protected $DBH;

    function __construct() {

        try {

            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function closeConnection() {

        $this->DBH = null;
    }
}
?>