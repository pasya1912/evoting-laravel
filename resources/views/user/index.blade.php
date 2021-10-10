@extends('user.layout')
@section('title','Welcome to E-Voting')
@section('page')
        <div class="w-1/3 tablet:w-3/5 mobile:w-11/12 mt-10 border-t-12 bg-white mb-3 rounded-lg shadowww">
        <div>
            <span class="flex justify-center text-transparent bg-clip-text bg-gradient-to-br from-blue-300 to-blue-900 font-bold mobile:text-small tablet:text-lg text-2xl">Selamat Datang</span>
            </div>
            <div>
            <img class="object-contain mobile:h-44 h-64 pt-8 mt-10  w-full" src='/img/Smanegeri36.gif'></img>
            </div>
            <div class="flex p-8 border-t-12 justify-center">
                <div class="mb-4 w-1/2">
                    
                    <a href="{{route('votinglogin')}}" name="submit" class="transition duration-500 ease-in-out transform focus:-translate-y-1 focus:scale-95 text-center font-bold block appearance-none w-full bg-blue-500 border border-grey-light ring-indigo-300 focus:ring-4  hover:border-blue-900 mt-2 px-2 py-2 rounded shadow">VOTING</a>

                </div> 
            </div>

        </div>
@endsection