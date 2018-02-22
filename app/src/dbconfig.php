
<?php
if(isset($_POST["submit"])){
	

$servername = 'localhost';
$user = 'root';
$pass = '';
$dbname= 'isinnovatorsdb';


try{
	$conn = new PDO("mysql::host=$servername;$dbname=isinnovatorsdb", $user ,$pass);
	

	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
    echo 'Connected to Database<br/>';



$sql = "INSERT INTO contact (name, email, message)
		VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')";




if ($conn->query($sql)) {
     echo "<script type= 'text/javascript'>alert('Thank you for your message');</script>";
} 
else{
     echo "<script type= 'text/javascript'>alert('your message not successfully Inserted.');</script>";
}



$conn = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

}
?>