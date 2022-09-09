@extends('voting.master')
@section('judul','E-voting SMAN 36 JAKARTA')
@section('konten')
    <div class="mycontainer" style="overflow-x:hidden">
    <div class="row d-flex justify-content-center mt-5">
      <span class="flex text-black text-4xl font-bold justify-center">OSIS</span>
    </div>
    <div class="row d-flex justify-content-center mt-3">

  @foreach($kandidat['osis'] as $x)
      
    <div class="m-1 col-md-5 col-lg-3 col-12 bg-white rounded-lg border border-gray-200 shadow-md">
      <div class="flex py-10 flex-col items-center">
          <img class="mb-3 w-24 h-24 rounded-full shadow-lg btn object-fill transition duration-500 transform hover:scale-110" src="{{ asset('foto_kandidat/'.$x['foto'])}}" data-toggle="modal" data-target="#modalFoto{{$x['id']}}" style="transition: transform .2s;"alt="Foto">
          <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $x['nama']}}</h5>
          <span class="text-sm text-gray-500 dark:text-gray-400">Kandidat</span>
          <div class="flex mt-4 space-x-3 md:mt-6">
            @if ($status['osis'] == 2)
              <div>
                <button id="vote_{{$x['id']}}" role="voteOSIS" class="btn btn-primary mb-1" style="width:100%" onclick="vote({{$x['id']}},'{{$x['nama']}}','OSIS');">Pilih</button>
              </div>
              <div>
                <a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi{{$x['id']}}">Visi Misi</a>
              </div>
            @elseif($status['osis'] == 1)
              <button class="btn btn-success mb-1" style="width:100%">Sudah Vote !</button>
            @endif
          </div>
          <div class="modal fade" id="modalFoto{{$x['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <img src="{{ asset('foto_kandidat/'.$x['foto'])}}" class="btn object-fill w-full"   data-toggle="modal" data-target="#exampleModal"  style="transition: transform .2s;"alt="Foto" height="250">

              </div>
            </div>
          </div>
          <div class="modal fade" id="modalVisiMisi{{ $x['id'] }}" tabindex="-1" role="dialog" aria-labelledby="modalVisiMisi" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalVisiMisi{{ $x['id'] }}"></h5>
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
      </div>
    </div>
  @endforeach

  </div>
  <div class="row d-flex justify-content-center mt-5">
      <span class="flex text-black text-4xl font-bold justify-center">MPK</span>
    </div>
    <div class="row d-flex justify-content-center mt-3">
    @foreach($kandidat['mpk'] as $x)
    <div class="m-1 col-md-5 col-lg-3 col-12 bg-white rounded-lg border border-gray-200 shadow-md">
      <div class="flex py-10 flex-col items-center">
          <img class="mb-3 w-24 h-24 rounded-full shadow-lg btn object-fill transition duration-500 transform hover:scale-110" src="{{ asset('foto_kandidat/'.$x['foto'])}}" data-toggle="modal" data-target="#modalFoto{{$x['id']}}" style="transition: transform .2s;"alt="Foto">
          <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $x['nama']}}</h5>
          <span class="text-sm text-gray-500 dark:text-gray-400">Kandidat</span>
          <div class="flex mt-4 space-x-3 md:mt-6">
            @if($status['mpk'] == 2)
              <div>
                <button id="vote_{{$x['id']}}" role="voteMPK" class="btn btn-primary mb-1" style="width:100%" onclick="vote({{$x['id']}},'{{$x['nama']}}','MPK');">Pilih</button>
              </div>
              <div>
                <a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi{{$x['id']}}">Visi Misi</a>
              </div>
              @elseif($status['mpk'] == 1)
              <button class="btn btn-success mb-1" style="width:100%">Sudah Vote !</button>
            @endif
          </div>
          <div class="modal fade" id="modalFoto{{$x['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <img src="{{ asset('foto_kandidat/'.$x['foto'])}}" class="btn object-fill w-full"   data-toggle="modal" data-target="#exampleModal"  style="transition: transform .2s;"alt="Foto" height="250">

              </div>
            </div>
          </div>
          <div class="modal fade" id="modalVisiMisi{{ $x['id'] }}" tabindex="-1" role="dialog" aria-labelledby="modalVisiMisi" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalVisiMisi{{ $x['id'] }}"></h5>
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
      </div>
    </div>
  @endforeach
  </div>
    </div>
<!-- Modal -->

@endsection
@section('js')
function vote(id,nama,type){
  if(confirm('Apakah anda yakin memilih '+nama+' ?')){
  var xhr = new XMLHttpRequest();
    xhr.open('GET', "{{route('simpansuara',"")}}/"+id, false);
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
    xhr.open('GET', "{{route('cekStatus')}}", false);
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
@endsection