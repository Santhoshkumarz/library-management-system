<?php

$bookid=$_POST['bookid'];
$bookname=$_POST['bookname'];
$author=$_POST['author'];
$edition=$_POST['edition'];

$con=mysqli_connect("localhost","root","","main");

$sql="INSERT INTO addbook(bookid,bookname,author,edition)values('$bookid','$bookname','$author','$edition')";

$result=mysqli_query($con,$sql);
        
if($result)
{
  echo "<h1>Your book is added 😁</h1>";
     
}
else
{
    echo "insert fail";

}


?>