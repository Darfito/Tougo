<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://img.icons8.com/badges/48/idea.png">
    <link rel="stylesheet" href="css/signup.css">
    <title>Signup</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Create an Account
        </div>
        <form method="POST" action="/register">
            @csrf
            <div class="field">
                <span></span>
                <label for="firstname">{{ __('First Name') }}</label>
                <input id="firstname" type="text"
                    classfirst="input form-control @error('firstname') is-invalid @enderror" name="firstname"
                    value="{{ old('firstname') }}" required autocomplete="firstname">

                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="field">
                <span></span>
                <label for="lastname">{{ __('Last Name') }}</label>
                <input id="lastname" type="text" class="input form-control @error('lastname') is-invalid @enderror"
                    name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">

                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="field">
                <span></span>
                <label for="gender">{{ __('Gender') }}</label>
                <div class="select">
                    <select name="gender" id="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="field">
                <span></span>
                <label for="notelp">{{ __('No Telpon') }}</label>
                <input id="notelp" type="text" class="input form-control @error('notelp') is-invalid @enderror"
                    name="notelp" value="{{ old('email') }}" required autocomplete="notelp">

                @error('notelp')
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
