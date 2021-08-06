<?php 
include "../koneksi.php";
	
	if(isset($_POST['submit1'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $level = htmlspecialchars($_POST['level']);

        $cekUsername = mysqli_query($con, "SELECT username FROM user WHERE username = '$username' ");
        if(mysqli_fetch_assoc($cekUsername)){
            echo "<script>
                        alert('Username Telah Digunakan');
                        window.location.href = 'index.php';
                    </script>";
                return false;
        }
        

        function uploadImg(){
            $nama_file = $_FILES['foto']['name'];
            //$tipe_file = $_FILES['foto']['type'];
            $temp_file = $_FILES['foto']['tmp_name'];
            $size_file = $_FILES['foto']['size'];

            $formatImgFalid = ['jpg','png','jpeg'];
            $formatImg = explode(".", $nama_file);
            $formatImg = strtolower(end($formatImg));

            if(!in_array($formatImg, $formatImgFalid)){
                echo "<script>
                        alert('File Tidak Support');
                        window.location.href = 'index.php';
                    </script>";
                return false;
            }

            if($size_file >= 5000000){
            echo "<script>
                    alert('File Tidak Boleh > 5MB');
                    window.location.href = 'index.php';
                </script>";
            return false;

            }

            $nama_file_baru = uniqid();
            $nama_file_baru .= '.';
            $nama_file_baru .= $formatImg;

            move_uploaded_file($temp_file, '../gambar/'.$nama_file_baru);

            return $nama_file_baru;
        }

        $foto = uploadImg();
        if(!$foto){
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $simpan = mysqli_query($con, "INSERT INTO user (username, password, level, foto) VALUES ('$username','$password','$level','$foto')");
    
            if ($simpan) {
                echo "<script>
                        alert('Data Telah Ditambah');
                        window.location.href = '../index.php?page=user';
                    </script>";
            }else{
                echo "<script>
                        alert('Terjadi Kesalahan');
                        window.location.href = '../index.php?page=tambahuser';
                </script>";
        }

    }elseif (isset($_POST['submit2']))
    	
    {
    	$nis=htmlspecialchars($_POST['nis']);
    	$nama=htmlspecialchars($_POST['nama']);
    	$ttl=htmlspecialchars($_POST['ttl']);
    	$gender=htmlspecialchars($_POST['j_kelamin']);
    	$alamat=htmlspecialchars($_POST['alamat']);
    	$kelas=htmlspecialchars($_POST['kelas']);


        $ceknis = mysqli_query($con, "SELECT nis FROM siswa WHERE nis = '$nis' ");
        if(mysqli_fetch_assoc($ceknis)){
            echo "<script>
                        alert('NIS Telah Digunakan');
                        window.location.href = 'index.php?page=tambahsiswa';
                    </script>";
                return false;
        }
        

        function uploadImgMhs(){
            $nama_file = $_FILES['foto']['name'];
            //$tipe_file = $_FILES['foto']['type'];
            $temp_file = $_FILES['foto']['tmp_name'];
            $size_file = $_FILES['foto']['size'];

            $formatImgFalid = ['jpg','png','jpeg'];
            $formatImg = explode(".", $nama_file);
            $formatImg = strtolower(end($formatImg));

            if(!in_array($formatImg, $formatImgFalid)){
                echo "$nama_file";
                return false;
            };

            if($size_file >= 5000000){
            echo "<script>
                    alert('File Tidak Boleh > 5MB');
                    window.location.href = 'index.php';
                </script>";
            return false;

            }

            $nama_file_baru = uniqid();
            $nama_file_baru .= '.';
            $nama_file_baru .= $formatImg;

            move_uploaded_file($temp_file, '../gambarsw/'.$nama_file_baru);

            return $nama_file_baru;
        }

        $foto = uploadImgMhs();
        if(!$foto){
            return false;
        }

        $simpan1 = mysqli_query($con, "INSERT INTO siswa(nis, nama,kelas, ttl, gender, alamat, foto) values ('$nis','$nama','$kelas','$ttl','$gender','$alamat','$foto')");

        if ($simpan1) {
            echo "<script>
                    alert('Data Telah Ditambah');
                    window.location.href = '../index.php?page=siswa';
            </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesalahan');
                    window.location.href = '../index.php?page=tambahsiswa';
            </script>";
        }
    }

 ?>