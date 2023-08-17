<?php


$bookid=$_POST['bookid'];
$bookname=$_POST['bookname'];
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$date=$_POST['date'];
$phonenumber=$_POST['phonenumber'];

$con=mysqli_connect("localhost","root","","main");

$sql="INSERT INTO issue_button(bookid,bookname,name,rollno,date,phonenumber) values('$bookid','$bookname','$name','$rollno','$date','$phonenumber')";
$result=mysqli_query($con,$sql);

if($result){
    echo " you have Issued book";
    header("location:issue_button_fecth.php");
}
else{
    echo "You cant issued the book";
}

?>


