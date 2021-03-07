<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Laporan</th>
                <th>Foto</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Tanggapan</th>
                <th>Petugas</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                $query  = mysqli_query($connection, "SELECT a.id_pengaduan, a.tgl_pengaduan, a.nik, a.isi_laporan, a.foto, a.status, b.tgl_tanggapan, b.tanggapan, c.nama_petugas FROM pengaduan AS a LEFT JOIN tanggapan AS b ON a.id_pengaduan = b.id_pengaduan LEFT JOIN petugas AS c ON b.id_petugas = c.id_petugas");
                while ($data = mysqli_fetch_object($query)) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data->tgl_pengaduan ?></td>
                <td><?php echo $data->nik ?></td>
                <td><?php echo $data->isi_laporan ?></td>
                <td><img src="./assets/images/pengaduan/small_<?php echo $data->foto ?>" alt="<?php echo $data->foto ?>"></td>
                <td><?php echo $data->status ?></td>
                <td><?php echo $data->tgl_tanggapan ?></td>
                <td><?php echo $data->tanggapan ?></td>
                <td><?php echo $data->nama_petugas ?></td>
                <?php if(empty($data->tanggapan)) { ?>
                <td><a href="?page=validasi&id_pengaduan=<?php echo $data->id_pengaduan ?>&id_petugas=<?php echo $_SESSION['id_petugas'] ?>" class="btn btn-sm btn-primary">Cek</a></td>
                <?php } ?>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>