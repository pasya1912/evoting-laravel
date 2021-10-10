

<?php $__env->startSection('judul_halaman','Edit Kandidat'); ?>
<?php $judul = 'Kandidat'; ?>
<?php $data = json_decode($edit->data);?>
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
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
					        <form method="post" action="<?php echo e(route('admin.kandidat.update',$edit->id)); ?>" enctype="multipart/form-data">


                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="gambar">Foto calon</label>
                                                <input type="file" id="gambar"
                                                    class="form-control" name="gambar"
                                                    placeholder="gambar">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="type">Jenis Calon</label>
                                                <select id='type' name='type' type="option" class="form-select">
                                                <option value="-">Pilih jenis</option>
                                                <option value="osis">OSIS</option>
                                                <option value="mpk">MPK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="nama">Nama Sebutan Pasangan</label>
                                                <input type="text" id="nama"
                                                    class="form-control" name="nama"
                                                    placeholder="Abdul - Kodir" value="<?php echo e($edit->nama); ?>">
                                            </div>
                                        </div>
                                        <div class="divider">
                                            <div class="divider-text">Detail Ketua dan Wakil</div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="namaKetua">Nama ketua</label>
                                                <input type="text" id="ketua[nama]" name="ketua[nama]" class="form-control"
                                                    placeholder="Abdul manaf" value="<?php echo e($data->ketua->nama); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="kelasKetua">Kelas ketua</label>
                                                <input type="text" id="ketua[kelas]" name="ketua[kelas]" class="form-control"
                                                    placeholder="12 MIPA 3"value="<?php echo e($data->ketua->kelas); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="namaWakil">Nama wakil</label>
                                                <input type="text" id="wakil[nama]" name="wakil[nama]" class="form-control"
                                                    placeholder="Qodirun Mubin"value="<?php echo e($data->wakil->nama); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="kelasWakil">Kelas wakil</label>
                                                <input type="text" id="wakil[kelas]" name="wakil[kelas]" class="form-control"
                                                    placeholder="12 MIPA 4"value="<?php echo e($data->wakil->kelas); ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="visi">Visi</label>
                                                <textarea type="text" id="visi" name="visi"  rows="5" class="form-control"
                                                    placeholder="Memajukan sekolah "><?php echo e($edit->visi); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="misi">Misi</label>
                                                <textarea type="text" id="misi" name="misi" rows="5" class="form-control"
                                                    placeholder="Banyak banget pokoknya"><?php echo e($edit->misi); ?></textarea>

                                                <?php echo csrf_field(); ?>

                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                                <button type="submit"
                                                    class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>

  

                            </form>
                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    document.querySelector('#type').value = '<?php echo e($edit->type); ?>';
</script>
<script src="/assets/js/pages/mazer.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/kandidat/editkandidatnew.blade.php ENDPATH**/ ?>