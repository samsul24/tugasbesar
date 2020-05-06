<?php if ($this->session->userdata('level') != 'user') {
  redirect('login');
}; ?>
<div class="cc">
  <!-- <h1 class="mt-2 mb-3 font-weight-bold">Data Materi</h1> -->
    <!-- <div class="mb-3">
        <a href="<?php echo site_url(); ?>materiuser/post" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>
    </div> -->
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
         
        </tr>
        
        <?php
         $i=1;
         foreach ($bab as $rows) : ?>
              <div class="col-md-4">

<a class="mt-2 mb-3 font-weight-bold"><?php echo $i ;?>).&nbsp;</a>
                     <a class="mt-2 mb-3 font-weight-bold"><?php echo $rows->nama_bab; ?></a><br>
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="<?php echo base_url(); ?>css/assets/img1/darat.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="#">Habitat
                          <br />Tanaman kentang</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">Darat</span>
                      </div>
                      <a href="#" class="link-a">Click here to view
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Kandungan</h4>
                          <span>Vit A,B dan C
                            <sup></sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Jenis</h4>
                          <span>Umbi-umbian</span>
                        </li>
                        <li>
                         
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
             <?php
         $i++;
         endforeach; ?>
      
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>