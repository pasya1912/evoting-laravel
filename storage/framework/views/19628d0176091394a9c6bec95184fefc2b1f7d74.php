
<?php $__env->startSection('judul_halaman','Voters'); ?>
<?php $__env->startSection('konten'); ?>
<?php $judul = 'Voters'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">Tambah Akun Voting</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<a href="/admin/voters" class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i> Kembali</a>
				</div>
			</div>
      <div class="row" style="margin-top:15px;margin-bottom:18px;">
        <div class="col-md-4">
          <form method="post" action="<?php echo e(route('admin.voters.store')); ?>">
            <?php echo e(csrf_field()); ?>

          <div class="input-group">
            <input class="form-control" type="text" name="jumlah" placeholder="Masukan jumlah voters">
            <span class="input-group-btn"><button class="btn btn-primary" type="submit">Tambahkan</button></span>
	      </div>

          </form>

          </div>
          </div>
        </div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/voter/tambah.blade.php ENDPATH**/ ?>