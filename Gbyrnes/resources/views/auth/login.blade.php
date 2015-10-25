
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
    <link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('/css/login.css') }}">
</head>
<body><!-- resources/views/auth/login.blade.php -->
<div class="container">
    @include('/errors/list')
<form method="POST" action="/login" class="form-signin">
    {!! csrf_field() !!}

    <h2 class="form-signin-heading">Login</h2>


        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>



        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>



        <div class="checkbox">

            <label>
                <input type="checkbox" name="remember" value="remember-me"> Remember me
            </label>
        </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--Bootstrap-->
<script src="{{URL::asset('/bootstrap/js/bootstrap.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script>/*!
     * IE10 viewport hack for Surface/desktop Windows 8 bug
     * Copyright 2014-2015 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */

    // See the Getting Started docs for more information:
    // http://getbootstrap.com/getting-started/#support-ie10-width

    (function () {
        'use strict';

        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                    document.createTextNode(
                            '@-ms-viewport{width:auto!important}'
                    )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }

    })();</script>


</body>
</html>