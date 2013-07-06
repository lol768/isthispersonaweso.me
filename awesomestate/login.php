<?php 
session_start();
include("config.php"); //including config.php in our file
$username = $_POST["username"]; //Storing username in $username variable.
$password = $_POST["password"]; //Storing password in $password variable.


$match = "select id from $table where username = '".$_POST['username']."'
and password = '".$_POST['password']."';"; 

$qry = mysql_query($match);

$num_rows = mysql_num_rows($qry); 



if ($num_rows <= 0) { 

?>
<div class="alert alert-error">
  Invalid Username or Password. Please try again
</div>
<?php
include("index.html");

exit; 

} else {



$_SESSION['authenticated']= $_POST["username"];

include("admin.php");

// It is the page where you want to redirect user after login.
}
?>