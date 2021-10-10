<?php $__env->startSection('judul_halaman','Kandidat'); ?>
<?php $__env->startSection('konten'); ?>
<?php $judul = 'Kandidat'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">
				TAMBAH KANDIDAT
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
					<form method="post" action="<?php echo e(route('admin.kandidat.store')); ?>" enctype="multipart/form-data">
						<?php echo e(csrf_field()); ?>

						<label for="gambar">Foto Calon :</label>
						<input type="file" id="gambar" name="gambar" class="form-control">
						<label for="gambar">Jenis Calon :</label>
						<select id='type' name='type' class="form-control">
							<option value="osis">OSIS</option>
							<option value="mpk">MPK</option>
						</select>
						<label for="nama">Nama Pasangan ( ketua - wakil ):</label>
						<input type="text" id="nama" name="nama" class="form-control">
						<hr/>

						<ul>
							<label for="nama">Nama Ketua</label>
							<input type="text" id="ketua[nama]" name="ketua[nama]" class="form-control">
							<label for="nama">Kelas Ketua</label>
							<input type="text" id="ketua[kelas]" name="ketua[kelas]" class="form-control">
						</ul>
						<hr/>
						<hr/>

						<ul>
							<label for="nama">Nama Wakil</label>
							<input type="text" id="wakil[nama]" name="wakil[nama]" class="form-control">
							<label for="nama">Kelas Wakil</label>
							<input type="text" id="wakil[kelas]" name="wakil[kelas]" class="form-control">
						</ul>
						<hr/>
						<label for="visi">Visi :</label>
						<textarea id="visi" name="visi" class="form-control" rows="4"></textarea>
						<label for="misi">Misi :</label>
						<textarea id="misi" name="misi" class="form-control" rows="4"></textarea>
						<button class="btn btn-primary" style="margin-top:10px;float:right;">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/tambahkandidat.blade.php ENDPATH**/ ?>