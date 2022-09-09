@extends('user.layout')
@section('title','Login to Vote')
@section('page')
    <div class="flex min-h-full items-center mt-10 justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <img class="mx-auto h-28 w-32" src="{{ asset('img/Smanegeri36.gif') }}" alt="SMAN36JAKARTA">
                {{-- <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your account</h2> --}}
                <p class="mt-5 text-center text-sm text-red-500">Token dapat diperoleh dari pihak administrator</p>
            </div>
            <form class="space-y-6" action="{{route('cektoken')}}" method="POST">
                @csrf
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="token" class="sr-only">Token</label>
                        <input id="token" name="usertoken" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Token">
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="userpassword" type="password" autocomplete="off" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>
                </div>

                <div class="text-sm">
                    <a href="/voting/setPassword" class="font-medium text-indigo-600 hover:text-indigo-500">Set password kamu disini</a>
                </div>

                <div>
                    <button type="submit" name="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection