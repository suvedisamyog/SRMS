<?php 
session_start();
require '../connection.php';
if (isset($_POST['publish'])){
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $org=$_SESSION['mail'];
   $sql=" INSERT INTO `notice`( `title`,`description`, `organization`) VALUES ('$title','$desc','$org')";
    if(mysqli_query($conn, $sql)){
        header("Location:./notice.php?error=success");
        exit();
     }
    else{
        header("Location:./notice.php?error=notsuccess");
        exit();
    }
}
?>