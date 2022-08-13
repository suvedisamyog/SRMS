<?php
session_start();
$org=$_SESSION['mail'];
require '../connection.php';
$sql="SELECT * FROM admin where email='$org'";
$data=mysqli_query($conn,$sql);
$result=mysqli_fetch_assoc($data);
$dbpass=$result['password'];





if(isset($_POST['cahngeorgname'])){
    $newname=$_POST['newname'];
    $pass=$_POST['cpass'];
       
        
     if(password_verify( $pass,$dbpass)){
          $sql_for_name="UPDATE `admin` SET `name`='$newname' where email='$org' ";
          if(mysqli_query($conn,$sql_for_name)){
            header('location:./editProfile.php?error=success');
              exit();
          
          }
     }
     else{
         
         header('location:./editProfile.php?error=incorrectpassword');
         exit();
     }
}


if(isset($_POST['passchange'])){
 
 $newpass=$_POST['newpass'];
 $confirmnewpass=$_POST['newcpass'];
 $oldpass=$_POST['oldpass'];

 if($newpass==$confirmnewpass){
    if(password_verify( $newpass,$dbpass)){
        header('location:./editProfile.php?error=sameasold');
        exit();
    }   
    else{
        if(password_verify( $oldpass,$dbpass)){
            $sql_for_pass="UPDATE `admin` SET `password`='$newpass' where email='$org'";
            if(mysqli_query($conn,$sql_for_pass)){
              header('location:./logout.php');
                exit();
            
            }

        }
        else{
            header('location:./editProfile.php?error=incorrectpassword');
            exit(); 
        }
    }
 }
 else{
    header('location:./editProfile.php?error=Passwordsnotmatch');
    exit(); 
 }

}



if(isset($_POST['logochange'])){

    $pass=$_POST['oldlcpass'];
    if(password_verify( $pass,$dbpass)){

  
    $files = $_FILES['lchange'];
$filename=$files['name'];

$fileerror=$files['error'];

$filetemp=$files['tmp_name'];
    $fileext=explode('.',$filename);
   
    $filecheck=strtolower(end($fileext));
    $fileextstored=array('png','jpeg','jpg');
    if(in_array($filecheck,$fileextstored)){
        $destinationfile='../img/'.$filename;
        move_uploaded_file($filetemp,$destinationfile);
       

        $sql_for_img="UPDATE `admin` SET `image`='$destinationfile' where email='$org'";
        if(mysqli_query($conn,$sql_for_img)){
          header('location:./editProfile.php?error=success');
            exit();
        
        }
    
    }
    else{
        header('loacation:./editprofile.php?invalidformat');
    }




    }
    else{
        header('location:./editProfile.php?error=incorrectpassword');
        exit(); 
    }


}
?>