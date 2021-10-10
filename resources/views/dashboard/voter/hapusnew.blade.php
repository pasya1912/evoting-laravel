@extends('dashboard.dashboardnew')
@section('judul_halaman','Hapus token')
<?php $judul='Voters'; ?>

@section('konten')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <a href="{{route('admin.voters')}}" class="btn btn-outline-info "><i class="bi bi-arrow-left"></i> Kembali</a>
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
                                    <form method="post" action="{{ route('admin.voters.delete') }}">
                                            {{ csrf_field() }}
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
@endsection
@section('js')
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
@endsection('js')