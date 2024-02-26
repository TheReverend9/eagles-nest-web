@extends('layout')

@section('content')

        <h2 class="eagle-header font-semibold text-primary ml-2">Eagle's Nest Login</h2>
        <p class="text-xl text-accent font-semibold my-2 ml-2">Prepared. For Life.</p>
  
      <form method="POST" action="/users/authenticate">
        @csrf
  
        <div class="mb-6">
          <input type="email" placeholder="Email" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="email" value="{{old('email')}}" />
        </div>
  
        <div class="mb-6">
          <input type="password" placeholder="Password" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="password"
            value="{{old('password')}}" />
        </div>
  
        <div class="mb-6">
          <button type="submit" class="font-semibold ml-5 btn btn-primary text-primary-content">
            Login
          </button>
        </div>
      </form>
@endsection