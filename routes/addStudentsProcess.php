<?php
session_start();
require '../connection.php';
if(isset($_POST['add'])){
    $org=$_SESSION['mail'];
   
    $regi=$_POST['reg_num'];
    $mail=$_POST['email'];
    $regcheck="SELECT * FROM students WHERE registration='$regi' ";

    $data = mysqli_query($conn,$regcheck) ;
    $regcount = mysqli_num_rows($data);

    $mailcheck="SELECT * FROM students WHERE email='$mail' ";
    $maildata=mysqli_query($conn,$mailcheck) ;

    $mailcount=mysqli_num_rows($maildata);
    if($regcount >=1){
       echo'
       <script>
       window.alert("registration Number Already In Use");
       </script>
      
       ';
       header('Location:./addStudents.php?error=Registration Number Already In Use');
       exit();
       

    }
    else{   

        if($mailcount >=1){
            echo'
            <script>
            window.alert("Email  Already In Use");
            </script>
           
            ';
            header('Location:./addStudents.php?error=Email  Already In Use');
            exit();
        }
        else{
        
        $reg=$regi;
        $email=$mail;
    





$sname=$_POST['sname'];

$phone=$_POST['Phonenumber'];

$course=$_POST['course'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$eroll=$_POST['eyear'];
$gender=$_POST['gender'];

$files = $_FILES['file'];
$filename=$files['name'];
$fileerror=$files['error'];

$filetemp=$files['tmp_name'];
$fileext=explode('.',$filename);
$fileActualExt=strtolower(end($fileext));
$fileextstored=array('png','jpeg','jpg');
if(in_array($fileActualExt,$fileextstored)){
    $fileNewName=uniqid('',true).".".$fileActualExt;
    $destinationfile='../img/'.$fileNewName;

    move_uploaded_file($filetemp,$destinationfile);






$sql="INSERT INTO `students`(`registration`, `name`, `email`, `phone`,  `course`, `address`, `dob`, `enrollyear`, `gender`, `image`,`org`) VALUES ('$reg','$sname','$email','$phone','$course','$address','$dob','$eroll','$gender', '$destinationfile','$org')";


if(mysqli_query($conn, $sql)){
   
 header("location:./studentsDetail.php");
    
}
else{
    header("Location:./addStudents.php?error=Error while inserting");
    exit();
    

}
        }
        else{
            header("Location:./addStudents.php?error=File format should be png or jpeg or jpg");
            exit();
            
        
        }
    }
  }
}



?>