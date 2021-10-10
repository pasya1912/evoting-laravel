
<?php $__env->startSection('judul_halaman','Kandidat'); ?>
<?php $__env->startSection('konten'); ?>
<?php $data = json_decode($detailkandidat->data);?>

<?php $judul = 'Kandidat'; ?>
<div class="panel panel-headline">
	<div class="panel-heading">
		<div class="panel-title">
			DETAIL CALON KETUA Dan Wakil <?php echo e(($detailkandidat->type == 'osis') ? "OSIS" : "MPK"); ?>

		</div>
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-6" style="margin-bottom:15px;">
				<a href="javascript:void(0)" onclick="history.back()"class="btn btn-primary"><i class="fa fa-fw fa-arrow-left"></i>Kembali</a>
			</div>
		</div>
		<div class="panel panel-profile" style="min-height:490px;">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<img src="<?php echo e(asset('foto_kandidat/'.$detailkandidat->foto )); ?>"  width="100%" height="490"  alt="Foto">
									<!-- <div class="profile-main">
										<h3 class="name">Samuel Gold</h3>
										<span class="online-status status-available">Available</span>
									</div> -->
								</div>
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right" style="margin-bottom:-35px;margin-top:-24px;">
								<h3><?php echo e($detailkandidat->nama); ?></h3>
							</div>
							<div class="profile-right" >
							<h4 class="heading">Profile Kandidat</h4>
							<div class="row">
							<div class="col-md-6">
							<h4>Ketua </h4>
							<p>Nama : <?php echo e($data->ketua->nama); ?></p>
							<p>Kelas : <?php echo e($data->ketua->kelas); ?></p>
							</div>
							<div class="col-md-6">
							<h4>Wakil Ketua</h4>
							<p>Nama : <?php echo e($data->wakil->nama); ?></p>
							<p>Kelas : <?php echo e($data->wakil->kelas); ?></p>
							</div>
							</div>
							</div>
							<div class="profile-right">
								<h4 class="heading">Visi & Misi</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-12">
											<h4>Visi</h4>
											<p><?php echo $detailkandidat->visi; ?></p>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<h4>Misi</h4>
											<p><?php echo $detailkandidat->misi; ?></p>
										</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="text-right" style="margin-top:20px;margin-bottom:-50px;"><a href="<?php echo e(route('admin.kandidat.edit',$detailkandidat->id)); ?>" class="btn btn-primary">Edit Profile</a></div>
										</div>
									</div>
								</div>
								<!-- END AWARDS -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/kandidatdetail.blade.php ENDPATH**/ ?>