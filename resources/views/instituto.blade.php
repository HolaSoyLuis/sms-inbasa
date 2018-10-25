@extends('principal')

@section('content')
    <div class="row" style="margin-top:50px; margin-bottom:50px;">
        <div class="col-md-6 col-md-offset-3">
            <div class="profile-tabs">
                <div class="nav-align-center">
                    <ul class="nav nav-pills nav-pills-icons" role="tablist">
                        <li class="active">
                            <a href="#descripcion" role="tab" data-toggle="tab">
                                <i class="material-icons">account_balance</i>
                                Descripción
                            </a>
                        </li>
                        <li>
                            <a href="#mision" role="tab" data-toggle="tab">
                                <i class="material-icons">pan_tool</i>
                                Misión
                            </a>
                        </li>
                        <li>
                            <a href="#vision" role="tab" data-toggle="tab">
                                <i class="material-icons">accessibility</i>
                                Visión
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Fin Tabs -->
        </div>
    </div>
    {{-- Contenido de los tabs --}}
    <div class="tab-content">
        <div class="tab-pane active" id="descripcion">
            <div class="row">
                <div class="col-xs-12">
                    <p class="description-p">El Instituto Básico por Cooperativa tiene como finalidad contribuir a la formación integral de los guatemaltecos, en las áreas y niveles regidos y autorizados por el Ministerio de Educación.</p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="mision">
            <div class="row">
                <div class="col-xs-12">
                    <p class="description-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores debitis saepe, voluptas qui incidunt voluptatem illum, cumque corporis facere quibusdam ad neque officia omnis unde odio non fugiat, voluptatum odit.
                    Nam quasi harum nesciunt reprehenderit similique cupiditate quis quae, aut beatae quia asperiores hic fugit voluptates, doloremque magnam saepe dolor quos voluptate aliquid pariatur. Ex et excepturi incidunt molestiae laborum.
                    Esse debitis pariatur labore corrupti tenetur, harum necessitatibus? Repellendus nemo ducimus fuga neque ex deserunt tempora modi ratione mollitia delectus dignissimos pariatur perferendis et illo cumque, dolorem voluptatibus sequi enim!
                    Quasi dolorum veniam dicta quam nobis eius ducimus ullam aperiam earum omnis, et sapiente nisi? Iure veritatis, aut quae, minima expedita necessitatibus sed accusantium voluptatem obcaecati dolorem blanditiis sint! Non!</p>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="vision">
            <div class="row">
                <div class="col-xs-12">
                    <p class="description-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error modi explicabo libero quidem officiis perferendis tempora eaque temporibus, consectetur dolores eum culpa recusandae cum, quas voluptatum sint atque voluptatem architecto.
                    Aspernatur magnam praesentium magni mollitia modi tempora ipsam, corrupti eos, sint assumenda laboriosam repellendus ducimus! Nobis doloribus amet aliquam laudantium esse vitae, at pariatur, ex aperiam autem quisquam hic deleniti!
                    Architecto natus mollitia excepturi dolor asperiores a consequatur omnis saepe ratione, distinctio eos atque suscipit esse minima ea sapiente veritatis necessitatibus totam recusandae provident dolore corporis eaque maiores? Eius, sint.
                    Quam dolorem modi dolores accusamus! Aut error ex inventore. Vero, aperiam? Eum aut fugiat quisquam nemo sequi hic sint beatae ex. Dicta omnis ipsum, quam eveniet assumenda vitae doloribus nostrum?</p>
                </div>
            </div>
        </div>
    </div>
@endsection