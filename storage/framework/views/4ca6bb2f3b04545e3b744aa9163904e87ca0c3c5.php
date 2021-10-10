
<?php $__env->startSection('judul_halaman','Hapus token'); ?>
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
                                    <form method="post" action="<?php echo e(route('admin.voters.delete')); ?>">
                                            <?php echo e(csrf_field()); ?>

                                            <div class="form-group">
                                                <select class="form-control" id="kriteria" name="kriteria">
                                                    <option value="-">Kriteria Hapus</option>
                                                    <option value="0">Semua</option>
                                                    <option value="1">Sudah Voting</option>
                                                    <option value="2">Belum Voting</option>
                                                    <option value="3">By Token</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" style="display:none;"class="form-control" name="token" id="token" placeholder="Masukkan Token yang ingin dihapus">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Hapus</button>
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
<script>
var token = document.querySelector('#token');
token.style.display = "none";
token.disabled = true;
document.querySelector('#kriteria').addEventListener('change',function(e){
console.log(document.querySelector('#kriteria').value);
if(document.querySelector('#kriteria').value == 3){
	token.disabled = false;
	token.style.display = "block";
}else{
	token.disabled = true;
	token.style.display = "none";
}
});
</script>
<script src="/assets/js/mazer.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/voter/hapusnew.blade.php ENDPATH**/ ?>