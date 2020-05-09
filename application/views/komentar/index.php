<html>
<head>
 <meta charset="utf-8">
 <title>Fitur Komentar CodeIgniter</title>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="container">
 <div class="w3-panel w3-teal">
  <p>Kolom Komentar:</p>
 </div>
    <form method="POST" action="<?php echo site_url('Komentar/log_prosses') ?>">
        <div class="w3-row-padding">
        <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Nama" name="nama">
            </div>
            <div class="w3-half">
                <input class="w3-input w3-border" type="email" placeholder="Email" name="email">
            </div>
        </div>
        <div class="w3-padding">
            <textarea name="komentar"></textarea>
        </div>
        <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Kirim Komentar</button>
        </div>
    </form>
</div>
<?php
    $query = $this->db->query("SELECT * FROM komentar WHERE komen_status='null'");
    foreach ($query->result() as $utama):
?>
<div class="container">
 <div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal">
  <p>
   <b><?php echo $utama->nama?></b>
   <br><?php echo $utama->komentar?>
   <br><button class="w3-button w3-tiny w3-teal" onclick="document.getElementById('<?php echo $utama->id_komentar?>').style.display='block'">Balas</button>
  </p>
    </div>
</div>
    <?php
        $id_komentar=$utama->id_komentar;
        $query = $this->db->query("SELECT * FROM tbl_komen WHERE komen_status='$id_komentar'");
        foreach ($query->result() as $balasan):
    ?>
    <div class="container">
        <div class="w3-panel w3-pale-blue w3-leftbar w3-border-teal child">
            <p>
                <b><?php echo $balasan->nama?></b>
                <br><?php echo $balasan->komentar?>
            </p>
        </div>
    </div>
    <?php endforeach;?>
    <div id="<?php echo $utama->id_komentar?>" class="w3-modal">
     <div class="w3-modal-content modal">
   <header class="w3-container w3-teal">
    <span onclick="document.getElementById('<?php echo $utama->id_komentar?>').style.display='none'" 
    class="w3-button w3-display-topright">&times;</span>
    <h2>Balas Komentar</h2>
   </header>
   <div class="w3-container">
                <form class="w3-container" method="POST" action="<?php echo site_url('Komentar/balasKomen') ?>">
                    <input type="hidden" name="id" value="<?php echo $utama->id_komentar?>">
                    <div class="w3-section">
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nama" name="nama" required>
                    <input class="w3-input w3-border" type="email" placeholder="Email" name="email" required> 
                    <br>         
                    <textarea name="isi_komentar"></textarea>
                    <button class="w3-button w3-block w3-teal w3-section w3-padding" type="submit">Kirim</button>
                    </div>
                </form>
   </div>
        <footer class="w3-container w3-teal w3-border-top w3-padding-16">
        </footer>
     </div>
 </div>
<?php endforeach;?>
</body>
</html>