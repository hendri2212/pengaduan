<h5>Halaman pendaftaran</h5>
<p>Silahkan daftar untuk menjadi member pengaduan !</p>
<div class="col-6">
    <form action="" method="post">
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="number" name="nik" id="nik" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telp">No. Whatsapp</label>
            <input type="number" name="telp" id="telp" class="form-control" required>
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" name="register" value="Register" class="btn btn-success mt-3">
        </div>
    </form>
</div>
<?php
    if (isset($_SESSION['nik'])!=null) {
        header("location:?page=pengaduan");
    }

	if(isset($_POST['register'])) {
		$nik        = $_POST['nik'];
		$nama	    = $_POST['nama'];
		$username	= $_POST['username'];
		$password	= $_POST['password'];
		$telp	    = $_POST['telp'];

        $register = mysqli_query($connection, "INSERT INTO masyarakat (nik, nama, username, password, telp) VALUES('$nik','$nama', '$username', md5('$password'), '$telp')");
        if($register) { ?>
            <script>alert("Registration Success")</script>
            <script language="javascript">document.location.href="?page=login"</script>
        <?php }
	}
?>