<!-- @extends('layouts.layouts')

@section('contents')
<div class="row no-gutters">
    <div class="login-contents offset-lg-3 col-lg-6">
        <div class="tab">Register</div>
        @foreach($errors->all() as $error)
            <p class="error offset-lg-3 col-lg-6">{{ $error }}</p>
        @endforeach
        <div class="input-field">
            <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="row no-gutters">
                    <label class="offset-lg-3 col-lg-2">Name</label>
                    <input class="col-lg-4" type="text" name="name" placeholder="name"><br>
                </div>
                <div class="row no-gutters">
                    <label class="offset-lg-3 col-lg-2">E-mail address</label>
                    <input class="col-lg-4" type="text" name="email" placeholder="email"><br>
                </div>
                <div class="row no-gutters">
                    <label class="offset-lg-3 col-lg-2">Password</label>
                    <input  class="col-lg-4" type="password" name="password" placeholder="password"><br>
                </div>
                <div class="row no-gutters">
                    <label class="offset-lg-3 col-lg-2">Confirm Password</label>
                    <input class="col-lg-4" type="password" name="password_confirmation" placeholder="comfirm password"><br>
                </div>
                <input class="submit offset-lg-5 col-lg-2" type="submit" value="Register">
            </form>
        </div>
    </div>
</div>
@endsection -->