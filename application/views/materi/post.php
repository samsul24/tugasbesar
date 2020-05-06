<?php if ($this->session->userdata('level') != 'admin') {
  redirect('login');
}; ?>
<script src="<?php echo base_url().'ckeditor/ckeditor.js' ?>"></script>

<div class="cc">
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h2>Form Tambah Data Materi</h2>
        </div>
        <div class="card-body">
          <?php echo form_open_multipart('materiuser/post_process') ?>
          <div class="form-group">
            <label for="id_sub">ID Subbab :</label>
            <select class="form-control" name="id_sub" required>
              <?php foreach ($subbab as $rows) : ?>
                <option value="<?php echo $rows->id_sub; ?>"><?php echo $rows->id_sub; ?> - <?php echo $rows->nama_sub; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
                            <label for="sel1">Kategori :</label>
                            <select class="form-control" id="kategori" name="kategori" required>
                            <option value="morfologi">morfologi</option> 
                            <option value="alat_pernafasan">alat pernafasan</option> 
                            <option value="habitat">habitat</option> 
                            <option value="family">family</option>
                            </select>
            </div> 
          <div class="form-group">
            <label for="">Nama Tumbuhan</label>
            <input type="text" class="form-control" placeholder="Enter nama" name="nama" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <div style="background : black; width: 300px; height: 300px;"> </div>
            <input type="file" class="form-control-file" placeholder="Enter nama" name="image" required>
            <div class="invalid-feedback">
              <?php echo form_error('image') ?>
            </div>
          </div>
          <div class="form-group">
            <label for="">Keterangan</label><br>
            <textarea name="keterangan" id="editor1" rows="10" cols="10" ></textarea>
            <!-- <input type="text" class="form-control"  placeholder="Enter keterangan" name="Keterangan" > -->
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-danger">
              Tambah
            </button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal body -->
                  <div class="modal-body">
                    <p>Apa anda yakin ingin menambah data ini ?</p>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambah</button>
                    <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                  </div>
                  <script>
  CKEDITOR.replace( 'editor1', {
    extraPlugins: 'imageuploader'
  });
  </script>

                </div>
              </div>
            </div>
          </div>
          <?php echo
            form_close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>