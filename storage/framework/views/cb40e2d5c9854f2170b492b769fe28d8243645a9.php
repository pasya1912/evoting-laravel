<?php $__env->startSection('judul','E-voting SMAN 36 JAKARTA'); ?>
<?php $__env->startSection('konten'); ?>
    <div class="mycontainer" style="overflow-x:hidden">
    <div class="row">
 
        <div class="col-md-12">
          <div class="card mx-auto mb-5 cardku">
             
                 <div class="card-body text-center">
                  <h5 class="card-title"></h5>
                  <div class="row">
                      <div class="col">
                      <h3>Terimakasih Atas Partisipasinya</h3>
                      <h4>Suara Anda Menentukan Masa Depan Sekolah</h4>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col"><a href="<?php echo e(route('votinglogin')); ?>" class="btn btn-primary mb-1" style="width:100%">Halaman Utama</a></div>
                  </div>
         </div>
         </div>
        </div>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('voting.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/voting/logout.blade.php ENDPATH**/ ?>