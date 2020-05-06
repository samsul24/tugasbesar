<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
    
    <div class="cc">
	<h1 class="mt-2 mb-3 font-weight-bold">Verifikasi User</h1>
            <div class="tableSize">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.container {
  position: relative;
  margin: left;
  width: 100%;
  max-width: 400px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .3s ease;
  background-color: red;
}

.container:hover .overlay {
  opacity: 1;
}

.icon {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.fa-user:hover {
  color: #eee;
}
</style>
</head>
<div class="container">
  <img src="<?php echo base_url(); ?>css/assets/img/agent-5.jpg" alt="Avatar" class="image">
  <div class="overlay">
  <a href="#" class="icon" title="User Profile">
    <i class="fa fa-user"></i>
  </a>
  </div>
</div>

