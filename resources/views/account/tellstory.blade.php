<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href={{ asset("css/profile/createst.css") }} />
    <title>Tell Story</title>
</head>

<body>
    <div class="main-content">
        <main>
            <div class="center">
                <h1>Create</h1>
                <form method="POST" action="{{ url('/profile/store-story') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="txt_field">
                        <input id="name" type="name"
                            class="input form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name">
                        <span></span>
                        <label>Stories Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="txt_field">
                        <select class="form_control" name="destination_id" id="destination_id">
                            <option selected="true" disabled="disabled">Select Province</option>
                            @foreach ($data as $item)
                                <option value='{{ $item->id }}'>{{ $item->province }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="txt_field">
                        <input id="city" type="city"
                            class="input form-control @error('city') is-invalid @enderror" name="city"
                            value="{{ old('city') }}" required autocomplete="city">
                        <span></span>
                        <label>City</label>
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="txt_field">
                        <input id="konten" type="konten"
                            class="input form-control @error('konten') is-invalid @enderror" name="konten"
                            value="{{ old('konten') }}" required autocomplete="konten">
                        <span></span>
                        <label>Tell Your Story</label>
                        @error('konten')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- input gambar --}}
                    <label for="images" class="drop-container">
                        <div class="file">
                            <span class="drop-title">
                                Drop Files here
                            </span>
                            or
                            <input id="img" type="file"
                                class="input form-control @error('img') is-invalid @enderror" name="img"
                                value="{{ old('img') }}" required autocomplete="img">
                            <span></span>
                            @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </label>


                    <div class="loginn">
                        <a>
                            <button type="submit" class="btn btn-primary" value="Save">
                                {{ __('Add') }}
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
