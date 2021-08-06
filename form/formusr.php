<div class="col-xl-12 col-md-12">
                                      <div class="card">
                                                    <div class="card-header">
                                                        <h5>Masukkan Data User</h5>
                                                        
                                                    </div>
                                                    <div class="card-block">
                                                       
                                                        <form method="post" action="konten/prosestambah.php" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Masukkan Username</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan nis" aria-label="Username" aria-describedby="basic-addon1" name="username" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Masukkan Password</label>
                                                                <div class="col-sm-10">
                                                                    <input type="password" class="form-control" placeholder="Masukkan nama siswa" aria-label="Username" aria-describedby="basic-addon1" name="password" required="">
                                                                </div>
                                                            </div>
                                                            
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Pilih Level</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" aria-label="Default select example" name="level" required="">
                                                                          <option value="admin">Admin</option>
                                                                          <option value="walikls7">Wali Kelas 7</option>
                                                                          <option value="walikls8">Wali Kelas 8</option>
                                                                          <option value="walikls9">Wali Kelas 9</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                  <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Pilih Foto</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="file" name="foto" class="form-control" required>
                                                                            </div>
                                                                    </div>
                                                                    <button type="submit" name="submit1" class="btn btn-inverse btn-round waves-effect waves-light">Tambah</button>
                                                                    </form>   
                                                                        </div>

                                                                    
                                                                </div>
                                                            </div>