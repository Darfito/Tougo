<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
</head>

<body>

    <div class="center">
        <h1>Login</h1>
        <form method="POST" action='/login'>
            @csrf
            <div class="txt_field">
                <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                <span></span>
                <label>Email</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="txt_field">
                <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror"
                    name="password" value="{{ old('password') }}" required autocomplete="password">
                <span></span>
                <label>Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="pass">Forgot Password?</div>

            <div class="loginn">
                <a href="../Konten/Profile.html">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </a>
            </div>
            {{-- <div class="logg">
                <a href="../Konten/Profile.html">
                    <input type="submit" value="Login with Google" />
                </a>
            </div> --}}
            <div class="signup_link">
                Not a member? <a href="{{ url('register') }}">Signup</a>
            </div>
        </form>
    </div>
</body>

</html>
