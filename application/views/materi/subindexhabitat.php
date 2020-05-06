<?php if ($this->session->userdata('level') != 'admin') {
  redirect('login');
}; ?>
<div class="cc">
  <h1 class="mt-2 mb-3 font-weight-bold">Data Materi</h1>
    <div class="mb-3">
        <a href="<?php echo site_url(); ?>materiuser/post" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>
    </div>
  <div class="tableSize">
    <table class="table" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">ID SUB</th>
          <th scope="col">KATEGORI</th>
          <th scope="col">NAMA</th>
          <th scope="col">IMAGE</th>
          <th scope="col">KETERANGAN</th>
          <th scope="col">ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($materi as $rows) : ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $rows->id_sub; ?></td>
            <td><?php echo $rows->kategori; ?></td>
            <td><?php echo $rows->nama; ?></td>
            <td><img src="<?php echo base_url('img/' . $rows->image) ?>" width="64" /></td>
            <td><?php echo $rows->keterangan; ?></td>
            <td>
              <!-- <a href="<?php echo site_url(); ?>materiuser/put/<?php echo $rows->id_materi; ?>" class="btn btn-warning">
                <i class="fa fa-pen" aria-hidden="true"></i></a> -->
              <a href="<?= base_url(); ?>materiuser/delete/<?= $rows->id_materi; ?>" class="btn btn-danger" onClick="return confirm('yakin mau hapus');">
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