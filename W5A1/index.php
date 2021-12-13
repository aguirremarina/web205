<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "","marina");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$author=$_POST['author']; 
$year=$_POST['year'];
$subject=$_POST['subject'];
$pages=$_POST['pages'];
$title=$_POST['title'];
$price=$_POST['price'];
$summary=$_POST['summary'];
$similar=$_POST['similar'];
// Attempt insert query execution
$sql = "INSERT INTO books (`author`, `year`, `subject`, `pages`, `title`, `price`, `summary`, `similar`) VALUES ('$author','$year','$subject','$pages','$title','$price','$summary','$similar')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('Location: index.html');
?>