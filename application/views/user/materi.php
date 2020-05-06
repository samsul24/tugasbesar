<?php if($this->session->userdata('level')!='user'){redirect('login');};?>

                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    	
                        <div class="container-fluid">
                            <div class="row mt-3">
                          <div class="col">
                             <div class="card">
                             <div class="card-header">
          <h2 class="text-center">Alat Pernafasan</h2>
        </div>      
                                <div class="card-body">
                                <div class="container">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                                </button>
                                <?php $i=1; foreach ($materi as $rows) : ?>

                                <div class="dropdown-menu">
                                    <a type="hidden" id="alat pernafasan"class="dropdown-item" href="" >Alat Pernafasan</a>
                                    
                                    <a type="hidden" id="habitat" class="dropdown-item" href="<?php echo site_url(); ?>userlogin/kategori/<?php echo $rows->kategori='habitat'; ?>">Habitat</a>
                                    <a type="hidden" id="morfologi" class="dropdown-item" href="">Morfologi</a>
                                    <a type="hidden" id="family" class="dropdown-item" href="">Family</a>
                    		    </div>
                                <?php
                                $i++;
                                endforeach; ?>
                                    </div>
                                <?php $i=1; foreach ($materi as $rows) : ?>
                                 <br><br>
                                <h3><?php echo $rows->nama;?></h1>
                                            <br>
                                            <h5>&nbsp;<?php echo $rows->keterangan; ?></h5>
                                            <center><a><img src="<?php echo base_url('img/' . $rows->image) ?>" width="600px" height="300px" /></a></center>
                                                                        
                                            <?php
                                $i++;
                                endforeach; ?>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            
        </div>
    </div>
</div>