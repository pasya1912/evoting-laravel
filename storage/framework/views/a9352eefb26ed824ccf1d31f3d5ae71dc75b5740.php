
<?php $__env->startSection('judul_halaman','DETAIL KANDIDAT'); ?>
<?php $judul='Kandidat'; ?>
<?php $data = json_decode($detailkandidat->data);?>
<?php $__env->startSection('css'); ?>
<style>
    p{
        white-space: pre-wrap;
    }
        @media  only screen and (min-width: 769px) {
            .borderzz{
                border-right: 3px solid black;
            }
    }
    @media  only screen and (max-width: 769px) {
            .borderzz{
                border-bottom: 3px solid black;
            }
    }

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('konten'); ?>
            <div class="row">
                <div class="col-10">
                    <div class="card">
                        <div class="card-body ">
                            <a href="<?php echo e(route('admin.kandidat.tambah')); ?>"class="btn btn-outline-info "><i class="bi bi-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 ">
                    <div class="card borderzz">
                        <div class="card-body">
                        <img src="<?php echo e(asset('foto_kandidat/'.$detailkandidat->foto )); ?>" class="img-fluid  img-thumbnail" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 ">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                    <h2><?php echo e($detailkandidat->nama); ?></h2>
                                    <hr>
                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Ketua</h3>
                                    <p>Nama : <?php echo e($data->ketua->nama); ?></p>
							        <p>Kelas : <?php echo e($data->ketua->kelas); ?></p>
                                </div>
                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Ketua</h3>
                                    <p>Nama : <?php echo e($data->wakil->nama); ?></p>
							        <p>Kelas : <?php echo e($data->wakil->kelas); ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Visi</h3>
                                    <p><?php echo e($detailkandidat->visi); ?></p>                                
                                </div>
                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Misi</h3>
                                    <p><?php echo e($detailkandidat->misi); ?></p>                                
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-md-12 col-md-12">
                                    <a href="<?php echo e(route('admin.kandidat.edit',$detailkandidat->id)); ?>" class="btn btn-outline-primary float-end">Edit Profile</a>                             
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                
            </div>

            
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="/assets/js/pages/mazer.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/kandidatdetailnew.blade.php ENDPATH**/ ?>