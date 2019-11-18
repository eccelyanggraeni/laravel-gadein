@extends('layout.mainlayout')

@section('content')

<div class="jumbotron" style="background-image: url({{ asset('/img/menu.png') }}); width: 100%; height: 680px;">
    <h4 style="color: #e9ecef;">Profil</h4>
    <div class="dropdown-divider" style="border: 2px solid white;"></div><br>
    <div class="row">
        <div class="col-sm-2">
            <div style="background-color: #e9ecef; width: 200px; height: 200px; border-radius: 10px; text-align: center;"><br>
                <img src="{{ asset('/img/user.png') }}" width="75%" height="75%" style="align-content: center;" alt="">
            </div>
        </div>
        <div class="col-sm-10">
            <div style="background-color: #e9ecef; width: auto; height: 200px; border-radius: 10px;"></div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm">
            <div style="background-color:#e9ecef; width: auto; height: 200px; border-radius: 10px;"></div>
        </div>
    </div>
</div>
@endsection