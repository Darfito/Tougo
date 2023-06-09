<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/profile/editprofile.css">
    <title>Edit Profile</title>
</head>

<body>
    <div class="center">
        <h1>
            Edit
        </h1>
        <form method="POST" action="{{ route('profile.update', ['id' => $user->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="txt_field">
                <input id="firstname" type="text"
                classfirst="input form-control @error('firstname') is-invalid @enderror" name="firstname"
                value="{{ $user -> firstname }}" required autocomplete="firstname">
                <span></span>
                <label for="firstname">First Name</label>
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="txt_field">
                <input id="lastname" type="text" class="input form-control @error('lastname') is-invalid @enderror"
                name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname">
                <span></span>
                <label for="lastname">Last Name</label>
                @error('lastname')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="txt_field">
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

            <div class="txt_field">
                <input id="notelp" type="text" class="input form-control @error('notelp') is-invalid @enderror"
                name="notelp" value="{{ $user->notelp }}" required autocomplete="notelp">
                
                <span></span>
                <label for="notelp">{{ __('No Telpon') }}</label>
                @error('notelp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                    <label for="images" class="drop-container">    
                        <div class="file">
                            <span class="drop-title">
                                Drop Files here
                            </span>
                            or
                            <input id="img" type="file"
                                class="input form-control @error('img') is-invalid @enderror" name="img"
                                value="{{ $user->img }}" required autocomplete="img">
                            <span></span>
                         
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </label>

                    
                    <div class="loginn">
                        <a href="/profile">
                            <button type="submit" class="btn btn-primary" value="Save">
                                Edit
                            </button>
                        </a>
                    </div>

        </form>
    </div>

</body>

</html>

