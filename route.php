<?php
    if (isset($_GET['page']) ==''){
        include "views/beranda/home.php";
    }
    elseif ($_GET['page'] == 'register'){
        if (isset($_SESSION['log'])=="logged") {
            header('Location: ?page=pengaduan');
        } else {
            include "views/account/register.php";
        }
    }
    elseif ($_GET['page'] == 'login'){
        if (isset($_SESSION['log'])=="logged") {
            header('Location: ?page=pengaduan');
        } else {
            include "views/account/login.php";
        }
    }
    elseif ($_GET['page'] == 'logout'){
        include "views/account/logout.php";
    }
    elseif ($_GET['page'] == 'pengaduan'){
        if ($_SESSION['nik']==null) {
            header('Location:/pengaduan');
        } else {
            include "views/report/report.php";
        }
    }
    elseif ($_GET['page'] == 'savereport'){
        include "views/report/savereport.php";
    }
    elseif ($_GET['page'] == 'ceklogin'){
        include "views/account/ceklogin.php";
    }
    elseif ($_GET['page'] == 'verifikasi'){
        if ($_SESSION['id_petugas']==null) {
            header('Location:?page=pengaduan');
        } else {
            include "views/data/verifikasi.php";
        }
    }
    elseif ($_GET['page'] == 'validasi'){
        if ($_SESSION['id_petugas']==null) {
            header('Location:?page=pengaduan');
        } else {
            include "views/data/validasi.php";
        }
    }
    elseif ($_GET['page'] == 'petugas'){
        if ($_SESSION['level']!="admin") {
            header('Location:?page=pengaduan');
        } else {
            include "views/data/petugas.php";
        }
    }
?>