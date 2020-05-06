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
                    <h3 class="text-center">Latihan Soal</h3><br><br>
                    <!-- <a href="<?php echo site_url(); ?>soaluser/post" class="btn btn-danger mb-3" role="button">Tambah</a> -->
                           <tr>
                                <p><b>Pilihlah salah satu jawaban yang paling benar dengan menuliskan huruf a,b,c atau d!</b> </p>
                                <!-- <th>Kategori</th> -->
                                <!-- <th>Jawaban </th> -->
                                <!-- <th>Actions </th> -->
                            </tr>
                        <?php 
                        $i=1;
                        foreach ($soal as $rows) : ?>
                                <tr>
                                    <a><?php echo $i ;?>).&nbsp;</a>
                                    <!-- <td><?php echo $rows->kategori; ?></td> -->
                                    <a><?php echo $rows->pertanyaan; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;a. <?php echo $rows->pil_a; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;b. <?php echo $rows->pil_b; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;c. <?php echo $rows->pil_c; ?></a><br>
                                    <a>&emsp;&nbsp;&nbsp;&nbsp;d. <?php echo $rows->pil_d; ?></a><br>
                                    <!-- <td><?php echo $rows->jawaban; ?></td> -->
                                    <td>
                                        </button>
                                    </td>
                                </tr>
                                
                            <?php
                        $i++;
                        endforeach; ?>
                              <br><br><br>  &nbsp;&nbsp; &nbsp;&nbsp;<a class="btn btn-danger btn-sm tombol-kanan" href="<?php echo base_url(); ?>soaluser/latihan_pdf" ><i class="fa fa-file">
                               </i>&nbsp;&nbsp;PDF</a>
                               <a class="btn btn-primary btn-sm tombol-kanan" href="<?php echo base_url(); ?>soaluser/print" ><i class="fa fa-print">
                               </i>&nbsp;&nbsp;Cetak</a>
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