@extends('voting.master')
@section('judul','E-voting SMAN 36 JAKARTA')
@section('konten')
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

  @foreach($kandidat['osis'] as $x)

        <div class="col-md-6 col-lg-4 col-12">
          <div class="card mx-auto mb-5" style="width: 16rem;">
             <img src="{{ asset('foto_kandidat/'.$x['foto'])}}" class="btn object-fill h-60 w-full transition duration-500 transform hover:scale-110"   data-toggle="modal" data-target="#modalFoto{{$x['id']}}"  style="transition: transform .2s;"alt="Foto" height="250">
                 <div class="card-body text-center">
                  <h5 class="card-title">{{ $x['nama']}}</h5>
                  <div class="row">
                    @if ($status['osis'] == 2)
                      <div class="col"><button id="vote_{{$x['id']}}" role="voteOSIS" class="btn btn-primary mb-1" style="width:100%" onclick="vote({{$x['id']}},'{{$x['nama']}}','OSIS');">Pilih</button></div>
                    @elseif($status['osis'] == 1)
                    <div class="col"><button class="btn btn-success mb-1" style="width:100%"  disabled>Sudah Vote !</button></div>
                    @endif
                    </div>
                  <div class="row">
                      <div class="col"><a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi{{$x['id']}}">Lihat Visi Misi</a></div>
                  </div>
         </div>
         </div>
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
        @endforeach

  </div>
  <hr ></hr>
  <div class="row d-flex justify-content-center">
      <span class="flex text-black text-4xl font-bold justify-center">MPK</span>
    </div>
    <div class="row d-flex justify-content-center mt-3">
  @foreach($kandidat['mpk'] as $x)
        <div class="col-md-6 col-lg-4 col-12">
          <div class="card mx-auto mb-5" style="width: 16rem;">
          <img src="{{ asset('foto_kandidat/'.$x['foto'])}}" class="btn object-fill h-60 w-full transition duration-500 transform hover:scale-110"   data-toggle="modal" data-target="#modalFoto{{$x['id']}}"  style="transition: transform .2s;"alt="Foto" height="250">
                 <div class="card-body text-center">
                  <h5 class="card-title">{{ $x['nama']}}</h5>
                  <div class="row">
                  @if($status['mpk'] == 2)
                      <div class="col"><button id="vote_{{$x['id']}}" role="voteMPK" class="btn btn-primary mb-1" style="width:100%" onclick="vote({{$x['id']}},'{{$x['nama']}}','MPK');">Pilih</button></div>
                      @elseif($status['mpk'] == 1)
                    <div class="col"><button class="btn btn-success mb-1" style="width:100%"  disabled>Sudah Vote !</button></div>
                    @endif
                    </div>
                  <div class="row">
                      <div class="col"><a href="" class="btn btn-secondary" style="width:100%"  data-toggle="modal" data-target="#modalVisiMisi{{$x['id']}}">Lihat Visi Misi</a></div>
                  </div>
         </div>
         </div>
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
                    <{{$x['visi']}}
                    </div>
                  </div>
                <hr>
                <div class="row">
                  <div class="col font-bold">Misi</div>
                </div>  
                <div class="row">
                  <div class="col"> {{$x['misi']}} </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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