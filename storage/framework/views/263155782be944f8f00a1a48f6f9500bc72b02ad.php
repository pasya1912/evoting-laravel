
<?php $__env->startSection('judul_halaman','Dashboard'); ?>
<?php $judul='Dashboard'; ?>
<?php $__env->startSection('konten'); ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>OSIS</h4>
                        </div>
                        <div class="card-body">
                            <div class=" row ">
                                <div class=" col-10 col-lg-4 col-md-4 justify-content-center">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldUser1"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="text-muted font-semibold ">Kandidat</h6>
                                                    <h6 class="font-extrabold mb-0 " id="jumlahkandidatOsis"><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-10 col-lg-4 col-md-4 justify-content-center">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldVolume-Down"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="text-muted font-semibold ">Hak Suara</h6>
                                                    <h6 class="font-extrabold mb-0 " id="jumlahhaksuaraOsis"><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-10 col-lg-4 col-md-4 ">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldTick-Square"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="text-muted font-semibold ">Suara Masuk</h6>
                                                    <h6 class="font-extrabold mb-0 " id="suaramasukOsis"><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div id="chartOsis"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>MPK</h4>
                        </div>
                        <div class="card-body">
                        <div class=" row ">
                                <div class=" col-10 col-lg-4 col-md-4 justify-content-center">
                                    <div class="card ">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldUser1"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="text-muted font-semibold ">Kandidat</h6>
                                                    <h6 class="font-extrabold mb-0 " id="jumlahkandidatMpk"><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-10 col-lg-4 col-md-4 justify-content-center">
                                    <div class="card">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldVolume-Down"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="text-muted font-semibold ">Hak Suara</h6>
                                                    <h6 class="font-extrabold mb-0 " id="jumlahhaksuaraMpk"><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-10 col-lg-4 col-md-4 justify-content-center">
                                    <div class="card ">
                                        <div class="card-body px-3 py-4-5">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="stats-icon green">
                                                        <i class="iconly-boldTick-Square"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <h6 class="text-muted font-semibold ">Suara Masuk</h6>
                                                    <h6 class="font-extrabold mb-0 " id="suaramasukMpk"><div class="spinner-border text-dark" role="status"><span class="visually-hidden">Loading...</span></div></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div id="chartMpk"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="/assets/js/pages/dashboard.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.dashboardnew', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/indexnew.blade.php ENDPATH**/ ?>