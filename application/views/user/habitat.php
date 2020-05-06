<?php if($this->session->userdata('level')!='user'){redirect('login');};?>

                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                    ?>
                        <?php 

                        $i=1;
                        foreach ($materi as $rows) : ?>
                        <div class="container-fluid">
                            <div class="row mt-3">

                          <div class="col">
                             <div class="card">
                                <div class="card-body">
                                <br><br>
                        <h3>*<?php echo $rows->nama;?></h1>
                                    <center><a><img src="<?php echo base_url('img/' . $rows->image) ?>" width="300px" height="300px" /></a></center>
                                    <br><br>
                                    <h5>&nbsp;<?php echo $rows->keterangan; ?></h5>
                                    <br><br>                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <?php
                        $i++;
                        endforeach; ?>
        </div>
    </div>
</div>