
<?php $__env->startSection('judul_halaman','Setting'); ?>
<?php $judul='Setting'; ?>
<?php $__env->startSection('head'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <a href="<?php echo e(route('admin.voters')); ?>" class="btn btn-outline-info "><i class="bi bi-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-4">
                    <div class="card">
                        <div class="card-body ">
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
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/js/mazer.js"></script>
<script>
    
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
<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/setting/indexnew.blade.php ENDPATH**/ ?>