<h5>Tanggapan hasil laporan</h5>
<div class="col-6">
    <form action="" method="post">
        <div class="form-group">
        <label for="tanggapan">Berikan tanggapan hasil laporan warga</label>
            <textarea name="tanggapan" id="tanggapan" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" name="validasi" value="Save" class="btn btn-success mt-3">
        </div>
    </form>
</div>
<?php
	if(isset($_POST['validasi'])) {
		$id_pengaduan   = $_GET['id_pengaduan'];
		$tanggapan      = $_POST['tanggapan'];
		$id_petugas     = $_GET['id_petugas'];

        $register   = mysqli_query($connection, "INSERT INTO tanggapan (id_pengaduan, tanggapan, id_petugas) VALUES('$id_pengaduan','$tanggapan', '$id_petugas')");
        $status     = mysqli_query($connection, "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan='$id_pengaduan'");
        if($register) { ?>
            <script>alert("Berhasil memberikan tanggapan")</script>
            <script language="javascript">document.location.href="?page=verifikasi"</script>
        <?php }
	}
?>