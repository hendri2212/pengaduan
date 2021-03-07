<?php
	function UploadGambar($fupload_name){
		//direktori file
		$vdir_upload = "./assets/images/pengaduan/";
		$vfile_upload = $vdir_upload . $fupload_name;

		//Simpan gambar dalam ukuran sebenarnya
		move_uploaded_file($_FILES["foto"]["tmp_name"], $vfile_upload);

		//identitas file asli
		$im_src = imagecreatefromjpeg($vfile_upload);
		$src_width = imageSX($im_src);
		$src_height = imageSY($im_src);

		//Simpan dalam versi small 200 pixel
		//Set ukuran gambar hasil perubahan
		$dst_width  = 200;
		$dst_height = ($dst_width/$src_width)*$src_height;

		//proses perubahan ukuran
		$im = imagecreatetruecolor($dst_width,$dst_height);
		imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

		//Simpan gambar
		imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
	}
?>