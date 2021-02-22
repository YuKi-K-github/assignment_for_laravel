@extends('layouts.layouts')

@section('contents')
<div class="row no-gutters">
    <div class="login-contents offset-lg-3 col-lg-6">
        <div class="tab">Login</div>
        <div class="input-field">
            <form method="" action="">
                <div class="row no-gutters">
                    <label class="offset-lg-3 col-lg-2">E-mail address</label>
                    <input class="col-lg-4" type="text" name="email" placeholder="email"><br>
                </div>
                <div class="row no-gutters">
                    <label class="offset-lg-3 col-lg-2">Password</label>
                    <input class="col-lg-4" type="password" name="password" placeholder="password"><br>
                </div>
                <input class="submit offset-lg-5 col-lg-2" type="submit" value="Login">
            </form>
        </div>
    </div>
</div>
@endsection