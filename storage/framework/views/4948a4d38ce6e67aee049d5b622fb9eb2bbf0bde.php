
<?php $__env->startSection('judul_halaman','Kandidat'); ?>
<?php $__env->startSection('konten'); ?>
<?php $judul = 'Kandidat'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">E-Voting | Kandidat</div>
		</div>
		<div class="panel-body" style="margin-bottom:20px;">
				<div class="row">
					<div class="col-md-5">
						<a href="<?php echo e(route('admin.kandidat.tambah')); ?>" class="btn btn-primary"><i class="fa fa-fw fa-user-plus"></i> Tambah Kandidat</a>
					</div>
				</div>
				<h3 >OSIS</h3>
				<div class="row">
					<!-- TAMPILKAN DATA KANDIDAT -->

				<?php $__currentLoopData = $osis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4">
					<div class="kartu">
					  <img src="<?php echo e(asset('foto_kandidat/'.$key->foto)); ?>" class="card-img-top" width="242" height="250" alt="...">
					  <div class="card-body">
					    <h4 class="card-title text-center"><?php echo e($key->nama); ?></h4>
					    <div class="row">
					    	<div class="col text-center">
					    		<a href="<?php echo e(route('admin.kandidat.detail',$key->id)); ?>" class="btn btn-primary" style="width:115px;">Detail</a>
					    		<a href="<?php echo e(route('admin.kandidat.hapus',$key->id)); ?>" class="btn btn-danger" style="width:115px;" onclick="return confirm('Hapus data ?');">Hapus</a>
					    	</div>
					    </div>
					  </div>
					</div>

				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<h3 >MPK</h3>
				<div class="row">
					<!-- TAMPILKAN DATA KANDIDAT -->

				<?php $__currentLoopData = $mpk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-4">
					<div class="kartu">
					  <img src="<?php echo e(asset('foto_kandidat/'.$keys->foto)); ?>" class="card-img-top" width="242" height="250" alt="...">
					  <div class="card-body">
					    <h4 class="card-title text-center"><?php echo e($keys->nama); ?></h4>
					    <div class="row">
					    	<div class="col text-center">
					    		<a href="<?php echo e(route('admin.kandidat.detail',$keys->id)); ?>" class="btn btn-primary" style="width:115px;">Detail</a>
					    		<a href="<?php echo e(route('admin.kandidat.hapus',$keys->id)); ?>" class="btn btn-danger" style="width:115px;" onclick="return confirm('Hapus data ?');">Hapus</a>
					    	</div>
					    </div>
					  </div>
					</div>

				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

			
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/kandidat.blade.php ENDPATH**/ ?>