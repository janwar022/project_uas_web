<?php 

include "koneksi.php";

    $id=$_GET["id"];

    $sql = mysqli_query($con, "SELECT * FROM siswa WHERE id = '$id'");
    $data = mysqli_fetch_array($sql);

if(isset($_POST['simpan'])){

        $nis = htmlspecialchars($_POST['nis']);
        $nama = htmlspecialchars($_POST['nama']);
        $kelas = htmlspecialchars($_POST['kelas']);
        $ttl = htmlspecialchars($_POST['ttl']);
        $gender = htmlspecialchars($_POST['gender']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $fotolama = htmlspecialchars($_POST['fotolama']);

        function uploadImgMhs(){
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
                        window.location.href = 'index.php?page=mahasiswa';
                    </script>";
                return false;
            }

            if($size_file >= 5000000){
            echo "<script>
                    alert('File Tidak Boleh > 5MB');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
            return false;

            }

            $nama_file_baru = uniqid();
            $nama_file_baru .= '.';
            $nama_file_baru .= $formatImg;

            move_uploaded_file($temp_file, 'gambarsw/'.$nama_file_baru);

            return $nama_file_baru;
        }

        if($_FILES['foto']['error'] == 4){

            $foto = $data["foto"];

            $simpan = mysqli_query($con, "UPDATE siswa SET
            nis = '$nis',
            nama = '$nama',
            kelas = '$kelas',
            ttl = '$ttl',
            gender = '$gender',
            alamat ='$alamat',
            foto ='$foto'

            WHERE id = '$id';");

        if ($simpan) {
            echo "<script>
                    alert('Data Telah Diubah');
                    window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesalahanhhh');
                    window.location.href = 'index.php';
            </script>";
        }
        }else{
            $foto = uploadImgMhs();
            if(!$foto){
            return false;
            }

            $simpan = mysqli_query($con, "UPDATE siswa SET
            nis = '$nis',
            nama = '$nama',
            kelas = '$kelas',
            ttl = '$ttl',
            gender = '$gender',
            alamat ='$alamat',
            foto ='$foto'

            WHERE id = '$id';");

        if ($simpan) {
            $hapusFoto = 'gambarsw/'.$data['foto'];
            unlink($hapusFoto);
            echo "<script>
                    alert('Data Telah Diubah');
                    window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script>
                    alert('Terjadi Kesalahan');
                    window.location.href = 'index.php';
            </script>";
        }


        }        

    }



 ?>

                                      <div class="col-xl-12 col-md-12">
                         							<div class="card">
                                                    <div class="card-header">
                                                        <h5>Ubah Data Siswa</h5>
        
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        <form method="post" action="" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Masukkan Nis</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan nid" aria-label="Username" aria-describedby="basic-addon1" name="nis" value=<?php  echo $data["nis"]; ?>>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Masukkan Nama</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan nid" aria-label="Username" aria-describedby="basic-addon1" name="nama" value=<?php  echo $data["nama"]; ?>>
                                                                </div>
                                                            </div>
                                                            
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Pilih Kelas</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" aria-label="Default select example" name="kelas" required="">
                                                                          
                                                                          <option value="VII">VII</option>
                                                                          <option value="VIII">VIII</option>
                                                                          <option value="IX">IX</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                              <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">TTL</label>
                                                              <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan nid" aria-label="Username" aria-describedby="basic-addon1" name="ttl" value=<?php  echo $data["ttl"]; ?>>
                                                                </div>
                                                              </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Pilih Jenis Kelamin</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" aria-label="Default select example" name="gender" required="">
                                                                          <option value="Laki-Laki">Laki-Laki</option>
                                                                          <option value="Perempuan">Perempuan</option>
                                                                        </select>
                                                                    </div>  
                                                                </div>

                                                                <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Masukkan Alamat</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea rows="5" cols="5" required="" class="form-control"
                                                                                placeholder="Default textarea" name="alamat"></textarea>
                                                                            </div>
                                                                        </div>

                                                                  <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Pilih Foto</label>
                                                                            <div class="col-sm-10">
                                                                               <img src="gambarsw/<?php echo $data['foto']; ?>" class="img-thumbnail" style="width: 100px; height: 100px;">
																                <input type="hidden" name="fotoLama" class="form-control" value="<?php echo $data['foto']; ?>">

																                <input type="file" name="foto" class="form-control" value="<?php echo $data['foto']; ?>">">
                                                                            </div>
                                                                    </div>
                                                                    <button type="submit" name="simpan" class="btn btn-inverse btn-round waves-effect waves-light">Kirim</button>
                                                                    </form>   
                                                                        </div>

                                                                    
                                                                </div>
                                                            </div>