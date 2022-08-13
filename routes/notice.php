<?php 
include '../includes/head.php'
?>


<?php
$errorcheck="";
if(isset($_GET['error'])){
    $errorcheck=$_GET['error'];
}
?>

<div class="container-fluid row">
<div class="col-sm-12">
<div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                   
                                </div>
                                <small class="text-danger text-center m-3">
                                    <?php
                                    if($errorcheck=="notsuccess"){
                                        echo "error please try again";
                                    }
                                    ?>
                                </small>
                                <small class="mt-3 text-success text-center">
                                <?php
                                    if($errorcheck=="success"){
                                        echo "notice publised successfully";
                                    }
                                    ?>
                                </small>
                                <form class="container" action="./noticeprocess.php"    method="POST">
                                    <div class="row">
                                        <div class="mt-2 col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="title" name="title" class="form-control" required>
                                        </div>

                                        
                                        </div>
                                        <div class="mt-5 mb-5 col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Detail</label>
                                            <input type="text" placeholder="Description" name="desc" class="form-control " required>
                                          
                                        </div>
                                        
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" name="publish" class="btn btn-success mt-5">publish</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>



<?php 
include '../includes/footer.php'
?>