<?php
include '../includes/head.php';
?>



    <?php
    $bit_fetch = "SELECT * FROM `students` WHERE `course`='BIT'  and org='$org'";
    $bit_data = mysqli_query($conn, $bit_fetch);
    $bit_total = mysqli_num_rows($bit_data);
    if ($bit_total != 0) {
        $bit = $bit_total;
    } else {
        $bit = 0;
    }
    ?>
    <br>
    <?php
    $bca_fetch = "SELECT * FROM `students` WHERE `course`='BCA' and org='$org' ";
    $bca_data = mysqli_query($conn, $bca_fetch);
    $bca_total = mysqli_num_rows($bca_data);
    if ($bca_total != 0) {
        $bca = $bca_total;
    } else {
        $bca = 0;
    }
    ?>
    <?php
    $bim_fetch = "SELECT * FROM `students` WHERE `course`='BIM' and org='$org' ";
    $bim_data = mysqli_query($conn, $bim_fetch);
    $bim_total = mysqli_num_rows($bim_data);
    if ($bim_total != 0) {
        $bim = $bim_total;
    } else {
        $bim = 0;
    }
    ?>
    <?php
    $csit_fetch = "SELECT * FROM `students` WHERE `course`='Bsc.CSIT' and org='$org' ";
    $csit_data = mysqli_query($conn, $csit_fetch);
    $csit_total = mysqli_num_rows($csit_data);
    if ($csit_total != 0) {
        $csit = $csit_total;
    } else {
        $csit = 0;
    }
    ?>
    <?php
    $sql1 = "SELECT * FROM `students` WHERE `gender`='MALE' AND `course`='BCA' and org='$org'";
    $data1 = mysqli_query($conn, $sql1);
    $total1 = mysqli_num_rows($data1);
    if ($total1 != 0) {
        $bca_m = $total1;
    } else {
        $bca_m = 0;
    }
    ?>
    <?php
    $sql2 = "SELECT * FROM `students` WHERE `gender`='FEMALE' AND `course`='BCA' and org='$org'";
    $data2 = mysqli_query($conn, $sql2);
    $total2 = mysqli_num_rows($data2);
    if ($total2 != 0) {
        $bca_f = $total2;
    } else {
        $bca_f = 0;
    }
    ?>
    <?php
    $sql3 = "SELECT * FROM `students` WHERE `gender`='MALE' AND `course`='BIT' and org='$org'";
    $data3 = mysqli_query($conn, $sql3);
    $total3 = mysqli_num_rows($data3);
    if ($total3 != 0) {
        $bit_m = $total3;
    } else {
        $bit_m = 0;
    }
    ?>
    <?php
    $sql4 = "SELECT * FROM `students` WHERE `gender`='FEMALE' AND `course`='BIT'";
    $data4 = mysqli_query($conn, $sql4);
    $total4 = mysqli_num_rows($data4);
    if ($total4 != 0) {
        $bit_f = $total4;
    } else {
        $bit_f = 0;
    }
    ?>
    <?php
    $sql5 = "SELECT * FROM `students` WHERE `gender`='MALE' AND `course`='BIM' and org='$org'";
    $data5 = mysqli_query($conn, $sql5);
    $total5 = mysqli_num_rows($data5);
    if ($total5 != 0) {
        $bim_m = $total5;
    } else {
        $bim_m = 0;
    }
    ?>
    <?php
    $sql6 = "SELECT * FROM `students` WHERE `gender`='FEMALE' AND `course`='BIM' and org='$org'";
    $data6 = mysqli_query($conn, $sql6);
    $total6 = mysqli_num_rows($data6);
    if ($total6 != 0) {
        $bim_f = $total6;
    } else {
        $bim_f = 0;
    }
    ?>
    <?php
    $sql7 = "SELECT * FROM `students` WHERE `gender`='MALE' AND `course`='Bsc.CSIT'";
    $data7 = mysqli_query($conn, $sql7);
    $total7 = mysqli_num_rows($data7);
    if ($total7 != 0) {
        $csit_m = $total7;
    } else {
        $csit_m = 0;
    }
    ?>
    <?php
    $sql8 = "SELECT * FROM `students` WHERE `gender`='FEMALE' AND `course`='Bsc.CSIT' and org='$org'";
    $data8 = mysqli_query($conn, $sql8);
    $total8 = mysqli_num_rows($data8);
    if ($total8 != 0) {
        $csit_f = $total8;
    } else {
        $csit_f = 0;
    }
    ?>
    <div class="container-fluid  ">
        <div class="card ">
            <div class="card-body">
                <h1 class="card-title text-center mb-5 text-success">Summery</h1>
                <div class="row ">
                    <div class="col-sm-12 col-lg-6">
                        <div id="piechart_3d" style=" height: 500px;"></div>
                    </div>
                    <div class="col-sm-12 col-lg-6 card bg-success" style="height:40vh; width:25rem;">
                        <div class="d-flex justify-content-between ">
                            <div><i class="fa-solid fa-people-group fa-5x m-4 mt-5  card"></i></div>
                            <div class="m-5 mt-5 me-5 card text-center" style="width:5rem;">
                                <h1>
                                    <?php
                                    $totalres = "SELECT * FROM `students` WHERE org='$org'";
                                    $fire = mysqli_query($conn, $totalres);
                                    $final = mysqli_num_rows($fire);
                                    echo $final;
                                    ?>
                                </h1>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <h1>Total Students</h1>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover black mt-3">
                            <h3 class="table-title text-center text-capitalize mb-4 black mt-4">Gender details with
                                Respect to courses</h3>
                            <thead>
                                <tr class=" black">
                                    <th>S.N</th>
                                    <th>Courses</th>
                                    <th>MALE</th>
                                    <th>FEMALE</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>BCA</>
                                    </td>
                                    <td>
                                        <?php echo $bca_m; ?>
                                    </td>
                                    <td>
                                        <?php echo $bca_f; ?>
                                    </td>
                                    <td>
                                        <?php echo $bca_m + $bca_f; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>BIT</>
                                    </td>
                                    <td>
                                        <?php echo $bit_m; ?>
                                    </td>
                                    <td>
                                        <?php echo $bit_f; ?>
                                    </td>
                                    <td>
                                        <?php echo $bit_m + $bit_f; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>BIM</>
                                    </td>
                                    <td>
                                        <?php echo $bim_m; ?>
                                    </td>
                                    <td>
                                        <?php echo $bim_f; ?>
                                    </td>
                                    <td>
                                        <?php echo $bim_m + $bim_f; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Bsc.CSIT</>
                                    </td>
                                    <td>
                                        <?php echo $csit_m; ?>
                                    </td>
                                    <td>
                                        <?php echo $csit_f; ?>
                                    </td>
                                    <td>
                                        <?php echo $csit_m + $csit_f; ?>
                                    </td>
                                </tr>
                                <tr class="bg-warning">
                                    <th>Total</th>
                                    <th>4</th>
                                    <th>
                                        <?php echo $m = $bca_m + $bit_m + $bim_m + $csit_m ?>
                                    </th>
                                    <th>
                                        <?php echo $f = $bca_f + $bit_f + $bim_f + $csit_f ?>
                                    </th>
                                    <th>
                                        <?php echo  $m + $f ?>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['courses ', 'TOtal Students'],
                <?php
                echo " ['BCA', .$bca],  ";
                echo " ['BIT', .$bit],  ";
                echo " ['BIM', .$bim],  ";
                echo " ['BSC.CSIT', .$csit],  ";
                ?>
            ]);
            var options = {
                title: 'Students in enrolled Courses',
                is3D: true,
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>





<?php
include '../includes/footer.php';
?>