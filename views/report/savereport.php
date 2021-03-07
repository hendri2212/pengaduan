<?php
    if(isset($_POST['report'])) {
        $nik        = $_SESSION['nik'];
        $isi_laporan= $_POST['isi_laporan'];
        $dire       = $_FILES['foto']['tmp_name'];
        $foto       = $_FILES['foto']['name'];

        UploadGambar($foto);
        $report = mysqli_query($connection, "INSERT INTO pengaduan (nik, isi_laporan, foto) VALUES('$nik','$isi_laporan', '$foto')");
        if($report) { ?>
            <script>alert("Pengaduan Berhasil")</script>
            <script language="javascript">document.location.href="?page=pengaduan"</script>
        <?php }
    }
?>