<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="cc">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
            <div class="card-header">
						<h2>Form Tambah Data Soal</h2>
					</div>
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>ujianuser/post_process" class="needs-validation" method="POST">
                        </div>
                        
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan :</label>
                            <input type="text" class="form-control" id="pertanyaan" placeholder="Pertanyaan" name="pertanyaan" required>
                        </div>
                        <div class="form-group">
                            <label for="jawab_a">Pilihan A </label>
                            <input type="text" class="form-control" id="jawab_a" placeholder="Jawab_a" name="jawab_a" required>
                        </div>
                        <div class="form-group">
                            <label for="jawab_b">Pilihan B</label>
                            <input type="text" class="form-control" id="jawab_b" placeholder="Jawab_b" name="jawab_b" required>
                        </div>
                        <div class="form-group">
                            <label for="jawab_c">Pilihan C</label>
                            <input type="text" class="form-control" id="jawab_c" placeholder="Jawab_c" name="jawab_c" required>
                        </div>
                        <div class="form-group">
                            <label for="jawab_d">Pilihan D</label>
                            <input type="text" class="form-control" id="jawab_d" placeholder="Jawab_d" name="jawab_d" required>
                        </div>
                        <div class="form-group">
                            <label for="">Jawaban :</label>
                            <select class="form-control" id="jawaban" name="jawaban" required>
                                <option value="a">a</option>
                                <option value="b">b</option>
                                <option value="c">c</option>
                                <option value="d">d</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Jawaban :</label>
                            <select id="jawaban" class="form-control" name="jawaban" required>
                            <?php foreach ($ujian as $rows) : ?>
                                <option value="a"><?php echo $rows->nomor; ?> - <?php echo $rows->jawaban; ?>a</option>
                                <option value="<?php echo $rows->nomor; ?>"><?php echo $rows->nomor; ?> - <?php echo $rows->jawaban; ?>b</option>
                                <option value="<?php echo $rows->nomor; ?>"><?php echo $rows->nomor; ?> - <?php echo $rows->jawaban; ?>c</option>
                                <option value="<?php echo $rows->nomor; ?>"><?php echo $rows->nomor; ?> - <?php echo $rows->jawaban; ?>d</option>
                            <?php endforeach; ?>
                            </select>
                        </div> -->
                      
                        <div class="form-group">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                Tambah
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin menambah data ini ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Tambah</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>