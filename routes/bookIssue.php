<?php 
include '../includes/head.php'
?>
<?php
  $errorcheck="";
  if(isset($_GET['error'])){
      $errorcheck=$_GET['error'];
       
  }

?>
 
<div class="container-fluid">
    <div class="card m-3">
        <small class="text-danger text-center m-3">
            <?php
if($errorcheck=="errro"){
    echo "**Unknown error?please try again";
}
if($errorcheck=="invalid"){
    echo "**Invalid Registration Number";
}
if($errorcheck=="nomatch"){
    echo "**Registration number and name donot match";
}

?>
        </small>
    </div>
   
            <?php
if($errorcheck=="success"){
 echo
 
 '
 <div class="card m-3">
 <small class="text-center text-success m-3">
 Book Successfuully issued
 </small>
 </div>
 ';

}
            ?>
      
<div class="m-4">
    <form action="./issubookprocess.php" method="POST" >
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Registration Num</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="library_registration_num" name="reg" placeholder="Registration Number" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Student Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="" name="stdName" placeholder="Student Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">ISBN Number</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id=""name="isbn" placeholder="ISBN Number" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Book Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id=""name="bookName" placeholder="Book Name" required>
            </div>
        </div>
        <div class="row mb-3">
            <label  class="col-sm-2 col-form-label">Issue Date</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" id=""name="date" placeholder="" required>
            </div>
        </div>
        
       
        <div class="rowt mt-4">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" name="issue" class="btn btn-primary btn-lg">Issue </button>
                <button type="reset" class="btn btn-warning btn-lg m-3 ">Reset </button>

            </div>
        </div>
    </form>
</div>
</div>


<?php 
include '../includes/footer.php'
?>