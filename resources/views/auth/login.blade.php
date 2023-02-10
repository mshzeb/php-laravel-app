<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="https://ppcash.net/assets/img/ppico.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <meta name="description" content="">
        <meta name="author" content="">
            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        <title>Login PPCash</title>
      
       
        <!-- External fonts -->
        <link href="https://brick.a.ssl.fastly.net/Montserrat:300,400,500,600,700" rel="stylesheet" />
      
        <!-- NPM Packages -->
        <!-- 
        <link href="/analytics/css/app.css" rel="stylesheet">
        <link href="/analytics/css/font-awesome.min.css" rel="stylesheet">
      
        <link href="/analytics/css/login.css" rel="stylesheet">
        -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" />

        <!-- <link rel="stylesheet" href="/css/styles.css" /> -->
        <link rel="stylesheet" href="{{ asset('css/styles-old.css') }}" />
      
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bgimage">

        <div class="session">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <img class="text-center" src="{{ asset('front/images/logo-blue.png') }}" width="150px" /><br />
                <h4>Welcome back to <span>PPCash!</span></h4>
                <!-- <p>Welcome back! Log in to your account to view today's clients:</p> -->
                <div class="floating-label">
                    <input type="email" name="email" placeholder="Email" id="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" autocomplete="email" required autofocus />
                    <label for="email">Email:</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="icon">
                        <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve"
                            xmlns="http://www.w3.org/2000/svg">
                            <g transform="translate(0 -952.36)">
                                <path d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z"></path>
                            </g>
                            <rect class="st0" width="100" height="100"></rect>
                        </svg>
                    </div>
                </div>

                <div class="floating-label">
                    <input type="password" name="password" placeholder="Password" id="password" class="@error('password') is-invalid @enderror" autocomplete="current-password" required />
                    <label for="password">Password:</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="icon">
                        <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                            <rect class="st0" width="24" height="24"></rect>
                            <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z"></path>
                            <path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"></path>
                            <path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"></path>
                        </svg>
                    </div>
                </div>
                <div class="custom-control row">
                    <div style="height: 22px;">
                        <input type="checkbox" name="remember" id="remember" />
                        <label class="remem" for="remember">Remember Me</label>
                    </div>
                    
                    <div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                    </div>
                </div>
                <button type="submit">SIGN IN</button>

                <div class="text-center1">
                    <hr>
                    <p class="text-small">
                        Don't have an Account?
                    </p>
                    @if (Route::has('register'))
                        <a class="btn btn-lg btn-block btn-login text-uppercase mb-2" href="{{ route('register') }}">
                            {{ __('Sign UP Now!') }}
                        </a>
                    @endif
                    
                </div>
            </form>

        </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>   

    </body>
</html>