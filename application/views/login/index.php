<div class="container-fluid mt-3">
    <img src="<?php echo base_url(); ?>css/assets/img1/1.png" class="mx-auto d-block"  width="470px" height="300px">
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <div class="card login">
                <div class="card-body">
                    <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                    }
                    ?>
                    <form action="<?php echo site_url() ?>login/log_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="user" placeholder="Masukkan username" name="user" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" required>
                        </div>
                        <button type="submit" class="btn  btn-success btn-block">Login</button>
                        <a href="<?php echo site_url() ?>login/reg" class="btn btn-dark btn-block" role="button">Registrasi</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>