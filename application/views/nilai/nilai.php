<?php
$conn = mysqli_connect("localhost", "root", "", "db_login");
$data = mysqli_query($conn, "SELECT * FROM user_nilai");
if (isset($_POST["Simpan"])) {
    $name = $_POST["name"];
    $nilai_un = $_POST["nilai_un"];
    $nilai_us = $_POST["nilai_us"];
    $nilai_up = $_POST["nilai_up"];

    $tambah = mysqli_query($conn, "INSERT INTO user_nilai VALUES ('','$name','$nilai_un','$nilai_us','$nilai_up')");
    $cek = mysqli_affected_rows($conn);

    if ($cek > 0) {
        echo '<script>alert("data berhasl ditambah")</script>';
    } else {
        echo '<script>alert("data gagal ditambah")</script>';
    }
}
?>


<!-- Begin Page Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container-fluid">
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-dark border-0 small" placeholder="--Pilih Keahlian--" aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <a class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Lowongan Pekerjaan</h6>
        </div>
        <br>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>Detail Lowongan</td>
                            <td>Keahlian</td>
                            <td>Opsi</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>