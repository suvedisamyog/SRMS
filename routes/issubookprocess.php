<?php
session_start();
require '../connection.php';

if (isset($_POST['issue'])) {
   
    $registration = $_POST["reg"];
    $isbn = $_POST["isbn"];
    $bookName = $_POST["bookName"];
    $date = $_POST["date"];
    $stdName=$_POST["stdName"];
    $org=$_SESSION['mail'];

    
   

    $sql="select * from students where registration='$registration'  and org='$org'";
  
    $data=mysqli_query($conn,$sql);
    if(mysqli_num_rows($data)!=0){
       
     $result=mysqli_fetch_assoc($data);
     $dbname=$result['name'];
     if(!($dbname==$stdName)){
        header('Location:./bookIssue.php?error=nomatch');
        exit();
     }
     
             
else{
$sql1="INSERT INTO `library`(`regi`, `stdname`, `bookname`, `isbn`, `issue`,`org`) VALUES ('$registration','$stdName','$bookName','$isbn','$date','$org')";
if(mysqli_query($conn,$sql1)){
    header('Location:./bookIssue.php?error=success');
    exit();
}
else{
    header('Location:./bookIssue.php?error=errro');
    exit();
}
          }
        
      }
    
    else{
        header('Location:./bookIssue.php?error=invalid');
        exit();
      
    }
}

    
    







?>