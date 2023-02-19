<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ログインフォーム</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tweet.css') }}" rel="stylesheet">
    </head>
    <body>
        <main class="py-4">
            <div class="">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="mx-auto mt-2">{{ __('messages.Login') }}</div>

                            <div class="login-body card-body">
                                <form method="GET" action="{{ url('tweet') }}">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('messages.E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" autocomplete="off" required autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('messages.email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('messages.Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="checkbox">
                                            <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('messages.Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('messages.Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>