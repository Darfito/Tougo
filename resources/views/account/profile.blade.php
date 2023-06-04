@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href="css/profile/profile.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <div class="container">
        <div class="profile">
            <div class="profile-top">
                <img src="../Assets/Icons/evening-sky.jpg" alt="" />
            </div>

            <div class="profile-user-settings">
                <h1 class="profile-user-name">@username</h1>
                <h2 class="profile-bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </h2>
                <button class="profile-edit-btn"><a href="/profile/{{ $user -> id }}/edit">Edit Profile</a> </button>
            </div>
        </div>
        <div class="line-center">

            <div class="line">
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <img src="../Assets/Image/jabar.jpg" />
            <div class="content-text">
                <div class="categories">
                    <span>History - East Java</span>
                </div>
                <div class="title">
                    <h3>Nama Tempat Wisata</h3>
                </div>
                <div class="article">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                        tristique dignissim consectetur. Donec scelerisque sapien non
                        velit luctus tincidunt. Curabitur a gravida magna. In aliquam elit
                        at ex maximus euismod.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <img src="../Assets/Image/jatim.jpg" />
        <div class="content-text">
            <div class="categories">
                <span>History - West Java</span>
            </div>
            <div class="title">
                <h3>Nama Tempat Wisata</h3>
            </div>
            <div class="article">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                    tristique dignissim consectetur. Donec scelerisque sapien non
                    velit luctus tincidunt. Curabitur a gravida magna. In aliquam elit
                    at ex maximus euismod.
                </p>
            </div>
        </div>
    </div>
@endsection
