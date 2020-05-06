<!-- <html>
<head>
<title>ujian </title>
<script type="text/javascript">
function proses(){
    var jawabanpertama=(document.fom.jawab1.value);
    var jawabankedua=(document.fom.jawab2.value);

    alert("JAWABAN SUDAH DI SAVE KE DATABASE KAMI. "+"No.1 Anda menjawab:"+jawabanpertama+"No.2 Anda menjawab :"+jawabankedua);
}
</script>
</head>


<body>
<?php if ($this->session->userdata('level') != 'user') {
  redirect('login');
}; ?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                <?php if ($this->session->flashdata('result') != '') { ?>
                        <div class="alert alert-dark alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php echo $this->session->flashdata('result'); ?>
                        </div>
                    <?php
                  }
                    ?>
                    <h3 class="text-center">Ujian Online</h3><br><br>
<form name="fom">
<pre>
Soal :

1. kamu siapa...
<input type="radio" name="jawab1" value="55">Lima-Lima
<input type="radio" name="jawab1" value="25">Lima-e
<input type="radio" name="jawab1" value="10">Lima-s

1. kamu siapa nya dia...
<input type="radio" name="jawab2" value="oke">oke
<input type="radio" name="jawab2" value="eko">eko
<input type="radio" name="jawab2" value="okok">okok

<input type="button"  value="liat jawaban" onClick="proses()">
<input type="reset"  value="jawab ulang" onClick="proses()">



</pre>
</form>
</div>
            </div>
        </div>
    </div>
</div> 
</body>
</html> -->

<?php if ($this->session->userdata('level') != 'user') {
  redirect('login');
}; ?>
<script type="text/javascript">
  function proses() {
    var jawabanpertama = (document.fom.jawab1.value);
    var jawabankedua = (document.fom.jawab2.value);
    alert("JAWABAN SUDAH DI SAVE KE DATABASE KAMI. " + "No.1 Anda menjawab:" + jawabanpertama + "No.2 Anda menjawab :" + jawabankedua);
  }
</script>
<div class="container-fluid">
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <?php if ($this->session->flashdata('result') != '') { ?>
            <div class="alert alert-dark alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?php echo $this->session->flashdata('result'); ?>
            </div>
          <?php
          }
          ?>
          <form name="fom" method="post" action="">
            <h3 class="text-center">Ujian Online</h3><br><br>
            <tr>
              <p><b>Pilihlah salah satu jawaban yang paling benar dengan memilih huruf a,b,c atau d!</b> </p>
            </tr>
            <?php
            $i=1;
            foreach ($ujian as $rows) :
            ?>
              <tr>
                <a><?php echo $i ;?>).&nbsp;</a>
                <a scope="col"><?= $rows['pertanyaan']; ?></a><br>
                <input type="hidden" name="nomor" value="<?= $rows['nomor'] ?>">
                <input type="hidden" name="angka" value="<?= $this->session->userdata('angka'); ?>">
                <a scope="col">&emsp;&nbsp;&nbsp;&nbsp;a. <input type="radio" value='a' name='pilihan'>&nbsp;<?= $rows['jawab_a']; ?></a><br>
                <a scope="col">&emsp;&nbsp;&nbsp;&nbsp;b. <input type="radio" value='b' name='pilihan'>&nbsp;<?= $rows['jawab_b']; ?></a><br>
                <a scope="col">&emsp;&nbsp;&nbsp;&nbsp;c. <input type="radio" value='c' name='pilihan'>&nbsp;<?= $rows['jawab_c']; ?></a><br>
                <a scope="col">&emsp;&nbsp;&nbsp;&nbsp;d. <input type="radio" value='d' name='pilihan'>&nbsp;<?= $rows['jawab_d']; ?></a><br>
                <td>

              </tr>
            <?php
            $i++;
            endforeach; ?>
            <br><br>

            <div class="button">
              <ul class="left">
                <input type="submit" class="left" name="next" value="Selanjutnya">
              </ul>
            </div>
          </form>
          <div class="button">
            <ul class="right">
            <style media="screen">
                            .button{
                                width: 100%;
                                height: 20px;
                            }
                            .right{
                                float: right;
                                display: block;
                            }
                            .button ul a{
                            padding: 10px;
                           
                            color: white;
                            }
                        </style>
              <a><input type="submit" class="right" name="reset" value="Reset"></a>
              <a href="<?php echo site_url(); ?>userlogin/hasil"><input type="submit" class="right" name="text" value="Finish"></a>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
</div>
