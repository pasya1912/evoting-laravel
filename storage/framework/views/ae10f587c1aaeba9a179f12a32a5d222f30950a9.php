
<?php $__env->startSection('judul_halaman','Dashboard'); ?>
<?php $__env->startSection('konten'); ?>
<?php $judul='Dashboard'; ?>
          <div class="panel panel-headline">
            <div class="panel-heading">
              <h3 class="panel-title">E-Voting | Dashboard</h3>
            </div>
            <div class="panel-body">
              <p>Data diperbarui setiap 30 menit</p>
              <h2>OSIS</h2>
              <div class="row">
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <p>
                      <span class="number" id='jumlahkandidatOsis'>

                      <small>loading...</small>

                      </span>
                      <span class="title">Kandidat</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-volume-up"></i></span>
                    <p>
                      <span class="number" id='jumlahhaksuaraOsis'>

                      <small>loading...</small>

                    </span>
                      <span class="title">Hak Suara</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-database"></i></span>
                    <p>
                      <span class="number" id='suaramasukOsis'>

                      <small>loading...</small>

                    </span>
                      <span class="title">Suara Masuk</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <a href=""><span class="icon"><i class="fa fa-refresh"></i></span></a>
                    <p>
                      <span class="number">Refresh</span>
                      <span class="title">Manual</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12" style="width:100%;">
                  <div id="chartHasilOsis"></div>
                </div>
              </div>
              <h2>MPK</h2>
              <div class="row">
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-user"></i></span>
                    <p>
                      <span class="number" id='jumlahkandidatMpk'>

                      <small>loading...</small>

                      </span>
                      <span class="title">Kandidat</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-volume-up"></i></span>
                    <p>
                      <span class="number" id='jumlahhaksuaraMpk'>

                      <small>loading...</small>

                    </span>
                      <span class="title">Hak Suara</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-database"></i></span>
                    <p>
                      <span class="number" id='suaramasukMpk'>

                      <small>loading...</small>

                    </span>
                      <span class="title">Suara Masuk</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <a href=""><span class="icon"><i class="fa fa-refresh"></i></span></a>
                    <p>
                      <span class="number">Refresh</span>
                      <span class="title">Manual</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12" style="width:100%;">
                  <div id="chartHasilMpk"></div>
                </div>
              </div>
            </div>
          <!-- END OVERVIEW -->
            </div>
          </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('/js/chart.js')); ?>"></script>
<script src="<?php echo e(asset('/js/app-api.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/index.blade.php ENDPATH**/ ?>