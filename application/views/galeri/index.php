<?php if ($this->session->userdata('level') != 'admin') {
  redirect('login');
}; ?>
<div class="cc">
  <h1 class="mt-2 mb-3 font-weight-bold">Galeri</h1>
    <div class="mb-3">
        <a href="<?php echo site_url(); ?>gambaruser/post" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">IMAGE</th>
          <th scope="col">NAMA</th>
          <th scope="col">KETERANGAN</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1; foreach ($gambar as $rows) : ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><img src="<?php echo base_url('img/' . $rows->foto) ?>" width="64" /></td>
            <td><?php echo $rows->nama_img; ?></td>
            <td><?php echo str_word_count($rows->keterangan) > 25 ? substr($rows->keterangan,0,20)."[...]" :$rows->keterangan ;  ?></td>
            <td>
              <!-- <a href="<?php echo site_url(); ?>gambaruser/put/<?php echo $rows->id_img; ?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i></a> -->
              <a href="<?= base_url(); ?>gambaruser/delete/<?= $rows->id_img; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
                <i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
          </tr>
        <?php $i++;
        endforeach; ?>
      </tbody>
    </table>

  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>