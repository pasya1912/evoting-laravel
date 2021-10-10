@extends('dashboard.dashboardnew')
@section('judul_halaman','Tambah token')
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
                                    <form method="post" action="{{ route('admin.voters.store') }}">
                                            {{ csrf_field() }}

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
@endsection
@section('js')
<script src="/assets/js/mazer.js"></script>

@endsection('js')
