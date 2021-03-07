<h5>Data Petugas</h5>
<p>Berikuta data petugas verifikasi hasil laporan masyarakat</p>
<div class="row">
    <div class="col-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="nama_petugas">Nama Petugas</label>
                <input type="text" name="nama_petugas" id="nama_petugas" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="telp">No. Whatsapp</label>
                <input type="text" name="telp" id="telp" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <input type="submit" name="petugas" value="Save" class="btn btn-success mt-3">
            </div>
        </form>
    </div>
    <div class="col-6">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>No. Whatsapp</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        $query = mysqli_query($connection, "SELECT * FROM petugas");
                        while($data = mysqli_fetch_object($query)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nama_petugas ?></td>
                        <td><?php echo $data->username ?></td>
                        <td><?php echo $data->telp ?></td>
                        <td><?php echo $data->level ?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
	if(isset($_POST['petugas'])) {
		$nama_petugas   = $_POST['nama_petugas'];
		$username	    = $_POST['username'];
		$password	    = $_POST['password'];
		$telp	        = $_POST['telp'];

        $register = mysqli_query($connection, "INSERT INTO petugas (nama_petugas, username, password, telp, level) VALUES('$nama_petugas', '$username', md5('$password'), '$telp', 'petugas')");
        if($register) { ?>
            <script>alert("Registration Success")</script>
            <script language="javascript">document.location.href="?page=petugas"</script>
        <?php }
	}
?>