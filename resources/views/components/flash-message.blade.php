@if(session()->has('err_msg'))
    <div class="">
        <h2>
            {{session('err_msg')}}
        </h2>
    </div>
@endif