    <?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
    <div class="cc">
        <h1 class="mt-2 mb-3 font-weight-bold">Data User</h1>
        <div class="mb-3">
                <a href="<?php echo site_url(); ?>userclient/post" class="btn btn-primary">
                <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data </a>

                
            <a href="<?php echo site_url(); ?>adminclient/verification" class="btn btn-success">
            <i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;Verification</a>
    </div>
	<div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
				<tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">LEVEL</th>
                    <th scope="col">ACTION</th>
				</tr>
            </thead>
             <tbody>
                <?php foreach ($user as $rows) : ?>
                    <tr>
                        <td><?php echo $rows->id; ?></td>
                        <td><?php echo $rows->nama; ?></td>
                        <td><?php echo $rows->username; ?></td>
                        <td><?php echo $rows->password; ?></td>
                        <td><?php echo $rows->level; ?></td>
                        <td>
                                    
                            <a href="<?php echo site_url(); ?>userclient/put/<?php echo $rows->id; ?>" class="btn btn-warning">
                            <i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="<?= base_url(); ?>userclient/delete/<?= $rows->id ;?>" class="btn btn-danger"
                            onClick="return confirm('yakin mau hapus');">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                 <?php endforeach; ?>
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
