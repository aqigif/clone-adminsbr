<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_templates/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <!-- Sidebar -->
  <?php //$this->load->view("admin/_templates/link.php") ?>
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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/Blog/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/Blog/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id_blog" value="<?php echo $blog->id_blog?>" />

														
							<div class="form-group">
								<label for="Gambar">Gambar</label>
								<input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid':'' ?>"
								 type="file" name="gambar" value="<?php echo $blog->gambar?>" />
								<input type="hidden" name="old_image" value="<?php echo $blog->gambar?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Judul">Judul*</label>
								<input class="form-control <?php echo form_error('judul') ? 'is-invalid':'' ?>"
								 type="text" name="judul" placeholder="Judul"  value="<?php echo $blog->judul?>" />
								<div class="invalid-feedback">
									<?php echo form_error('judul') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Isi">Isi*</label>
								<textarea class="form-control <?php echo form_error('isi') ? 'is-invalid':'' ?>"
								 name="isi" placeholder="Isi" id="summernote" ><?php echo $blog->isi?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('isi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="Author">Author*</label>
								<input class="form-control <?php echo form_error('author') ? 'is-invalid':'' ?>"
								 type="text" name="author" placeholder="Author"  value="<?php echo $blog->author?>" />
								<div class="invalid-feedback">
									<?php echo form_error('author') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* Harus diisi ya...
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
      $('#summernote').summernote({
        placeholder: 'Isi',
        tabsize: 2,
        height: 100
      });
    </script>
</body>

</html>
