
<?php $__env->startSection('judul','E-voting SMAN 36 JAKARTA'); ?>
<?php $__env->startSection('konten'); ?>
    <div class="mycontainer" style="overflow-x:hidden">
    <div class="row">
        <div class="col-md-12 text-center mb-4">
            <h2 class="mt-3 text-transparent bg-clip-text bg-gradient-to-b from-blue-300 to-blue-900">E-Voting | Daftar Kandidat</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
      <span class="flex text-black text-4xl font-bold justify-center">OSIS</span>
    </div>
    <div class="row d-flex justify-content-center mt-3">

  <?php $__currentLoopData = $kandidat['osis']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-3">
          <div class="card mx-auto mb-5" style="width: 16rem;">
             <img src="<?php echo e(asset('foto_kandidat/'.$x['foto'])); ?>" class="btn object-fill h-60 w-full transition duration-500 transform hover:scale-110"   data-toggle="modal" data-target="#modalFoto<?php echo e($x['id']); ?>"  style="transition: transform .2s;"alt="Foto" height="250">
                 <div class="card-body text-center">
                  <h5 class="card-title"><?php echo e($x['nama']); ?></h5>
                  <div class="row">
                    <?php if($status['osis'] == 2): ?>
                      <div class="col"><button id="vote_<?php echo e($x['id']); ?>" role="voteOSIS" class="btn btn-primary mb-1" style="width:100%" onclick="vote(<?php echo e($x['id']); ?>,'<?php echo e($x['nama']); ?>','OSIS');">Pilih</button></div>
                    <?php elseif($status['osis'] == 1): ?>
                    <div class="col"><button class="btn btn-success mb-1" style="width:100%"  disabled>Sudah Vote !</button></div>
                    <?php endif; ?>
                    </div>
                  <div class="row">
                      <div class="col"><a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi<?php echo e($x['id']); ?>">Lihat Visi Misi</a></div>
                  </div>
         </div>
         </div>
        </div>
        <div class="modal fade" id="modalFoto<?php echo e($x['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <img src="<?php echo e(asset('foto_kandidat/'.$x['foto'])); ?>" class="btn object-fill w-full"   data-toggle="modal" data-target="#exampleModal"  style="transition: transform .2s;"alt="Foto" height="250">

    </div>
  </div>
</div>



        <div class="modal fade" id="modalVisiMisi<?php echo e($x['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="modalVisiMisi" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalVisiMisi<?php echo e($x['id']); ?>"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col font-bold">Visi</div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <?= $x['visi']?>
                    </div>
                  </div>
                <hr>
                <div class="row">
                  <div class="col font-bold">Misi</div>
                </div>  
                <div class="row">
                  <div class="col"> <?= $x['misi']?> </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  <hr ></hr>
  <div class="row d-flex justify-content-center">
      <span class="flex text-black text-4xl font-bold justify-center">MPK</span>
    </div>
    <div class="row d-flex justify-content-center mt-3">
  <?php $__currentLoopData = $kandidat['mpk']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <div class="card mx-auto mb-5" style="width: 16rem;">
          <img src="<?php echo e(asset('foto_kandidat/'.$x['foto'])); ?>" class="btn object-fill h-60 w-full transition duration-500 transform hover:scale-110"   data-toggle="modal" data-target="#modalFoto<?php echo e($x['id']); ?>"  style="transition: transform .2s;"alt="Foto" height="250">
                 <div class="card-body text-center">
                  <h5 class="card-title"><?php echo e($x['nama']); ?></h5>
                  <div class="row">
                  <?php if($status['mpk'] == 2): ?>
                      <div class="col"><button id="vote_<?php echo e($x['id']); ?>" role="voteMPK" class="btn btn-primary mb-1" style="width:100%" onclick="vote(<?php echo e($x['id']); ?>,'<?php echo e($x['nama']); ?>','MPK');">Pilih</button></div>
                      <?php elseif($status['mpk'] == 1): ?>
                    <div class="col"><button class="btn btn-success mb-1" style="width:100%"  disabled>Sudah Vote !</button></div>
                    <?php endif; ?>
                    </div>
                  <div class="row">
                      <div class="col"><a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi<?php echo e($x['id']); ?>">Lihat Visi Misi</a></div>
                  </div>
         </div>
         </div>
        </div>

        <div class="modal fade" id="modalFoto<?php echo e($x['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <img src="<?php echo e(asset('foto_kandidat/'.$x['foto'])); ?>" class="btn object-fill w-full"   data-toggle="modal" data-target="#exampleModal"  style="transition: transform .2s;"alt="Foto" height="250">

    </div>
  </div>
</div>

        <div class="modal fade" id="modalVisiMisi<?php echo e($x['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="modalVisiMisi" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalVisiMisi<?php echo e($x['id']); ?>"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col font-bold">Visi</div>
                    </div>
                    <div class="row">
                    <div class="col">
                    <<?php echo e($x['visi']); ?>

                    </div>
                  </div>
                <hr>
                <div class="row">
                  <div class="col font-bold">Misi</div>
                </div>  
                <div class="row">
                  <div class="col"> <?php echo e($x['misi']); ?> </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        

    

  </div>
    </div>
<!-- Modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
function vote(id,nama,type){
  if(confirm('Apakah anda yakin memilih '+nama+' ?')){
  var xhr = new XMLHttpRequest();
    xhr.open('GET', "<?php echo e(route('simpansuara',"")); ?>/"+id, false);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let result = JSON.parse(this.responseText);
                if(result.success){
                  document.querySelectorAll('button[role="vote'+type+'"]').forEach(function(button){
                    button.disabled = true;
                    button.setAttribute('class','btn btn-success mb-1');
                    button.innerHTML = "Sukses Vote !";

                  });
                  toastr.success('Sukses voting !', 'System Info');

                }
            }
        }
    };
    xhr.send(null);
  }
}


setInterval(function(){
  var xhr = new XMLHttpRequest();
    xhr.open('GET', "<?php echo e(route('cekStatus')); ?>", false);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                let result = JSON.parse(this.responseText);
                if(result.success){

                    if(result.data.status_osis == true && result.data.status_mpk == true)
                    {
                      toastr.success('Terimakasih sudah voting !', 'System Info');
                      toastr.info('Logout otomatis dalam 3 detik !', 'System Info');
                      setTimeout(function(){
                        location.href="/logoutvoting";
                      },3000);
                    }

                }
            }
        }
    };
    xhr.send(null);
},5000);
<?php $__env->stopSection(); ?>
<?php echo $__env->make('voting.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/voting/index.blade.php ENDPATH**/ ?>