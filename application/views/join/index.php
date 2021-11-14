<?php
$conn = mysqli_connect("localhost", "root", "", "db_login");
$data = mysqli_query($conn, "SELECT * FROM user_profile");
if (isset($_POST["Simpan"])) {
    $name = $_POST["name"];
    $birth_place = $_POST["birth_place"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $religion = $_POST["religion"];
    $home_address = $_POST["home_address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $tambah = mysqli_query($conn, "INSERT INTO user_profile VALUES ('','$name','$birth_place','$date_of_birth','$gender','$religion','$home_address','$phone','$email')");
    $cek = mysqli_affected_rows($conn);

    if ($cek > 0) {
        echo '<script>alert("data berhasl ditambah")</script>';
    } else {
        echo '<script>alert("data gagal ditambah")</script>';
    }
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class=" text-center h3 mb-4 text-gray-800">JOIN US WITH CGY</h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <form class="user" action="" method="post">
                <div class="form-group">
                    <label for="name">Full name</label>
                    <input type="text" name="name" class="form-control " id="name" placeholder="full name">
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="birth_place">Birth Place</label>
                        <input type="text" name="birth_place" class="form-control " id="birth place" placeholder="birth place">
                    </div>
                    <div class="col-md-6">
                        <label for="date_of_birth">Birth of Place</label>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth" placeholder="Birth of Place">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="gender">Gender</label>
                        <div class="form-check">
                            <input type="radio" name="gender" value="Man" class="form-check-input" id="Man">
                            <label for="Man" class="form-check-label">Man</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="gender" value="Woman" class="form-check-input" id="Woman">
                            <label for="Woman" class="form-check-label">Woman</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="religion">Religion</label>
                        <select name="religion" id="religion" class="form-control">
                            <option value="">Religions</option>
                            <option value="Kristen" name="religion">Kristen</option>
                            <option value="Islam" name="religion">Islam</option>
                            <option value="Katolik" name="religion">Katolik</option>
                            <option value="Budha" name="religion">Budha</option>
                            <option value="Hindu" name="religion">Hindu</option>
                            <option value="Konghucu" name="religion">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="home_address">Home Address</label>
                    <textarea name="home_address" id="home_address" class="form-control"></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="email">Email Active</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email Active">
                    </div>
                    <div class="col-md-6">
                        <label for="phone">No.Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="No.Phone">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password ">
                    </div>
                    <div class="col-md-6">
                        <label for="repeat_password">Repeat Password</label>
                        <input type="password" name="repeat_password" class="form-control" id="repeat_password" placeholder="Repeat Password">
                    </div>
                </div>
                <button type="submit" name="Simpan" class="btn btn-primary mb-5">Change</button>
                <a href="dashboard.php" class="btn btn-danger mb-5">Back</a>
            </form>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">PERSONAL DATA</h6>
                </div>
                <?php
                while ($row = mysqli_fetch_assoc($data)) {
                ?>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img rounded-elips" style="width: 250px">
                        </div>

                        <h5 class="text-center card-title mt-2"><?= $row["name"] ?></h5>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Place,Date</h6>
                                <small><?= $row["birth_place"] ?> , <?= $row["date_of_birth"] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Gender</h6>
                                <small><?= $row["gender"] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Religion</h6>
                                <small><?= $row["religion"] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Home Address</h6>
                                <small><?= $row["home_address"] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Email</h6>
                                <small><?= $row["email"] ?></small>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-0" style="color:black;">Phone</h6>
                                <small><?= $row["phone"] ?></small>
                            </li>
                        </ul>
                    </div>
            </div>
        <?php }
        ?>
        </div>
        <!-- hasil penilain-->
        <!--<div class="row">
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> ANNOUNCEMENT OF SELECTION</h6>
                        </div>
                        <div class="card-body">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 mt-3"> ASSESSMENT PROCESS</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-spinner text-warning" style="font-size: 90px;"></i>
                                    </div>
                                    <p class="card-text"> Thank You for Registering at PT.CAKRAWALA GLOBAL YAKSA</p>
                                    <span class="badge badge-danger" style="font-size: 14px;"> HOPEFULLY REGISTERED IN OUR COMPANY</span>
                                </div>
                                <div class="card-footer">
                                    <marquee style="margin-bottom: -6px;"> COMPANY PT.CAKRAWALA GLOBAL YAKSA - BRANCH BANDUNG</marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> ANNOUNCEMENT OF SELECTION RESULT</h6>
                        </div>
                        <div class="card-body">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 mt-3"> CONGRATULATION </h5>
                                    <div class="col-auto">
                                        <i class="far fa-check-circle text-success" style="font-size: 90px;"></i>
                                    </div>
                                    <p class="card-text"> Congratulation You Pass The Selection At PT.CAKRAWALA GLOBAL YAKSA</p>
                                    <span class="badge badge-primary" style="font-size: 14px;"> YOU HAVE BECOME A MEMBER OF OUR COMPANY!</span>
                                </div>
                                <div class="card-footer">
                                    <marquee style="margin-bottom: -6px;">COMAPANY PT.CAKRAWALA GLOBAL YAKSA - BRANCH BANDUNG</marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> ANNOUNCEMENT OF SELECTION RESULT</h6>
                        </div>
                        <div class="card-body">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title mb-3 mt-3"> SORRY YOU DIDN'T PASS</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-times text-danger" style="font-size: 90px;"></i>
                                    </div>
                                    <p class="card-text"> Sorry, don't pass this selection. Please try again later. Thank you for participating in this selection</p>
                                </div>
                                <div class=" card-footer">
                                    <marquee style="margin-bottom: -6px;"> COMPANY PT.CAKRAWALA GLOBAL YAKSA - BRANCH BANDUNG</marquee>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->