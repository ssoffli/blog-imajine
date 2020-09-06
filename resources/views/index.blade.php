@extends ('layouts.blog')

@section ('title', '| Listado de Posts')

@section ('content')

    <div class="bg-light container">
        <div class="row">
            <div class="col-md-10 text-center mt-2">
                <h2>Listado de posts</h2>
            </div>
            <div class="col-md-2 mt-3">
                <a href="{{route('posts.create')}}" class="btn btn-outline-success btn-block">Crear nuevo Post</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <table class="table">
                <thead>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th>{{$post -> id}}</th>
                            <td>{{$post -> title}}</td>
                            <td>{{substr($post -> content, 0,70)}} ...</td>
                            <td class="container row d-flex justify-content-around">
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-outline-primary btn-sm">V</a> 
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-warning btn-sm">E</a> 
                                {!!Form::open(['route'=>['posts.destroy', $post-> id], 'method'=> 'DELETE'])!!}
                                {!!Form::submit('X', ['class' => 'btn btn-outline-danger btn-sm'])!!}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection