@extends('dashboard.dashboardnew')
@section('judul_halaman','Voters')
<?php $judul='Voters'; ?>

@section('konten')
<?php

?>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="d-flex justify-content-center justify-content-md-start justify-content-lg-start">
                                    <form method="get" action="{{ url()->full()}}">
                                                <div class="input-group mb-3">
                                                    <select class="form-select"  id="kriteria" name="kriteria">
                                                        <option value="-">Filter Data</option>
                                                        <option value="0">Semua</option>
                                                        <option value="1">Sudah Voting</option>
                                                        <option value="2">Belum Voting</option>
                                                        <option value="3">Sudah Set Password</option>
                                                        <option value="4">Belum Set Password</option>
                                                        <option value="5">By Token</option>
                                                    </select>
                                                <button type="submit" class="btn btn-outline-primary">Cari Token</button>
                                                </div>
                                                <div class="input-group">
                                                <input type="text" style="display:none;" class="form-control" name="token" id="token" placeholder="Masukkan Token yang ingin dicari">

                                                </div>

                                        <form>

                                    </div>

                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="d-flex justify-content-center justify-content-md-end justify-content-lg-end mt-3 mt-md-0 mt-lg-0">
                                        <a href="{{ route('admin.voters.tambah') }}"class="btn btn-outline-info mx-1"><i class="bi bi-person-plus align-middle"></i> Tambah Voters</a>
                                        <a href="{{ route('admin.voters.hapus') }}" class="btn btn-outline-danger mx-1"><i class="bi bi-trash align-middle"></i> Hapus Voters</a>
                                        <a href="{{ route('admin.voters.export_excel') }}" class="btn btn-outline-success mx-1"><i class="bi bi-file-spreadsheet align-middle"></i> Export Voters</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                    <div class="table-responsive">
                                        <table class="table table-striped" id="table1">
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

                                                @foreach($pemilih as $key =>$data)

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
                                                    <td width="10%">{{ $data->id }}</td>
                                                    @if($key<\Session::get('created'))
                                                    <td>{{$data->username}} <span class="badge bg-success h-25">NEW !</span></td>
                                                    @else
                                                    <td>{{$data->username}}</td>
                                                    @endif
                                                    <?php echo $data->text_osis; ?>
                                                    <?php echo $data->text_mpk; ?>
                                                    @if($data->password == null)
                                                    <?php $password = "<td class='text text-danger'>Belum diset</td>"?>
                                                    @else
                                                    <?php $password = "<td class='text text-success'>Telah diset</td>"?>
                                                    @endif
                                                    <?php echo "test".$password; ?>
                                                </tr>
                                                @endforeach  	
                                            </tbody>
                                        </table>
                                        <div class="float-end">{{ $pemilih->appends(request()->input())->links() }}</div>	 
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection('konten')
@section('js')
<script src="/assets/js/mazer.js"></script>
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
</script>
@endsection('js')