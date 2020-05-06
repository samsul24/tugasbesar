<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="cc">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
            <div class="card-header">
						<h2>Form update Data Materi</h2>
					</div>
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>materi/put_process" class="needs-validation" method="POST" >
                        <?php foreach ($materi as $rows) : ?>
                            <div class="form-group">
                                <label for="id_materi">ID Soal :</label>
                                <input type="text" class="form-control" id="id_materi" placeholder="ID Materi" value="<?php echo $rows->id_materi; ?>" name="id_materi" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="id_sub">ID Subbab :</label>
                                    <select class="form-control" name="id_sub" required>
                                        <?php foreach ($subbab as $rows) : ?>
                                                <option value="<?php echo $rows->id_sub; ?>"><?php echo $rows->id_sub; ?> - <?php echo $rows->nama_sub; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="text">Nama Tumbuhan</label>

                                <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <label for="cover_buku" >Image
                                <div style="background : black; width: 100%; height: 300px;"> </div>
                                <input type="file" name="image" class="form-control" style="border-radius: 0px;" id="image">
                            </label>
                            <div class="form-group">
                                <label for="jumlah_halaman">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" placeholder="Enter jumlah" name="keterangan" required>
                                <div class="valid-feedback"></div>
                                <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                    <div class="form-group">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                    Update
                                </button>
                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <p>Apa anda yakin ingin mengupdate data ini ?</p>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success">Update</button>
                                                <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>