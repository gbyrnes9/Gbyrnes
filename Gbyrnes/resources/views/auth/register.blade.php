<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('/bootstrap/css/bootstrap.css') }}">
    <style>
        #overide-container {
            width: 90%;
          margin: 0 auto;
            padding-top: 5%;
        }

        .control-group {
            width: 100%;
        }

        .title{
            font-family: "Helvetica Neue", Helvetica, Roboto, Arial, sans-serif;
            font-weight: lighter;
            text-align: center;
        }

    </style>
</head>
<!-- resources/views/auth/register.blade.php -->
@include('/errors/list')
<body>

{{--<form method="POST" action="/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>--}}

<div class="container" id="overide-container">
    <div class="row">
        <div class="col-md-6">

            <form class="form-horizontal" action="/register" method="POST">
                {!! csrf_field() !!}
                <fieldset>
                    <div id="legend">
                        <h1 class="title">Register</h1>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                            <input type="text" id="username" name="name" placeholder="" class="form-control input-lg">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            <input type="email" id="email" name="email" placeholder="" class="form-control input-lg">
                            <p class="help-block">Please provide your E-mail</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="form-control input-lg">
                            <p class="help-block">Password should be at least 6 characters</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="password_confirm">Password (Confirm)</label>
                        <div class="controls">
                            <input type="password" id="password_confirm" name="password_confirmation" placeholder="" class="form-control input-lg">
                            <p class="help-block">Please confirm password</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>

</body>