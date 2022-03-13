<?php
    $judul = "Input Data";
    include "kepala.php";
?>

    <div class="container mt-5">      
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        Masukkan data
                    </div>
                    <div class="card-body">
                        <form action="simpan_data.php" method="post">                   
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                </div>
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-3 pt-0">Level</legend>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" value="1" checked>
                                        <label class="form-check-label" for="Administrator">
                                            Administrator
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" value="2">
                                        <label class="form-check-label" for="Operator">
                                            Operator
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" value="3">
                                        <label class="form-check-label" for="User">
                                            User
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary float-end">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include "kaki.php";
?>