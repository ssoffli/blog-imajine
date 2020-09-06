@extends ('layouts.blog')

@section ('title', '| Leyendo Post')

@section('content')

    <div class="mt-3">
        <div class="col-md-8 offset-md-2 col-sm-10 border p-3 bg-light">
            <h2>{{ $post-> title }}</h2>
            <hr>
            <p>{{$post -> content}}</p>
            <hr>
            <p class="text-muted font-italic">Creado el {{ $post -> created_at}}</p>
            <hr>
            <div class="row d-flex justify-content-around">
                {!! Html::linkRoute('posts.edit', 'Editar Post', [$post -> id], 
                ['class'=>'btn btn-outline-warning'])!!}
                {!! Html::linkRoute('posts.index', 'Volver', [], 
                ['class'=>'btn btn-outline-secondary'])!!}
                <div>
                    {!!Form::open(['route'=>['posts.destroy', $post-> id], 'method'=> 'DELETE'])!!}
                    {!!Form::submit('Eliminar', ['class' => 'btn btn-outline-danger'])!!}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>

    </div>

@endsection