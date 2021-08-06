<div class="col-xl-12 col-md-12">
                        							<div class="card">
                                                    <div class="card-header">
                                                        <h5>Masukkan Data Siswa</h5>
                                            
                                                    </div>
                                                    <div class="card-block">
                                                        
                                                        <form method="post" action="konten/prosestambah.php" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label badge-inverse-primary">Masukkan Nis</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan nis" aria-label="Username" aria-describedby="basic-addon1" name="nis" required="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label badge-inverse-primary">Masukkan Nama</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan nama siswa" aria-label="Username" aria-describedby="basic-addon1" name="nama" required="">
                                                                </div>
                                                            </div>
                                                            
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label badge-inverse-primary">Pilih Kelas</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" aria-label="Default select example" name="kelas" required="">
                                                                          
                                                                          <option value="VII">VII</option>
                                                                          <option value="VIII">VIII</option>
                                                                          <option value="IX">IX</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                              <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label badge-inverse-primary">Masukkan TTL</label>
                                                              <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Masukkan TTL" aria-label="Username" aria-describedby="basic-addon1" name="ttl" required="">
                                                                </div>
                                                              </div>

                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label badge-inverse-primary">Pilih Jenis Kelamin</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="form-control" aria-label="Default select example" name="j_kelamin" required="">
                                                                          <option>Pilih Jenis kelamin</option>
                                                                          <option value="Laki-Laki">Laki-Laki</option>
                                                                          <option value="Perempuan">Perempuan</option>
                                                                        </select>
                                                                    </div>  
                                                                </div>

                                                                <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label badge-inverse-primary">Masukkan Alamat</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea rows="5" cols="5" class="form-control"
                                                                                placeholder="Masukkan Alamat" name="alamat"></textarea>
                                                                            </div>
                                                                        </div>

                                                                  <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label badge-inverse-primary">Pilih Foto</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="file" class="form-control" name="foto">
                                                                            </div>
                                                                    </div>
                                                                    <button type="submit" name="submit2" class="btn btn-inverse btn-round waves-effect waves-light">Tambah</button>
                                                                    </form>   
                                                                        </div>

                                                                    
                                                                </div>
                                                            </div>