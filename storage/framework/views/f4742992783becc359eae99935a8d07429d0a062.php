<?php $__env->startSection('judul_halaman','Setting'); ?>
<?php $__env->startSection('konten'); ?>
<?php $judul = 'Setting'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">
				Setting
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
					<form method="post" action="<?php echo e(route('admin.setting.save')); ?>" enctype="application/form-data">
						<?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            
						<label for="misi">Start Voting :</label>
                            <div class='input-group date' id='startdate'>
                                <input type='text' name="startdate" class="form-control" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            
						<label for="misi">End Voting :</label>
                            <div class='input-group date' id='enddate'>
                                <input type='text' name="enddate" class="form-control" />
                                <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

						<button class="btn btn-primary" style="margin-top:10px;float:right;">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<script type="text/javascript">
   $(function () {
       $('#startdate').datetimepicker({
        defaultDate: new Date(<?php echo e($startdate); ?>000),
   useCurrent: false //Important! See issue #1075
   });
       $('#enddate').datetimepicker({
        defaultDate: new Date(<?php echo e($enddate); ?>000),
   useCurrent: false //Important! See issue #1075
   });
       $("#startdate").on("dp.change", function (e) {
           $('#enddate').data("DateTimePicker").minDate(e.date);
       });
       $("#enddate").on("dp.change", function (e) {
           $('#startdate').data("DateTimePicker").maxDate(e.date);
       });
   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/setting/index.blade.php ENDPATH**/ ?>