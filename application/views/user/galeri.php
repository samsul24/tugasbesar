<?php if($this->session->userdata('level')!='user'){redirect('login');};?>
<div class="container-fluid mt-3">
    <div class="row">
        <?php $i = 1;
        foreach ($gambar as $rows) : ?>
            <div class="col-sm-3">
                <div class="card text-center">
                    <div class="card-body">
                        <a><img src="<?php echo base_url('img/' . $rows->foto) ?>" width="200px" height="200px" /></a>
                        <h3><?php echo $rows->nama_img; ?></h3>
                    </div>
                    <div class="card-footer">
                    <a href="<?php echo site_url(); ?>gambaruser/detail/<?php echo $rows->id_img; ?>"  class="btn btn-primary">
                    Detail </a>
                    </div>
    <br>
                    
                </div>
    <br>

            </div>
            <br><br>

        <?php $i++;
        endforeach; ?>
        
    </div>
    <br><br>
    </div>
    <br><br>
</div>