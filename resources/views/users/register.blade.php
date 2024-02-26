@extends('layout')

@section('content')

        <h2 class="eagle-header font-semibold text-primary ml-2">Eagle's Nest Registration</h2>
        <p class="text-xl text-accent font-semibold my-2 ml-2">Prepared. For Life.</p>
  
      <form method="POST" action="/users">
        @csrf
        <div class="mb-6">
            <input type="text" placeholder="First Name" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="f_name" value="" />
        </div>

        <div class="mb-6">
            <input type="text" placeholder="Last Name" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="l_name" value="" />
        </div>

        <div class="mb-6">
            <input type="phone" placeholder="Phone" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="phone" value="" />
        </div>
  
        <div class="mb-6">
          <input type="email" placeholder="Email" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="email" value="" />
        </div>
  
        <div class="mb-6">
          <input type="password" placeholder="Password" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="password"
            value="" />
        </div>

        <div class="mb-6">
            <input type="password" placeholder="Confirm Password" class="input input-bordered bg-primary-content w-full max-w-xs ml-2" name="password_confirmation"
              value="" />
        </div>
  
        <div class="mb-6">
          <button type="submit" class="font-semibold ml-5 btn btn-primary text-primary-content">
            Create Account
          </button>
        </div>
      </form>
@endsection