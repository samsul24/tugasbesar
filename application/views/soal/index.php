<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="cc">
	<h1 class="mt-2 mb-3 font-weight-bold">Data Soal</h1>
    <div class="mb-3">
            <a href="<?php echo site_url(); ?>soaluser/post" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>Tambah Data </a>
      </div>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
					<th scope="col">NO</th>
					<th scope="col">KATEGORI</th>
					<th scope="col">PERTANYAAN</th>
					<th scope="col">PILIHAN-A</th>
					<th scope="col">PILIHAN-B</th>
					<th scope="col">PILIHAN-C</th>
					<th scope="col">PILIHAN-D</th>
					<th scope="col">JAWABAN</th>
					<th scope="col">ACTION</th>
				</tr>
			</thead>
                        <tbody>
                        <?php
                      
                        $no=1;
                        foreach ($soal as $rows) : ?>
                                <tr>
                                    <td><?php echo $no ; ?></td>
                                    <td><?php echo $rows->kategori; ?></td>
                                    <td><?php echo $rows->pertanyaan; ?></td>
                                    <td><?php echo $rows->pil_a; ?></td>
                                    <td><?php echo $rows->pil_b; ?></td>
                                    <td><?php echo $rows->pil_c; ?></td>
                                    <td><?php echo $rows->pil_d; ?></td>
                                    <td><?php echo $rows->jawaban; ?></td>
                                    <td>
                                    <a href="<?php echo site_url(); ?>soaluser/put/<?php echo $rows->id_soal; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>soaluser/delete/<?= $rows->id_soal ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                 <?php $no++; endforeach; ?>
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
