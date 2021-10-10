
<?php $__env->startSection('judul_halaman','List Kandidat'); ?>
<?php $judul='Kandidat'; ?>
<?php $__env->startSection('css'); ?>
<style>
    .imger {

        background-repeat: no-repeat;

  width: auto;
  height: 100%;
    }
/*     @media (max-width: 768px) {
  .btn-responsive {
    height: 20px;
  width: 50%;
  } */
}


</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
            <div class="row">
                <div class=" col-12 ">
                    <div class=" card">
                        <div class="card-body text-center text-md-left">
                            <a href="<?php echo e(route('admin.kandidat.tambah')); ?>"class="btn btn-outline-primary">Tambah kandidat</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>OSIS</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex row justify-content-center">
                <?php $__currentLoopData = $osis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12 col-lg-3 col-md-3">
                                    <div class="card border border-dark">
                                        <div class="card-content">
                                                    <img src="<?php echo e(asset('foto_kandidat/'.$key->foto)); ?>" class="card-img-top img-thumbnail imger" width="242" height="250" 
                                                    alt="singleminded">
                                            <div class="card-body text-center">
                                                    <h5 class="card-title"><?php echo e($key->nama); ?></h5>
                                            </div>
                                            <div class="card-footer  text-center btn-responsive">
                                            <a  href="<?php echo e(route('admin.kandidat.detail',$key->id)); ?>" class="btn btn-primary " style="width:115px;">Detail</a>
                                            <a  href="<?php echo e(route('admin.kandidat.hapus',$key->id)); ?>" class="btn btn-danger "  onclick="return confirm('Hapus data ?');" style="width:115px;">Delete</a>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
  

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
            <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>MPK</h4>
                        </div>
                        <div class="card-body">
                            <div class="d-flex row justify-content-center">
                <?php $__currentLoopData = $mpk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-12 col-lg-3 col-md-3">
                                    <div class="card border border-dark">
                                        <div class="card-content">
                                                    <img src="<?php echo e(asset('foto_kandidat/'.$key->foto)); ?>" class=" card-img-top img-thumbnail imger" width="242" height="250"
                                                    alt="singleminded">
                                            <div class="card-body text-center">
                                                    <h5 class="card-title"><?php echo e($key->nama); ?></h5>
                                            </div>
                                            <div class="card-footer  text-center btn-responsive">
                                            <a  href="<?php echo e(route('admin.kandidat.detail',$key->id)); ?>" class="btn btn-primary " style="width:115px;">Detail</a>
                                            <a  href="<?php echo e(route('admin.kandidat.hapus',$key->id)); ?>" class="btn btn-danger "  onclick="return confirm('Hapus data ?');" style="width:115px;">Delete</a>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </div>
  

                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="/assets/js/mazer.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/kandidatnew.blade.php ENDPATH**/ ?>