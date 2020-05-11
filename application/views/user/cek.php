<?php if($this->session->userdata('level')!='user'){redirect('login');};?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <h3 class="text-center">Hasil Jawaban</h3><br><br>
                    <!-- <a href="<?php echo site_url(); ?>soaluser/post" class="btn btn-danger mb-3" role="button">Tambah</a> -->
                           <tr>
                                <p><b>Jawaban anda :  </b> </p>
                                <!-- <th>Kategori</th> -->
                                <!-- <th>Jawaban </th> -->
                                <!-- <th>Actions </th> -->
                            </tr>
                        <?php 
                        $i=1;
                        foreach ($temp_jawab as $rows) : ?>
                                <tr>
                                    <input  name="angka" value="<?= $this->session->userdata('angka'); ?>"> 
                                    <a>jawaban no <?php echo $rows['id_soal']; ?> : </a>
                                    <a><?php echo $rows['jawaban']; ?> </a><br>
                                    
                                        </button>
                                    </td>
                                </tr>
                            <?php
                        $i++;
                        endforeach; ?>
                      
                        <br><br>
                              <div class="button">
              <ul class="left">
                <input type="submit" class="left" name="next" value="Cek Jawaban">
              </ul>
            </div>

                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>Apa anda yakin ingin menghapus data ini ?</p>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <a href="<?php echo site_url(); ?>soaluser/delete/<?php echo $rows->id_soal; ?>" class="btn btn-danger" role="button">Hapus</a>
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>