@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/profile/profile.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <div class="container">
        <div class="profile">
            <div class="profile-top">
                <img src={{ asset('storage/img_profile/' . $user->img) }} alt="" />
            </div>

            <div class="profile-user-settings">
                <div class="userbio">
                    <h1 class="profile-user-name">{{ $user->firstname }}</h1>
                    <h2 class="profile-bio">
                        {{ $user->email }}
                    </h2>
                </div>
                <div class="tombol">
                    <div class="tombol-edit">
                        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                    </div>
                    <div class="tombol-add">
                        <a href="/profile/create-story">
                            <span class="las la-plus">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="line-center">

            <div class="line">
            </div>
        </div>

        <!-- content -->

        @forelse ($data as $item)
        <div class="content">
            <img src="{{ asset('storage/img_stories/' . $item->img) }}" />
            <div class="content-text">
                <div class="categories">
                    <span>{{ $item ->destination ->province }}</span>
                </div>
                <div class="title">
                    <h3>{{ $item->name }}</h3>
                </div>
                <div class="article">
                    <p>
                        {{ $item->konten }}
                    </p>
                </div>
            </div>
        </div>
        @empty
        <h1>There is no story between us yet! Tell us your story!</h1>
        @endforelse

    </div>

@endsection
