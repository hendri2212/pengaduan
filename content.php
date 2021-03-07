<?php
    if (isset($_GET['page']) ==''){
        include "views/beranda/home.php";
    }
    elseif ($_GET['page'] == 'register'){
        include "views/account/register.php";
    }
    elseif ($_GET['page'] == 'login'){
        include "views/account/login.php";
    }
    elseif ($_GET['page'] == 'logout'){
        include "views/account/logout.php";
    }
    elseif ($_GET['page'] == 'pengaduan'){
        include "views/report/report.php";
    }
?>