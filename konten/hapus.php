<?php 
// 
include "../koneksi.php";

if (isset($_GET['hapus1'])) {
	$id = $_GET['hapus1'];
    $sql = mysqli_query($con, "SELECT * FROM user WHERE id = '$id'");
    $data = mysqli_fetch_array($sql);
    
    $sql = mysqli_query($con, "DELETE FROM user WHERE id = '$id'");

    if ($sql) {
        $hapusFoto = '../gambar/'.$data['foto'];
        unlink($hapusFoto);
        echo "<script>
                alert('Data Telah Dihapus');
                window.location.href = '../index.php?page=user';
        </script>";
    }else{
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location.href = '../index.php?page=user';
        </script>";
    }
}else{
	$id = $_GET['hapus2'];
    $sql = mysqli_query($con, "SELECT * FROM siswa WHERE id = '$id'");
    $data = mysqli_fetch_array($sql);
    
    $sql = mysqli_query($con, "DELETE FROM siswa WHERE id = '$id'");

    if ($sql) {
        $hapusFoto = '../gambarsw/'.$data['foto'];
        unlink($hapusFoto);
        echo "<script>
                alert('Data Telah Dihapus');
                window.location.href = '../index.php?page=siswa';
        </script>";
    }else{
        echo "<script>
                alert('Terjadi Kesalahan');
                window.location.href = '../index.php?page=siswa';
        </script>";
    }
}


 ?>