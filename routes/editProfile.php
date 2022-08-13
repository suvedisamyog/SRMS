<?php 
include '../includes/head.php'
?>

<?php
$sql="select * from admin where email='$org' ";
$data = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($data);


?>
<?php
$checkerror;
if(isset($_GET['error'])){
  $checkerror=$_GET['error'];
}


?>
<div class="container card mt-3">
  <small class="text-center m-3 text-danger">
  <?php
if($checkerror=="sameasold"){
  echo "**New Password Cannot Be Same As old**";
   
}
if($checkerror=="incorrectpassword"){
  echo "**Incorrect Password**";
   
}
if($checkerror=="Passwordsnotmatch"){
  echo "**New Password And Confirm Password Donot Match**";
   
}


?>
</small>

<small class="text-center text-success">
  <?php
  if($checkerror=="success"){
    echo "Successfully Updated";
     
  }
  
  ?>
</small>
<div class="text-center">
<table class="table table-hover table-striped " >
    <tr>
        <th>Name</th>
        <td ><?=$row['name']; ?></td>
        <td><button class="btn" onclick="shownamechange()"><i class="fa-solid fa-pen-to-square"></i></button></td>
    </tr>
    </table>

    <div class="hidding"  id="namechange">
        <div class="d-flex justify-content-center ">
        <form action="./editprofileprocess.php" method="post"  class="card mb-5">
            <div class="form-group m-3">
              <label >New Name</label>
              <input type="text" class="form-control" name="newname"  placeholder="new name" minlength="5" maxlength="25" required >
            </div>
            <div class="form-group m-3">
              <label >Password</label>
              <input type="password" class="form-control" name="cpass" placeholder="Password"  required>
            </div>
            
            <button type="submit" name="cahngeorgname" class="btn btn-warning mb-3">Change</button>
          </form>
        </div>
        </div>





        <table class="table table-hover table-striped " >
    <tr>
    <th>Password</th>
        <td >**********</td>
        <td><button class="btn" onclick="showpasschange()"><i class="fa-solid fa-pen-to-square"></i></button></td>    </tr>
    </table>



    
<div class="hidding" id="passchange">
    <div class="d-flex justify-content-center ">
        <form   action="./editprofileprocess.php" method="post" class="card mb-5">
            <div class="form-group m-3">
              <label>New password</label>
              <input type="password" class="form-control" name="newpass"  placeholder="New Password" minlength="5"  maxlen="14" required >
            </div>
            <div class="form-group m-3">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="newcpass" placeholder="Confirm New Password" minlength="5"  maxlen="14" required >
              </div>
            <div class="form-group m-3">
              <label >Old Password</label>
              <input type="password" class="form-control" name="oldpass" placeholder="Password" required>
            </div>
            
            <button type="submit" name="passchange" class="btn btn-warning mb-3">Change</button>
          </form>
        </div>
    </div>

    <table class="table table-hover table-striped " >
    <tr>
        <th>Logo</th>
        <td ><img class=" rounded-circle  " src="<?=$row['image'] ?>" alt="" style="height:80px; width:80px;"></td>
        <td><button class="btn" onclick="showlogochange()"><i class="fa-solid fa-pen-to-square"></i></button></td>
    </tr>
    </table>



    <div class="hidding" id="logochange">
        <div class="d-flex justify-content-center ">
            <form  action="./editprofileprocess.php" method="post" enctype="multipart/form-data"  class="card mb-5">
                <div class="form-group m-3">
                  <label>New Logo</label>
                  <input type="file" class="form-control" name="lchange" required>
                </div>
                <div class="form-group m-3">
                    <label> Password</label>
                    <input type="password" class="form-control" name="oldlcpass"  placeholder="Confirm New Password" required>
                  </div>
             
                
                <button type="submit"  name="logochange" class="btn btn-warning mb-3">Change</button>
              </form>
            </div>
        </div>
        </div>
        </div>
        </div>

<?php 
include '../includes/footer.php'
?>