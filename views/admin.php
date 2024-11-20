 <!-- Default box -->
 <div class="card">
        <div class="card-header">
          <h3 class="card-title">admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            
          </div>
        </div>
        <div class="card-body">
        <div class="row">
        <div class="col mb-3">
           <a href="index.php?halaman=tambah_pengguna" class="btn btn-primary float-right">
            <i class="fa fa-user-plus"></i> tambah pengguna</a>
        </div>
        </div>
          admin <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>no</th>
                    <th>nama</th>
                    <th>username</th>
                    <th>level</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    include "koneksi.php";
                     $no=1;
                    $sql=mysqli_query($koneksi,"SELECT * FROM admin");
                    while($data=mysqli_fetch_array($sql)){
                        echo"
                        <tr>
                    <td>$no</td>
                    <td>$data[nama]</td>
                    <td>$data[username]</td>
                    <td> $data[level]</td>
                    <td><div class='btn-group'>
                    <a href='#' class='btn btn-sm btn-success' title='ubah data'><i class='fa fa-pencil-alt'></i></a>
                    <a href='#' class='btn btn-sm btn-danger' title='hapus data'><i class='fa fa-trash-alt'></i></a></td>
                  </tr>";
                  $no++;
                    }
                    ?>
                  
</tbody>
        </div>
        <!-- /.card-body -->
       <!-- <div class="card-footer">
          Footer
        </div>-->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
