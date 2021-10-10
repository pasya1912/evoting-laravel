@extends('dashboard.dashboardnew')
@section('judul_halaman','DETAIL KANDIDAT')
<?php $judul='Kandidat'; ?>
<?php $data = json_decode($detailkandidat->data);?>
@section('css')
<style>
    p{
        white-space: pre-wrap;
    }
        @media only screen and (min-width: 769px) {
            .borderzz{
                border-right: 3px solid black;
            }
    }
    @media only screen and (max-width: 769px) {
            .borderzz{
                border-bottom: 3px solid black;
            }
    }

</style>
@endsection
@section('konten')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <a href="{{route('admin.kandidat.tambah')}}"class="btn btn-outline-info "><i class="bi bi-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3 ">
                    <div class="card borderzz">
                        <div class="card-body">
                        <img src="{{ asset('foto_kandidat/'.$detailkandidat->foto )}}" class="img-fluid  img-thumbnail" alt="Responsive image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-9 ">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                    <h2>{{ $detailkandidat->nama }}</h2>
                                    <hr>
                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Ketua</h3>
                                    <p>Nama : {{$data->ketua->nama}}</p>
							        <p>Kelas : {{$data->ketua->kelas}}</p>
                                </div>
                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Ketua</h3>
                                    <p>Nama : {{$data->wakil->nama}}</p>
							        <p>Kelas : {{$data->wakil->kelas}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">

                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Visi</h3>
                                    <p>{{ $detailkandidat->visi }}</p>                                
                                </div>
                                <div class="col-12 col-md-6 col-md-6">
                                    <h3>Misi</h3>
                                    <p>{{ $detailkandidat->misi }}</p>                                
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-md-12 col-md-12">
                                    <a href="{{ route('admin.kandidat.edit',$detailkandidat->id) }}" class="btn btn-outline-primary float-end">Edit Profile</a>                             
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                
            </div>

            
@endsection('konten')
@section('js')
<script src="/assets/js/mazer.js"></script>
@endsection('js')