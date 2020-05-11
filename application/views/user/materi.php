<?php if ($this->session->userdata('level') != 'user') {
  redirect('login');
}; ?>

<?php if ($this->session->flashdata('result') != '') { ?>
  <div class="alert alert-dark alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $this->session->flashdata('result'); ?>
  </div>
<?php
}
?>
<section class="sec headImage aos-init aos-animate" data-aos="zoom-in-up">
	<img src="http://www.datsuncarsandparts.com/data/archive/img/323424538.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=450&amp;w=700" alt="">
	<div class="headIndex">
		<!-- <h1 class="futura-head" style="font-size:3.5rem;">Blog</h1> -->
		<h2 class="futura-content" style="font-size:1.1rem;">
			<!-- <a class="imageLink" href="http://localhost/company-profile/user/home">Home &gt;</a>
			<a class="imageLink" href="http://localhost/company-profile/user/blog">Blog &gt;</a> -->
		</h2>
	</div>
</section>
<div class="container-fluid">
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Materi</h2>
        </div>
        <div class="card-body">
          <div class="container">
            <div>
            <h2>Pilih Materi</h2>
              <form action="" method="post">
                <select name="id_materi" class="form-control">
                  <?php foreach ($materi as $rows) : ?>
                    <option value="<?= $rows->id_materi ?>"><?= $rows->nama ?></option>
                  <?php endforeach; ?>
                </select>
                <button type="submit" class="btn btn-success form-control">Pilih</button>
              </form>
            </div>
          </div>
          <?php if (!empty($isimateri)) :
            foreach ($isimateri as $rows) :
          ?>
              <br><br>
              <h3><?php echo $rows->nama; ?></h1>
                <br>
                <h5>&nbsp;<?php echo $rows->keterangan; ?></h5>
                <center><a><img src="<?php echo base_url('img/' . $rows->image) ?>" width="600px" height="300px" /></a></center>
            <?php endforeach;
          endif ?>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>

</div>
</div>
</div>