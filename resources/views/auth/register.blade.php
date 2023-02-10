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
      
        <title>SignUp PPCash</title>
      
        <!-- External fonts -->
        <link href="https://brick.a.ssl.fastly.net/Montserrat:300,400,500,600,700" rel="stylesheet">
      
        <!-- NPM Packages -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
      
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" />

        <!-- <link href="/css/styles.css" rel="stylesheet" /> -->
        <link href="{{ asset('css/styles-old.css') }}" rel="stylesheet" />
      
      
      
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="app" class="bgimage">

        <div class="session">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <img class="text-center" src="{{ asset('front/images/logo-blue.png') }}" width="150px" /><br />
            {{-- <h4>Welcome back to <span>PPCash!</span></h4> --}}
            <!-- <p>Welcome back! Log in to your account to view today's clients:</p> -->
            <div class="floating-label">
                <input placeholder="Name" type="text" name="name" id="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus autocomplete="name" />
                <label for="name">Name:</label>
                @error('name')
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
                <input placeholder="Skype" type="text" class="@error('skype') is-invalid @enderror" name="skype_id" value="{{ old('skype_id') }}" id="skype" required />
                @error('skype_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="skype">Skype:</label>
                <div class="icon">
                    <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                        <rect class="st0" width="24" height="24"></rect>
                        <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z"></path>
                        <path class="st1" d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z"></path>
                        <path class="st1" d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z"></path>
                    </svg>
                </div>
            </div>
            <div class="floating-label">
                <input placeholder="Email" type="email" name="email" id="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="email">Email:</label>
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
                <input placeholder="Password" type="password" name="password" id="password" class="@error('password') is-invalid @enderror" required autocomplete="new-password" />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for="password">Password:</label>
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
                <input placeholder="Confirm Password" type="password" name="password_confirmation" id="cpass" required autocomplete="new-password" />
                <label for="cpass">Confirm Password:</label>
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
            <button type="submit">{{__('REGISTER') }}</button>
        </form>

    </div>

            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>