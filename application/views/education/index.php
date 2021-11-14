<!-- Begin Page Content -->
<div class="container-fluid">
    <h3 class="h3 mb-4 text-gray-800"><?= $title; ?>
    </h3>


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
                        <div class="container ml-8">
                            <a href="" class="btn btn-success">Tambah Loker</a>
                        </div>
                    </div>
                </div>

            </form>

        </div>

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
                            <td>Aksi</td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800">
    </h1>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>National Exam Scores</td>
                            <td>School Exam Scrores</td>
                            <td>Practice Exam Scores</td>
                        </tr>
                        <?php $no = 1; ?>
                        <tr>
                            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                                <td><?= $no++ ?></td>
                                <td><?= $row["name"] ?></td>
                                <td><?= $row["nilai_un"] ?></td>
                                <td><?= $row["nilai_us"] ?></td>
                                <td><?= $row["nilai_up"] ?></td>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->