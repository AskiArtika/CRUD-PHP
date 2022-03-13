<?php
    if (isset($_POST['login'])){
        $user=$_POST['username'];
        $pass=$_POST['password'];
        if ($user=="jaka" && $pass=="1234"){
            echo "<h2>Login Berhasil</h2>";
        } else {
            echo "<h2>Login Gagal</h2>";
        }
        echo "<a href='login.php'>Kembali</a>";
    }
?>