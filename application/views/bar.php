<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
      <?php if ($this->session->flashdata('result') != '') { ?>
          <div class="alert alert-dark alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $this->session->flashdata('result'); ?>
          </div>
      <?php
      }
      ?>
<div class="topBar">

	<div id="sidebar">

		<div class="menubar d-flex flex-row justify-content-between" >
			<div class="rowBar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="dropdown">
				<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false" >
					<i class="fa fa-user" aria-hidden="true"></i><?php echo $this->session->flashdata('user');?>
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="<?= base_url().'login/out' ?>" onClick="return confirm('Apakah kamu yakin akan keluar dari akun ini ??');">Log Out</a>
				</div>
			</div>
		</div>
		<div class="card bg-dark text-white rounded-0" style="height:61.5rem">
			<div class="card-header">
				<span class="fa fa-user" style="font-size:2rem"></s>
					<b>
						<span style="font-size:2rem"><a> Dashboard</a></span>
					</b>
			</div>
			<div class="card-body p-0">
				<ul class="nav d-flex flex-column">
				<li class="nav-item">
						<a href="" class="nav-link active text-white av">
							<i class="" aria-hidden="true"></i> &nbsp;
							<span> Main Menu </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>soaluser" class="nav-link text-white">
							<i class="fa fa-archive" aria-hidden="true"></i> &nbsp;
							<span> Atur Soal </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>materiuser" class="nav-link text-white">
							<i class="fas fa-edit" aria-hidden="true"></i> &nbsp;
							<span> Atur Materi </span>
						</a>
					</li>
					
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>userclient" class="nav-link active text-white">
							<i class="fa fa-address-book" aria-hidden="true"></i> &nbsp;
							<span> Atur User </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>gambaruser" class="nav-link active text-white">
							<i class="fas fa-camera" aria-hidden="true"></i> &nbsp;
							<span> Galeri </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link active text-white av">
							<i class="" aria-hidden="true"></i> &nbsp;
							<span> Report </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>ujianuser" class="nav-link active text-white">
							<i class="fa fa-building" aria-hidden="true"></i> &nbsp;
							<span> Mengelola Ujian </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url(); ?>ujianuser/hasil" class="nav-link active text-white">
							<i class="fas fa-clipboard" aria-hidden="true"></i> &nbsp;
							<span> Hasil Ujian </span>
						</a>
					</li>
					<!-- <li class="nav-item">
						<a href="<?= base_url().'admin/blog' ?>" class="nav-link active text-white">
							<i class="fa fa-blog" aria-hidden="true"></i> &nbsp;
							<span> Blog </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'admin/admin' ?>" class="nav-link active text-white">
							<i class="fa fa-user" aria-hidden="true"></i> &nbsp;
							<span> Admin </span>
						</a>
					</li> -->
					
					<li class="nav-item">
						<a href="" class="nav-link active text-white av">
							<i class="" aria-hidden="true"></i> &nbsp;
							<span> Halaman User </span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url().'userlogin' ?>" class="nav-link active text-white">
						<i class="fas fa-arrow-alt-circle-left" aria-hidden="true"></i> &nbsp;
							<span> Go To User </span>
						</a>
					</li>
				</ul>
			</div>
			<div class="card-footer">
				<h6 class="text-white">@ Copyright by PantEducation</h6>
			</div>
	
		</div>
	</div>

</div>
