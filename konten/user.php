<div class="col-xl-12 col-md-12">
                                                 <div class="card">

                                            <div class="card-header">

                                                <h5>Data User</h5>

                                                
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
                                                                  <th>id</th>
													              <th>Username</th>
													              <th>Password</th>
													              <th>Level</th>
													              <th>Foto</th>
													              <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <?php 
                                                        $query="SELECT * FROM user ORDER BY id ASC";
        $tampil = mysqli_query($con,$query) or die (mysqli_error($con));
        // mengubah data yg didapat dari database kedalam array asosiatif 
                while ($data= mysqli_fetch_assoc($tampil)){

         ?>
                                                        	 <tr>
          <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
          <th><?php echo $data["id"]; ?></th>
          <th><?php echo $data["username"]; ?></th>
          <th><?php echo "*******"; ?></th>
          <th><?php echo $data["level"]; ?></th>
          <th><img src="gambar/<?php echo $data['foto']; ?>" class="img-thumbnail" style="width: 100px; height: 100px;"></th>
          <th>
            <button class="btn btn-info waves-effect waves-light"><a href="konten/hapus.php?hapus1=<?php echo $data["id"] ?>" onclick="return confirm('yakin ingin hapus?')">Hapus</a>
            </button>

            </th>
        </div>
        </tr>


                                                             <?php } ?>
                                                           
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                            </div>