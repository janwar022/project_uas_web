<div class="col-xl-12 col-md-12">
                                                 <div class="card">
                                            <div class="card-header">
                                                <h5>Data Siswa</h5>
                                                
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                        <li><i class="fa fa-trash close-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-inverse">
                                                        <thead>
                                                            <tr>
                                                                  <th>Nis</th>
                                                                  <th>Nama</th>
                                                                  <th>kelas</th>
                                                                  <th>TTL</th>
                                                                  <th>gender</th>
                                                                  <th>alamat</th>
                                                                  <th>foto</th>
                                                                  <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <?php 
                                                        
        $tampil = mysqli_query($con,$query) or die (mysqli_error($con));
        // mengubah data yg didapat dari database kedalam array asosiatif 
                while ($data= mysqli_fetch_assoc($tampil)){

         ?>
      <tr>
          <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
          <th><?php echo $data["nis"]; ?></th>
          <th><?php echo $data["nama"]; ?></th>
          <th><?php echo $data["kelas"]; ?></th>
          <th><?php echo $data["ttl"]; ?></th>
          <th><?php echo $data["gender"]; ?></th>
          <th><?php echo $data["alamat"]; ?></th>
          <th><img src="gambarsw/<?php echo $data['foto']; ?>" class="img-thumbnail" style="width: 100px; height: 100px;"></th>
          <th>
     <button class="btn btn-warning waves-effect waves-light" onclick="return confirm('yakin ingin hapus?')"><a href="konten/hapus.php?hapus2=<?php echo $data["id"] ?>">hapus</a></button>
             | <button class="btn btn-info waves-effect waves-light"><a href="index.php?page=ubah&id=<?php echo $data["id"] ?>">ubah</a>
             </button></th>
        </div>
        </tr>


                                                             <?php } ?>
                                                           
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                            </div>