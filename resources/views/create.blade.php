@extends ('layouts.blog')

@section ('title', '| Crear Post')

@section ('content')

    <div class="container bg-light h-100">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <h2 class="text-center">Crear un nuevo Post</h2>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=> '', 'class'=>'justify-content-center']) !!}
                
                {{Form::label('title', 'Titulo del post:')}}
                {{Form::text('title', null, ['class' => 'form-control mb-3', 
                'placeholder' => 'Ingrese el titulo del post',
                'required' => '',
                'maxlength' => '255'
                ])}}
                
                {{Form::label('content', 'Contenido del post:')}}
                {{Form::textarea('content', null, ['class' => 'form-control mb-3', 
                'placeholder' => 'Escribe el contenido del post',
                'required' => ''
                ])}}

                {{Form::submit('Guardar Post',['class' => 'btn btn-outline-success btn-block mb-1'])}}

            {!! Form::close() !!}
        </div>
        <div class="row d-flex justify-content-around">
            {!! Html::linkRoute('posts.index', 'Volver', [], 
                ['class'=>'btn btn-outline-secondary'])!!}
        </div>
    </div>

@endsection