@extends('/layouts/layoutHome')

@section('content')
      <div class="justify-center max-w-fit my-10 sm:mx-auto mx-2 p-2 parchment">
          <h2 class="eagle-header font-semibold text-primary ml-2">Eagle's Nest</h2>
          <h3 class="text-xl font-semibold text-primary ml-2">Scout Registration</h3>
          <p class="text-xl text-accent font-semibold my-2 ml-2">Prepared. For Life.</p>
    
        <form method="POST" action="/users">
          @csrf
          <h3 class="text-xl font-semibold text-primary ml-2 my-2">Invite Code <i class="text-sm">(*Required* If you are unsure, contact your Scout Master.)<i></h3>
          <div class="md:grid md:grid-cols-2 md:auto-cols-max">
            <div class="m-2">
              <input type="text" placeholder="Enter Invite Code" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="invite_code" value=""/>
              @if(session()->has('err_msg'))
                <p class="text-red-500 text-s mt-1">{{session('err_msg')}}</p>
              @endif
            </div>
          </div>
          <h3 class="text-xl font-semibold text-primary ml-2 my-2">General Information</h3>
          <div class="md:grid md:grid-cols-2 md:auto-cols-max">
            <div class="m-2">
                <input type="text" placeholder="First Name" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="f_name" value="" />
            </div>

            <div class="m-2">
                <input type="text" placeholder="Last Name" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="l_name" value="" />
            </div>

            <div class="m-2">
                <input type="phone" placeholder="Phone" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="phone" value="" />
            </div>
      
            <div class="m-2">
              <input type="email" placeholder="Email" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="email" value="" />
            </div>

            <div class="m-2">
              <select class="select select-bordered w-full max-w-xs bg-primary-content ml-2" name="troop_role_id">
                <option disabled selected>What is your Troop Role?</option>
                <option value="0">No Role</option>
                <option value="1">Senior Patrol Leader</option>
                <option value="2">Assistant Senior Patrol Leader</option>
                <option value="3">Patrol Leader</option>
                <option value="4">Assistant Patrol Leader</option>
                <option value="5">Troop Guide</option>
                <option value="6">Quartermaster</option>
                <option value="7">Scribe</option>
                <option value="8">Den Chief</option>
                <option value="9">Chaplain's Aide</option>
                <option value="10">Historian</option>
                <option value="11">Instructor</option>
                <option value="12">Librarian</option>
                <option value="13">Webmaster</option>
                <option value="14">Bugler</option>
                <option value="15">Order of the Arrow Representative</option>
                <option value="16">Outdoor Ethics Guide</option>
                <option value="17">Junior Assistant Scoutmaster</option>
              </select>
            </div>

            <div class="m-2">
              <select class="select select-bordered bg-primary-content w-full max-w-xs ml-2" name="troop_rank_id">
                <option disabled selected>What is your Rank?</option>
                <option value="1">Scout</option>
                <option value="2">Tenderfoot</option>
                <option value="3">Second Class</option>
                <option value="4">First Class</option>
                <option value="5">Star</option>
                <option value="6">Life</option>
                <option value="7">Eagle</option>
              </select>
            </div>
          </div>
          <h3 class="text-xl font-semibold text-primary ml-2 my-2">Create A Password</h3>
          <div class="md:grid md:grid-cols-2 md:auto-cols-max">
            <div class="m-2">
              <input type="password" placeholder="Password" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="password"
                value="" />
            </div>

            <div class="m-2">
                <input type="password" placeholder="Confirm Password" class="input input-bordered bg-primary-content w-full max-w-xs ml-2 placeholder:italic" name="password_confirmation"
                  value="" />
            </div>
          </div> 
          <p class="text-s mt-1 text-center">Already have a profile? <a class="italic underline text-primary" href="/login">Login</a></p>
          @error('password')
            <p class="text-red-500 text-s mt-1">{{$message}}</p>
          @enderror
          @error('email')
            <p class="text-red-500 text-s mt-1">{{$message}}</p>
          @enderror
          <div class="m-2">
            <button type="submit" class="font-semibold ml-5 btn bg-primary text-primary-content">
              Register
            </button>
          </div>
        </form>
      </div>
@endsection