<?php if($this->session->userdata('level')!='admin'){redirect('login');};?>
    
    <div class="cc">
	<h1 class="mt-2 mb-3 font-weight-bold">Verifikasi User</h1>
            <div class="tableSize">
		<table class="table" id="myTable">
			<thead class="thead-dark">
                    <tr>
                            <!-- <th>ID</th> -->
                        <th scope="col">NAMA</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($login as $logins) : ?>
                            <tr>
                                <!-- <td><?php echo $logins['id']; ?></td> -->
                                <td><?php echo $logins['nama']; ?></td>
                                <td><?php echo $logins['username']; ?></td>
                                <td><?php echo $logins['password']; ?></td>
                                <td>
                                    <a href="<?php echo site_url() ?>adminclient/verification_process/<?php echo $logins['id']; ?>" class="btn btn-success" role="button">Verification</a>
                                    <a href="<?php echo site_url() ?>adminclient/verification_deny/<?php echo $logins['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </main><br><br><br>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Data Tables -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/datatables.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#data_tables').DataTable({
        dom: 'Bfrtip',
        buttons: [{
          extend: 'pdf',
          exportOptions: {
            columns: [0, 1, 2, 3, 4]
          }
        }]
      });
    });
  </script>
</body1>

</html>