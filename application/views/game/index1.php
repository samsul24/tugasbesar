<!doctype html>
<html>
<head>
 <title>puzzle</title>
 <link rel="stylesheet" href="<?php echo base_url() ?>css/assets/css/game.css">

<script type="text/javascript" src="<?php echo base_url() ?>css/assets/js/gambar.js"></script>
</head>
<style type="text/css">
.preloader{
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:9999;
    position:fixed;
    background-color:white;
}
.loading{
    top:50%;
    left:50%;
    transform: translate(-50%,-50%);
    position:absolute;
}
</style>
<body>
    
 <div class="all"></div>
 <div class="gbr">
  <img src="https://2.bp.blogspot.com/-SCMocKYXL18/W1jQZHH8GoI/AAAAAAAAQY0/Dl40_zzHXDUwDS7ssXFoVmQF9Uin7csmgCLcBGAs/s1600/fungsi-bunga-pada-tumbuhan.jpg" >
 </div>
 <table border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td>
    <div class="box" id="d1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
   </td>
   <td>
    <div class="box" id="d2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
   </td>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td>
    <div class="box" id="b1" ondrop="drop(event)" ondragover="allowDrop(event)">
     <img id="g4" draggable="true" ondragstart="drag(event)" class="k22" src="https://2.bp.blogspot.com/-SCMocKYXL18/W1jQZHH8GoI/AAAAAAAAQY0/Dl40_zzHXDUwDS7ssXFoVmQF9Uin7csmgCLcBGAs/s1600/fungsi-bunga-pada-tumbuhan.jpg">
    </div>
   </td>
   <td>
    <div class="box" id="b2" ondrop="drop(event)" ondragover="allowDrop(event)">
     <img id="g3" draggable="true" ondragstart="drag(event)" class="k21" src="https://2.bp.blogspot.com/-SCMocKYXL18/W1jQZHH8GoI/AAAAAAAAQY0/Dl40_zzHXDUwDS7ssXFoVmQF9Uin7csmgCLcBGAs/s1600/fungsi-bunga-pada-tumbuhan.jpg">
    </div>
   </td>
  </tr>
  <tr>
   <td>
    <div class="box" id="d3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
   </td>
   <td>
    <div class="box" id="d4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
   </td>
   <td></td>
   <td>
    <div class="box" id="b3" ondrop="drop(event)" ondragover="allowDrop(event)">
     <img id="g2" draggable="true" ondragstart="drag(event)" class="k12" src="https://2.bp.blogspot.com/-SCMocKYXL18/W1jQZHH8GoI/AAAAAAAAQY0/Dl40_zzHXDUwDS7ssXFoVmQF9Uin7csmgCLcBGAs/s1600/fungsi-bunga-pada-tumbuhan.jpg">
    </div>
   </td>
   <td>
    <div class="box" id="b4" ondrop="drop(event)" ondragover="allowDrop(event)">
     <img id="g1" draggable="true" ondragstart="drag(event)" class="k11" src="https://2.bp.blogspot.com/-SCMocKYXL18/W1jQZHH8GoI/AAAAAAAAQY0/Dl40_zzHXDUwDS7ssXFoVmQF9Uin7csmgCLcBGAs/s1600/fungsi-bunga-pada-tumbuhan.jpg">
    </div>
   </td>
  </tr>
 </table>
</body>
</html>
