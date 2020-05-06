<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="cc">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
            <div class="card-header">
						<h2>Form update Data Soal</h2>
					</div>
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>soaluser/put_process" class="needs-validation" method="POST" >
                        <?php foreach ($soal as $rows) : ?>
                            <div class="form-group">
                                <label for="id_soal">ID Soal :</label>
                                <input type="text" class="form-control" id="id_soal" placeholder="ID Soal" value="<?php echo $rows->id_soal; ?>" name="id_soal" required readonly>
                            </div>
                        <div class="form-group">
                            <label for="sel1">Kategori :</label>
                                <input type="text" class="form-control" id="selected" value="<?php echo $rows->kategori; ?>">
                                <select class="form-control" id="kategori" name="kategori" required>
                                <option value="Habitat">Habitat</option>
                                <option value="Alat Pernafasan">Alat Pernafasan</option>
                                <option value="Morfologi">Morfologi</option>
                                <option value="Family">Family</option>
                                <option value="Lain-lain">Lain - lain</option>
                                </select>
                         </div>
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan :</label>
                            <input type="text" class="form-control" id="pertanyaan" placeholder="Pertanyaan" name="pertanyaan" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="pil_a">Jawaban A</label>
                            <input type="text" class="form-control" id="pil_a" placeholder="PIL_A" name="pil_a" required>
                        </div>
                        <div class="form-group">
                            <label for="pil_b">Jawaban B</label>
                            <input type="text" class="form-control" id="pil_b" placeholder="PIL_B" name="pil_b" required>
                        </div>
                        <div class="form-group">
                            <label for="pil_c">Jawaban C</label>
                            <input type="text" class="form-control" id="pil_c" placeholder="PIL_C" name="pil_c" required>
                        </div>
                        <div class="form-group">
                            <label for="pil_d">Jawaban D</label>
                            <input type="text" class="form-control" id="pil_d" placeholder="PIL_D" name="pil_d" required>
                        </div>
                        <!-- <div class="form-group">
                            <label for="jawaban">Jawaban Benar </label>
                            <input type="text" class="form-control" id="jawaban" placeholder="Jawaban" name="jawaban" required>
                        </div> -->
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
                            <script>
                                function setSelectBoxByText(eid, etxt) {
                                    var eid = document.getElementById(eid);
                                    for (var i = 0; i < eid.options.length; ++i) {
                                        if (eid.options[i].value === etxt)
                                            eid.options[i].selected = true;
                                    }
                                }

                                var eid = "kategori";
                                var etxt = document.getElementById("selected").value;
                                document.getElementById("selected").style.display = "none";
                                setSelectBoxByText(eid, etxt)
                            </script>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>