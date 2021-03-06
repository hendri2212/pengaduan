<h5>Halaman pengaduan</h5>
<p>Silahkan buat aduan dengan mengisi kolom berikut</p>
<div class="row">
    <div class="col-6">
        <form action="?page=savereport" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="laporan">Isi Laporan</label>
                <textarea name="isi_laporan" id="" cols="30" rows="10" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="Foto">Foto</label>
                <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" required>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <input type="submit" name="report" value="Save" class="btn btn-success">
            </div>
        </form>
    </div>
    <div class="col-6">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>NIK</th>
                        <th>Laporan</th>
                        <th>Foto</th>
                        <th class="text-nowrap">Tgl ditanggapi</th>
                        <th>Petugas</th>
                        <th>Tanggapan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        $nik = $_SESSION['nik'];
                        $query  = mysqli_query($connection, "SELECT a.tgl_pengaduan, a.nik, a.isi_laporan, a.foto, a.status, b.tgl_tanggapan, b.tanggapan, c.nama_petugas FROM pengaduan AS a LEFT JOIN tanggapan AS b ON a.id_pengaduan = b.id_pengaduan LEFT JOIN petugas AS c ON b.id_petugas = c.id_petugas WHERE nik='$nik'");
                        while ($data = mysqli_fetch_object($query)) {
                    ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td class="text-nowrap"><?php echo $data->tgl_pengaduan ?></td>
                        <td><?php echo $data->nik ?></td>
                        <td><?php echo $data->isi_laporan ?></td>
                        <td><img src="./assets/images/pengaduan/small_<?php echo $data->foto ?>" alt="<?php echo $data->foto ?>"></td>
                        <td><?php echo $data->tgl_tanggapan ?></td>
                        <td><?php echo $data->nama_petugas ?></td>
                        <td><?php echo $data->tanggapan ?></td>
                        <td>
                            <?php if($data->status=="proses"){?>
                            <span class="badge rounded-pill bg-info">Proses</span>
                            <?php } else { ?>
                            <span class="badge rounded-pill bg-success">Selesai</span>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>