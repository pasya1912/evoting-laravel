@extends('user.layout')
@section('title','Set Password')
@section('page')
        <div class="w-1/3 tablet:w-3/5 mobile:w-11/12 mt-10 border-t-12 bg-white mb-3 rounded-lg shadowww">
        <div>
            <span class="flex justify-center text-center text-transparent bg-clip-text bg-gradient-to-br from-blue-300 to-blue-900 font-bold mobile:text-base tablet:text-lg text-2xl">Silahkan SET PASSWORD token anda disini</span>
            </div>
            <div>
            <img class="object-contain mobile:h-44 h-64 pt-8 mt-10  w-full" src='/img/Smanegeri36.gif'></img>
            </div>
            <div class="flex p-8 border-t-12 justify-center">
                <div class="mb-4 w-1/2">
                  <form action="{{route('voting.setPassword')}}" method="POST">


                  @if(Session::has('Gagal') | $errors->any())
                        <label class="flex font-bold text-grey-darker mb-2">Token</label>
                        <input type="text" name="usertoken" class="text-center block appearance-none w-full bg-white border border-red-300 hover:border-red-700 px-2 py-2 rounded shadow" placeholder="Token">
                        <label class="flex font-bold text-grey-darker mb-2">New Password</label>
                        <input type="text" name="userpassword" class="text-center block appearance-none w-full bg-white border border-red-300 hover:border-red-700  px-2 py-2 rounded shadow" placeholder="Password">

                        @else
                        <label class="flex font-bold text-grey-darker mb-2">Token</label>
                        <input type="text" name="usertoken" class="text-center block appearance-none w-full bg-white border border-gray-300 hover:border-gray-700 px-2 py-2 rounded shadow" placeholder="Token">
                        <label class="flex font-bold text-grey-darker mb-2">New Password</label>
                        <input type="text" name="userpassword" class="text-center block appearance-none w-full bg-white border border-gray-300 hover:border-gray-700  px-2 py-2 rounded shadow" placeholder="Password">
                        @endif
                    @csrf
                        @if ($errors->any())
                        <div class="flex justify-center mt-3 rounded-lg text-white bg-red-700">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (Session::has('Gagal'))
                        <div class=" flex justify-center mt-3 bg-red-700 text-white rounded-lg">
                            <ul>
                                    @if(Session::has('Gagal'))
                                    <li>{{Session::get('Gagal')}}</li>
                                    @endif
                            </ul>
                        </div>
                        @elseif(Session::has('Success'))
                        <div class=" flex justify-center mt-3 bg-green-700 text-white rounded-lg">
                            <ul>
                                    @if(Session::has('Success'))
                                    <li>{{Session::get('Success')}}</li>
                                    @endif
                            </ul>
                        </div>
                        @endif
                    <button type="submit" name="submit" class="transition duration-500 ease-in-out transform focus:-translate-y-1 focus:scale-95 text-center font-bold block appearance-none w-full bg-blue-500 border border-grey-light ring-indigo-300 focus:ring-4  hover:border-blue-900 mt-2 px-2 py-2 rounded shadow">SET PASSWORD</button>
                  </form>
                  <a href="{{route('votinglogin')}}" class="float-right text-blue-400 hover:text-blue-900">Login</a>
                </div>

                
            </div>
        </div>
@endsection