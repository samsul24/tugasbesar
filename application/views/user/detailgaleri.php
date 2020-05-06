<?php if($this->session->userdata('level')!='user'){redirect('login');};?>
  <title><?php echo $title; ?></title>
  <style>
  
.container {
    padding-left: 10vh;
    padding-right: 10vh;
}

</style>
<body>
  <main>
  <div class="cc">
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Detail Image</h2>
        </div>
        <div class="card-body">
        <?php foreach ($gambar as $rows) : ?>
          <div class="container dashboardCatalog">
        <img src="<?php echo base_url('img/' . $rows->foto) ?>" style=" width: 15em;
    grid-row: 1/span 7; "/>
        <div>
        <h2 style="grid-column: 2/span 2;"> <?php echo $rows->nama_img; ?></h2>

        <hr>
        </div>

        <div>
        <p style="grid-column: 2" align="justify"> <b> Keterangan </b> : <br> <?php echo $rows->keterangan?></p>
        </div>
        
        <div style="margin: 5px 0px; grid-row: 7; grid-column: 2;">
        <a href="<?php echo site_url() ?>userlogin/galeri" class="btn btn-primary" role="button">Back</a>
                </div>
    </div>
        <div>
        <hr>
        </div>

        <div>
        </div>

                    </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <br>
        <br>
        
      
  </main>
  <footer>

  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
    </div>
</div>

