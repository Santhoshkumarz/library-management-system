<?php
   $con=mysqli_connect("localhost","root","","main");
   
    $sql="SELECT * FROM issue_button";
    $result=mysqli_query($con,$sql);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>Retrun Book</title>
</head>
<body>
 <h1>Retrun Book</h1>

 <table border="1px solid">
     <tr>
         <th>id</th>
         <th>bookname</th>                 
         <th>name</th>                            
         <th>rollno</th>
         <th>date</th> 
         <th>phonenumber</th>
         <th>Operation</th>              
     </tr>
     <?php
    while($rows=mysqli_fetch_assoc($result))
    {
                 echo "
                 <tr>
                     <td>".$rows['id']."</td>
                     <td>".$rows['bookname']."</td>
                     <td>".$rows['name']."</td>
                     <td>".$rows['rollno']."</td>
                     <td>".$rows['date']."</td>
                     <td>".$rows['phonenumber']."</td>
                     <td><a href='return_action.php?rn=$rows[id]'>Return</a></td>
                 </tr>
                 ";
    }
    ?>
 </table>
 
</body>
</html>