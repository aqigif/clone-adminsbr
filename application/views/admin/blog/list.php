<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_templates/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <?php $this->load->view("admin/_templates/sidebar.php") ?>
  <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_templates/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <?php $this->load->view("admin/_templates/breadcrumb.php") ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="<?php echo site_url('admin/Blog/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th></th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Author</th>
                      <th>Tanggal</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Author</th>
                      <th>Tanggal</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach ($blogs as $blog): ?>
                    <tr>
                      <td>
                        <?php echo $blog->id_blog ?>
                      </td>
                      <td>
                        <img src="<?php echo base_url('asset/img/blog/'.$blog->gambar) ?>" width="64" alt="<?php echo $blog->gambar ?>"/>
                      </td>
                      <td>
                        <?php echo $blog->judul ?>
                      </td>
                      <td class="small">
                        <?php echo substr($blog->isi, 0, 120) ?>...</td>
                      <td>
                        <?php echo $blog->author ?>
                      </td>
                      <td>
                        <?php echo longdate_indo($blog->tanggal) ?>
                      </td>
                      <td width="250">
                        <a href="<?php echo site_url('admin/Blog/edit/'.$blog->id_blog) ?>"
                         class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                        <a onclick="deleteConfirm('<?php echo site_url('admin/Blog/delete/'.$blog->id_blog) ?>')"
                         href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      <?php $this->load->view("admin/_templates/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <?php $this->load->view("admin/_templates/scrolltop.php") ?>
  <?php $this->load->view("admin/_templates/modal.php") ?>
  <?php $this->load->view("admin/_templates/js.php") ?>  
  
  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
  </script>
</body>

</html>
