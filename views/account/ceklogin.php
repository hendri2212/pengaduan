
<?php
	if(isset($_POST['login'])) {
		$username	= $_POST['username'];
		$password	= $_POST['password'];
        
        $cek    = mysqli_query($connection, "SELECT * FROM petugas WHERE username='$username' AND password=md5('$password')");
        $result = mysqli_num_rows($cek);
        $session= mysqli_fetch_array($cek);

        if ($result > 0) {
            $_SESSION['id_petugas']     = $session['id_petugas'];
            $_SESSION['nama_petugas']   = $session['nama_petugas'];
            $_SESSION['level']          = $session['level'];
            header("location:?page=approve");
        } else { ?>
            <script>alert("Username or Password Wrong")</script>
            <script language="javascript">document.location.href="?page=login"</script> -->

        <?php
        }
	}
?>