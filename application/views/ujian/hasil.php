<?php if($this->session->userdata('level')!='admin'){
    redirect('login');
};?>
<div class="cc">
	<h1 class="mt-2 mb-3 font-weight-bold">Data Ujian</h1>
    <div class="mb-3">
            <a href="<?php echo site_url(); ?>ujianuser/post" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>Tambah Data </a>
      </div>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
					<th scope="col">NO</th>
					<th scope="col">ID USER</th>
					<th scope="col">JAWABAN</th>
					<th scope="col">ACTION</th>
				</tr>
			</thead>
                        <tbody>
                        <?php $no=1; 
                            foreach ($temp_jawab as $rows) : ?>
                                <tr>
                                    <td><?= $no ; ?></td>
                                    <!-- <td><input  name="angka" value="<?= $this->session->userdata('angka'); ?>"></td> -->
                                    <td><?= $rows['id_user']; ?></td>      
                                    <td><?= $rows['jawaban']; ?></td>
                                    <td>
                            <a href="<?php echo site_url(); ?>ujianuser/put/<?php echo $rows['id']; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>ujianuser/delete/<?= $rows['id'] ;?>" class="btn btn-danger"
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
