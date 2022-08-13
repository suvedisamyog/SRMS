<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['mail'])){
 header('location:../adminLogin.php');
}
 require '../connection.php';
 $org=$_SESSION['mail'];
?>
<!--  -->


<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
          <!-- .......................bootstrap css and js...................... -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
          
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



         
      
<!-- ..........................font qwsom script................................................. -->



<script src="https://kit.fontawesome.com/f2d7c9ef63.js" crossorigin="anonymous"></script>



  <!-- ...................................google api......................... -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<!-- ..........................custom css................................................. -->


<link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/sidBar.css">
<link rel="stylesheet" href="../css/head.css">
<link rel="stylesheet" href="../css/editprofile.css">



<!-- ..........................custom js................................................. -->

<script src="../scripts/index.js"></script>
<script src="../scripts/tableSearch.js"></script>
<script src="../scripts/changeprofile.js"></script>

    <title>Student Management</title>

   

  </head>
  <body>
    
    <div class="navigation">
      <nav class="bg-info ">
        <div class=" p-3 row">
          <div class="ms-5 col-xxl-3  toogler" >
          <button onclick="toogle()" class="toogler" ><i class="fa-solid fa-bars "></i></button>

          </div>
          <div class="col-xxl-3">
            <h5 class="panel-center">
            ADMIN PANEL
            </h5>
          </div>
          <div class="col-xxl-3 ">
            <h5 class="text-capitalize panel-center">
            <?php
             $forname="select name from admin where email='$org'";
             $fire=mysqli_query($conn,$forname);
             $result=mysqli_fetch_assoc($fire);
             echo $result['name'];
            ?>
            </h5>
          </div>
        </div>


        
      </nav>
    </div>
  <div class="d-flex">
      <div class="one bg-info showsidebar" id="onee">
     
        <div class="sidenavtoogle showsidebar" >
          <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-info  " >
              <div class="container-fluid" id="sidBarCss">
           
                  <ul class="navbar-nav  sidebar   accordion" id="accordionSidebar">
                    
                    <small class="text-capitalize orgname">
            <?php
             $forname="select name from admin where email='$org'";
             $fire=mysqli_query($conn,$forname);
             $result=mysqli_fetch_assoc($fire);
             echo $result['name'];
            ?>
            </small>
                    
                      <?php
                      
                          $sql = "SELECT * FROM `admin` WHERE email='$org'";
                          
                          $data = mysqli_query($conn, $sql);
                          if (mysqli_num_rows($data) != 0) {
                              while ($row = mysqli_fetch_assoc($data)) { 
                              
                                ?>
                                  <img class="img-responsive  mt-4 mb-4 "
                                  style="
                                                         box-shadow: 0px 0px 3px 10px rgba(200,200,200,.2);
                                                         border-radius:40%;
                                  "
                                  height=150 width=150 src="<?php echo $row['image']; ?>" <?php }
                                                                  }
                                                              
                                                                          ?> <!-- Sidebar -->
                                  <ul class="navbar-nav sidebar  sidebar-dark accordion" id="accordionSidebar">
                                      <li class="nav-item ">
                                          <a class="nav-link" href="./dashboard.php">
                                              <i class="fas fa-fw fa-tachometer-alt"></i>
                                              <span>Dashboard</span></a>
                                      </li>
          <hr>
                                      <li class="nav-item mb-4 ">
                                          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                               <i class="fa-solid fa-users"></i> Students</a>
                                          <ul class="list-unstyled collapse" id="pageSubmenu">
                                              <li class="nav-item ">
                                                  <a class="nav-link mt-3" href="./addStudents.php">
                                                      <i class="fas fa-plus-circle"></i>
                                                      <span>Add </span></a>
                                              </li>
                                              <li class="nav-item ">
                                                  <a class="nav-link" href="./studentsDetail.php">
                                                      <i class="fas fa-info-circle"></i>
                                                      <span> Details</span></a>
                                              </li>
                                              <li class="nav-item ">
                                                  <a class="nav-link" href="./searchStudent.php">
                                                      <i class="fa fa-fw fa-search"></i>
                                                      <span>Search </span></a>
                                              </li>
                                          </ul>
                                      </li>
                                      <hr>
                                      <li class="nav-item mb-4" >
                                          <a href="#pageLibrary" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> 
                                          <i class="fa-solid fa-book-open-reader"></i> Library</a>
                                          <ul class="list-unstyled collapse" id="pageLibrary">
                                              <li class="nav-item mt-3">
                                                  <a class="nav-link" href="./bookIssue.php">
                                                      <i class="fas fa-edit"></i>
                                                      <span>Issue book</span></a>
                                              </li>
                                              <li class="nav-item ">
                                                  <a class="nav-link" href="./bookReturn.php">
                                                      <i class="fas fa-edit"></i>
                                                      <span>Return Book</span></a>
                                              </li>
                                          </ul>
                                      </li>
                                      <hr>
                                      <li class="nav-item mb-4">
                                          <a href="#pageNotice" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> 
                                          <i class="fa-solid fa-message"></i> Notice</a>
                                          <ul class="list-unstyled collapse" id="pageNotice">
                                              <li class="nav-item mt-3">
                                                  <a class="nav-link" href="./notice.php">
                                                      <i class="fas fa-flag"></i>
                                                      <span>publish notice</span></a>
                                              </li>
                                              <li class="nav-item ">
                                                  <a class="nav-link" href="./noticeBoard.php">
                                                      <i class="fas fa-question-circle"></i>
                                                      <span>Notice Board</span></a>
                                              </li>
                                          </ul>
                                      </li>
                                      <hr>
                                      <li class="nav-item mb-4">
                                          <a href="#pageExtra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">
                                          <i class="fa-solid fa-gears"></i> Others</a>
                                          <ul class="list-unstyled collapse" id="pageExtra">
                                              <li class="nav-item ">
                                                  <a class="nav-link mt-3" href="./editProfile.php">
                                                      <i class="fas fa-edit"></i>
                                                      <span>Edit Profile</span></a>
                                              </li>
                                              <li class="nav-item ">
                                                  <a class="nav-link" href="logout.php " onclick="window.confirm">
                                                      <i class="fas fa-edit"></i>
                                                      <span>logout</span>
                                                  </a>
                                              </li>
                                          </ul>
                                      </li>
                                      <hr>
                                  </ul>
              </div>
          </div>
          </div>




      </div>
      <div class="two">

    

   
  
 
