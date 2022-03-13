<?php
include 'kepala.php';
?>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent mb-0">
                    <h5 class="text-center">Silahkan Login</h5>
                </div>
                <div class="card-body">
                    <form action="cek-login.php" method="post" name="form1">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group d-grid">
                            <input type="submit" value="login" nama="login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'kaki.php';
?>