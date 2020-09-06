@extends ('layouts.blog')

@section ('title', '| Editar Post')

@section ('content')

    <div class="container bg-light">
        <div class="col-md-6 offset-md-3 col-sm-12">
            <h2 class="text-center">Edita el Post</h2>
            <hr>
            {!! Form::model($post,['route' => ['posts.update', $post-> id], 'data-parsley-validate'=> '', 'class'=>'justify-content-center', 'method'=>'PUT']) !!}
                
                {{Form::label('title', 'Titulo del post:')}}
                {{Form::text('title', null, ['class' => 'form-control mb-3', 
                'required' => '',
                'maxlength' => '255'
                ])}}
                
                {{Form::label('content', 'Contenido del post:')}}
                {{Form::textarea('content', null, ['class' => 'form-control mb-3', 
                'required' => ''
                ])}}

                {{Form::submit('Guardar cambios',['class' => 'btn btn-outline-success btn-block mb-1'])}}
            {!! Form::close() !!}
        </div>
        <div class="row d-flex justify-content-center">
            {!! Html::linkRoute('posts.index', 'Cancelar', [], 
                ['class'=>'btn btn-outline-danger'])!!}
        </div>
    </div>

@endsection