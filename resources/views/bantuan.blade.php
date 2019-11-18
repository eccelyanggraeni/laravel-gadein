@extends('layout.mainlayout')

@section('content')

<!-- Page Content -->
<div class="jumbotron jumbotron bg-cover" style="background-image: url({{ asset('/img/menu.png') }}); width: 100%; height: 580px;">
    <h4 style="color: #e9ecef;">Bantuan</h4>
    <div class="dropdown-divider" style="border: 2px solid white;"></div><br>
    <div id="accordion">
        <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne" style="color:#198C09;">
                    <strong>List 1</strong>
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam maiores cumque accusamus, optio
                    dolorem possimus nihil nisi assumenda? Eaque, nostrum voluptas! Perspiciatis iure labore ratione
                    qui beatae placeat repellendus cupiditate?
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo" style="color:#198C09;">
                    <strong>List 2</strong>
                </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque sequi omnis a impedit maiores
                    dolorem magni? Repellat magni maiores dicta consequuntur repellendus aspernatur numquam? Aut
                    blanditiis vero pariatur doloribus nemo.
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree" style="color:#198C09;">
                    <strong>List 3</strong>
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa omnis tempore assumenda
                    dolor! Illo, ex? Ullam veniam qui temporibus. Nobis, officiis cupiditate illum pariatur
                    voluptatibus consequatur harum beatae quae!
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour" style="color:#198C09;">
                    <strong>List 4</strong>
                </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi culpa omnis tempore assumenda
                    dolor! Illo, ex? Ullam veniam qui temporibus. Nobis, officiis cupiditate illum pariatur
                    voluptatibus consequatur harum beatae quae!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection