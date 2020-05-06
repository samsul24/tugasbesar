<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>userclient/put_process" class="needs-validation" method="POST" onload="setSelectBoxByText()">
                        <?php foreach ($user as $rows) : ?>
                            <div class="form-group">
                                <label for="id">ID Pelanggan :</label>
                                <input type="text" class="form-control" id="id" placeholder="ID" value="<?php echo $rows->id; ?>" name="id" required readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" value="<?php echo $rows->nama; ?>" name="nama" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="nomor_telepon">Nomor Telepon :</label>
                                <input type="text" class="form-control" id="nomor_telepon" placeholder="Nomor Telepon" value="<?php echo $rows->nomor_telepon; ?>" name="nomor_telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $rows->alamat; ?>" name="alamat" required>
                            </div> -->
                            <div class="form-group">
                                <label for="username">Username :</label>
                                <input type="text" class="form-control" id="username" placeholder="Username" value="<?php echo $rows->username; ?>" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" value="<?php echo $rows->password; ?>" name="password" required>
                            </div>
                            <div class="form-group">
                            <label for="sel1">Level :</label>
                            <input type="text" class="form-control" id="level" placeholder="Level" value="<?php echo $rows->level; ?>" name="level" required readonly>

                            </select>
                        </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                    Update
                                </button>
                                <!-- The Modal -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <p>Apa anda yakin ingin mengupdate data ini ?</p>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-danger">Update</button>
                                                <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>