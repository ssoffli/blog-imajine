@extends ('layouts.blog')

@section ('content')

<div class="container col-6 d-flex flex-column justify-content-around mt-3">
        {!! Html::linkRoute('posts.index', 'Listar todos los Posts', [], 
            ['class'=>'btn btn-light btn-lg border-dark rounded font-weight-bolder mb-4'])!!}

        {!! Html::linkRoute('posts.create', 'Crear un nuevo Post', [], 
            ['class'=>'btn btn-light btn-lg border-dark rounded font-weight-bolder'])!!}
</div>

@endsection