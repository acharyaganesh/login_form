<?php
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host, $user,$pass);
if(!$conn)
{
    die('could not connect' .mysqli_error());
}
else {
    echo'connection successfully <br>';
}
$sql='CREATE Database entrydata';
if(mysqli_query($conn,$sql))
{
    echo'database created successfully<br>';
}
else{
    echo'sorry the problem in creating database...database already exist under this name<br>' .mysqli_error($conn);
}
mysqli_close($conn);
?>
    