<?php $__env->startSection('judul_halaman','Voters'); ?>
<?php $__env->startSection('konten'); ?>

<?php $judul = 'Voters'; ?>
	<div class="panel panel-headline">
		<div class="panel-heading">
			<div class="panel-title">E-Voting | Voters</div>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-8">
					<a href="<?php echo e(route('admin.voters.tambah')); ?>" class="btn btn-primary mb-5"><i class="fa fa-fw fa-user-plus"></i><span> Tambah Akun Voting</span></a>
					<a href="<?php echo e(route('admin.voters.hapus')); ?>" class="btn btn-danger mb-5"><i class="fa fa-fw fa-trash"></i><span> Hapus Akun Voting</span></a>
					<a href="<?php echo e(route('admin.voters.export_excel')); ?>" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
				</div>
			</div>
			<?php if(Session::has('data')): ?>
			<?php
				$data = Session::get('data');
			?>
			<div class="row margin-top:25px;margin-bottom:25px;">
				<div class="col-md-12 "style="margin-top:25px;margin-bottom:25px;">
					<span class="alert alert-success">
					Token : <?php echo e($data->username); ?>

					</span>
				</div>
			</div>
			<?php else: ?>
			<div class="row" style="margin-top:15px;margin-bottom:18px;">
        	<div class="col-md-4">
			<form method="get" action="<?php echo e(url()->full()); ?>">
          <div class="form-group">

            <select class="form-control" id="kriteria" name="kriteria">
				<option value="-">Filter Data</option>
				<option value="0">Semua</option>
				<option value="1">Sudah Voting</option>
				<option value="2">Belum Voting</option>
				<option value="3">Sudah Set Password</option>
				<option value="4">Belum Set Password</option>
				<option value="5">By Token</option>
			</select>
		  </div>
		  <div class="form-group">
			<input type="text" style="display:none;"class="form-control" name="token" id="token" placeholder="Masukkan Token yang ingin dicari">
			</div>

		  <div class="form-group">
            <button class="btn btn-primary pull-right" type="submit">Find</button>
	      </div>


          </form>
			</div>
          </div>
			<?php endif; ?>
			<div class="row" style="margin-top:10px;">
				<div class="col-md-12">
					 <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Token</th>
                      <th>Status OSIS</th>
					  <th>Status MPK</th>
					  <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php $__currentLoopData = $pemilih; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
					switch($data->text_osis)
{
	case 2:
		$data->text_osis = "<td class='text text-danger'>Belum Voting</td>";
		break;
	case 1:
		$data->text_osis = "<td class='text text-success'>Sudah Voting</td>";
		break;
}
					?>
										<?php
					switch($data->text_mpk)
{
	case 2:
		$data->text_mpk = "<td class='text text-danger'>Belum Voting</td>";
		break;
	case 1:
		$data->text_mpk = "<td class='text text-success'>Sudah Voting</td>";
		break;
}
					?>
                    <tr>
                        <td width="10%"><?php echo e($data->id); ?></td>
                        <td><?php echo e($data->username); ?></td>
						<?php echo $data->text_osis; ?>
						<?php echo $data->text_mpk; ?>
						<?php if($data->password == null): ?>
						<?php $data->password = "<td class='text text-danger'>Belum diset</td>"?>
						<?php else: ?>
						<?php $data->password = "<td class='text text-success'>Telah diset</td>"?>
						<?php endif; ?>
						<?php echo $data->password; ?>
					</tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  	
              		</tbody>

           		     </table>
						<div><?php echo e($pemilih->appends(request()->input())->links()); ?></div>	 
					</div>
					</div>
				</div>
			</div>
			</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
  <script src="<?php echo e(asset('/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/dataTables/datatables-demo.js')); ?>"></script>
  <script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
var kriteria = urlParams.get('kriteria');
if(kriteria == null | kriteria <= 0){
	kriteria = 0;
}
document.querySelector('#kriteria').value = kriteria;





var token = document.querySelector('#token');
token.disabled = true;
document.querySelector('#kriteria').addEventListener('change',function(e){
console.log(document.querySelector('#kriteria').value);
if(document.querySelector('#kriteria').value == 5){
	token.disabled = false;
	token.style.display = "block";
}else{
	token.disabled = true;
	token.style.display = "none";
}
});
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-evoting\resources\views/dashboard/voter/voters.blade.php ENDPATH**/ ?>