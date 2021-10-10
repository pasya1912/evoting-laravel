
<?php $__env->startSection('judul_halaman','Tambah token'); ?>
<?php $judul='Voters'; ?>

<?php $__env->startSection('konten'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <a href="<?php echo e(route('admin.voters')); ?>" class="btn btn-outline-info "><i class="bi bi-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <form method="post" action="<?php echo e(route('admin.voters.store')); ?>">
                                            <?php echo e(csrf_field()); ?>


                                        <div class="form-group">
                                        <label>Jumlah token:</label>
                                            <div class="input-group">
                                                <input class="form-control" type="number" name="jumlah" min="1" max="500" placeholder="Maximum sekali pembuatan adalah 500">
                                                <span class="input-group-btn"><button class="btn btn-outline-primary ml-3" type="submit">Tambahkan</button></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="/assets/js/mazer.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/voter/tambahnew.blade.php ENDPATH**/ ?>