<?php 
include '../includes/head.php'
?>

<div class="container-fluid row bdr mb-4" id="notice-board">
            <h4 class="text-center p-4  ">Notice Board </h4>
            <div class="row ">
                <?php
                $sql = "select * from notice where organization='$org' order by time desc limit 12 ";
              
                $notice = mysqli_query($conn, $sql);
                if (mysqli_num_rows($notice) != 0) {
                    while ($info = mysqli_fetch_assoc($notice)) {
                ?>
                        <div class="col-xxl-6  col-md-12  card   mb-4 ">
                            <div class=" border-success mb-3 scrollable">
                                <h6 class="card-header  border-success">
                                    <?php echo $info['title']; ?>
                                </h6>
                                <div class="card-body text-success">
                                    <p class="card-text">
                                        <?php echo $info['description']; ?>
                                    </p>
                                </div>
                               
                            </div>
                            <div class="d-flex ">
                            <a  <?php echo "href='./editnotice.php?id=$info[id]';" ?> class="btn btn-warning">Modify</a>
                               <a onclick="return confirm('Are you sure you want to delete ?')" <?php echo "href='./deletenotice.php?id=$info[id]';" ?> class="ms-4 btn btn-danger" >Delete</a> 
                               </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>


<?php 
include '../includes/footer.php'
?>