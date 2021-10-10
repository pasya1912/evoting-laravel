<?php $__env->startSection('judul_halaman','Kandidat'); ?>
<?php $__env->startSection('konten'); ?>
<?php $judul = 'Kandidat'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">
				EDIT CALON KETUA OSIS
			</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-5">
					<a href="/admin/kandidat" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
			<div class="row" style="margin-top:15px;">
				<div class="col-md-5">
					<form method="post" action="<?php echo e(route('admin.kandidat.update',$edit->id)); ?>" enctype="multipart/form-data">
						<?php echo e(csrf_field()); ?>

						<label for="gambar">Foto Calon Ketua Osis :</label>
						<input type="file" id="gambar" name="gambar" class="form-control">
						<label for="nama">Nama :</label>
						<input type="text" id="nama" name="nama" class="form-control" value="<?php echo e($edit->nama); ?>">
						<label for="visi">Visi :</label>
						<textarea id="visi" name="visi" class="form-control" rows="4"><?php echo e($edit->visi); ?></textarea>
						<label for="misi">Misi :</label>
						<textarea id="misi" name="misi" class="form-control" rows="4"><?php echo e($edit->misi); ?></textarea>
						<button class="btn btn-primary" style="margin-top:10px;float:right;">Perbaharui</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/editkandidat.blade.php ENDPATH**/ ?>