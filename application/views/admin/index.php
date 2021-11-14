<?php
$conn = mysqli_connect("localhost", "root", "", "db_login");
$data = mysqli_query($conn, "SELECT * FROM user_profile");
?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb text-gray-800"><?= $title; ?>
    </h1>

    <div class="row">
        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h4 font-weight-bold text-info text-uppercase mb-1">Sign-in Registration
                                        </div>
                                        <div class="h5 mt-3 font-weight-bold " style="font-size:16px;">22 Peoples</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300" style="font-size: 70px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="h4 font-weight-bold text-success text-uppercase mb-1">PASS THE SELECTION
                                        </div>
                                        <div class="h5 mt-3 font-weight-bold " style="font-size:16px;">6 Peoples</div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-users fa-2x text-gray-300" style="font-size: 70px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- <td><span class="badge badge-info">NEW</span></td> -->





            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->