<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Create an Account
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="field">
                <span></span>
                <label for="name">{{ __('Full Name') }}</label>
                <input id="name" type="text" class="input form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="field">
                <span></span>
                <label for="email">{{ __('Email') }}</label>
                <input id="email" type="text" class="input form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="field">
                <span></span>
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror"
                    name="password" value="{{ old('password') }}" required autocomplete="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="field">
                <span></span>
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="input form-control" name="password_confirmation"
                    required autocomplete="new-password">
            </div>

            <div class="field">
                <button type="submit">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="signup-link">
                Already have account? <a href="{{ url('login') }}">Log In</a>
            </div>


        </form>
    </div>

</body>

</html>
