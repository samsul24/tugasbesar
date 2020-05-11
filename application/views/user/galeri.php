
<?php if($this->session->userdata('level')!='user'){redirect('login');};?>
<!-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"> -->
        <section class="sec newContent d-flex flex-row">


<div style="margin-left:5rem;">
    <div class="row">
        <!-- Grid column -->
        <div class="col-lg-4 col-md-12 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="height:auto">
                <div class="modal-dialog modal-lg" role="document" style="left:-20.85rem">

                    <!--Content-->
                    <div class="modal-content">

                        <!--Body-->
                        <div class="modal-body mb-0 p-0">

                            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i90-h3d8qxM" allowfullscreen=""></iframe>
                            </div>

                        </div>

                        <!--Footer-->
                        <div class="modal-footer justify-content-center">
                            <span class="mr-4">Spread the word!</span>
                            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                            <!--Google +-->
                            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                            <!--Linkedin-->
                            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

                            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

                        </div>

                    </div>
                    <!--/.Content-->

                </div>
            </div>
            <!--Modal: Name-->

            <a>
                <img class="z-depth-1" src="https://hafidhexza.files.wordpress.com/2012/06/bananas.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="video" data-toggle="modal" data-target="#modal1" style="width:480px;height:520px">
            </a>

        </div>
    </div>
</div>
<div class="ml-4 pr-4" style="width:50%">
    <div class="subHeading text-muted" style="margin-left:5rem;font-size:70px">Galeri</div>
    <p class="mt-3 text-muted" style="font-size:1.3rem">
    &nbsp;&nbsp;&nbsp;Tumbuhan merupakan bagian tanaman yang memiliki daya tarik luar biasa. Tak sekedar itu, tanaman hias bunga pun banyak 
    digunakan sebagai bunga potong, bunga tabur, sesajen, bahkan tanaman obat. Dengan menyajikan 645 varietas tanaman 
    hias bunga, buku Galeri Tanaman Hias Bunga ini layak menjadi panduan bagi Anda untuk mengenal dan memilihnya.
    Hampir semua anggota tumbuhan bersifat autotrof dan mendapatkan energi langsung dari cahaya 
    matahari melalui proses fotosintesis.Ciri yang sangat mudah dikenali pada tumbuhan adalah warna hijau 
    yang dominan akibat kandungan pigmen klorofil yang berperan vital dalam proses penangkapan energi melalui 
    fotosintesis sehingga tumbuhan secara umum bersifat autotrof.
</p>
</div>
</section>
<section class="sec mb-5" data-aos="zoom-in-up">
	<div class="text-center mb-5">
		<div class="text-center" data-aos="zoom-in-up">
        <br><br><br>
			<!-- <h1 class="tsubHeading text-muted" >Galery</h1> -->
			<h2 class="tsubHeading text-muted" style="font-family: 'roboto';src: url('../fonts/roboto/RobotoCondensed-Regular.ttf');font-style: normal;font-weight: 700;">Plant-Education</h2>
			<p class="text-muted font-weight-bolder">THESE ARE SOME OF THE GALLERIES THAT WE PUBLISH</p>
        </div>
        <form action="" style="padding: 70px;">
        <div class="d-flex flex-row justify-content-around people mt-5"> 
        <?php $i = 1;
        foreach ($gambar as $rows) : ?>
            <div class=" subHeading text-muted" style="padding: 10px;">
                <div class="iPeople mb-3">
                    <img src="<?php echo base_url('img/' . $rows->foto) ?>"alt=""
                        style="width:200px;height:200px;border-radius:50%" />              
                </div>
                <div class="nPeople p-0">                    
                    <p class="futura-head" style="font-size:1.3rem"><?php echo $rows->nama_img; ?></p>
                    <a class="subHeading text-muted"  stype="submit"style="font-size:1.1rem;" href="<?php echo site_url(); ?>gambaruser/detail/<?php echo $rows->id_img; ?>">Detail</a>
                </div> 
            </div>
            <?php $i++;
        endforeach; ?>
        </form>
        </div>
        <br><br>
        </div>
        <br><br><br><br><br><br><br><br><br>
</section>
