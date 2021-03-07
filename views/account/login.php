<h5 class="text-center mb-5">Halaman login</h5>
<div class="d-flex justify-content-between">
    <div class="col-6 bg-info p-4 rounded">
        <h6>MEMBER</h6>
        <p>Silahkan login untuk akses halaman member !</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" name="login" value="Login" class="btn btn-success mt-2">
            </div>
        </form>
    </div>
    <div class="col-5 bg-light p-4">
        <h6>PETUGAS</h6>
        <p>Silahkan login untuk mengelola aplikasi</p>
        <form action="?page=ceklogin" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" name="login" value="Login" class="btn btn-success mt-2">
            </div>
        </form>
    </div>
</div>

<?php
	if(isset($_POST['login'])) {
		$username	= $_POST['username'];
		$password	= $_POST['password'];
        
        $cek    = mysqli_query($connection, "SELECT * FROM masyarakat WHERE username='$username' AND password=md5('$password')");
        $result = mysqli_num_rows($cek);
        $session= mysqli_fetch_array($cek);

        if ($result > 0) {
            $_SESSION['nik']    = $session['nik'];
            $_SESSION['nama']   = $session['nama'];
            header("location:?page=pengaduan");
        } else { ?>
            <script>alert("Username or Password Wrong")</script>
            <script language="javascript">document.location.href="?page=login"</script> -->

        <?php
        }
	}
?>