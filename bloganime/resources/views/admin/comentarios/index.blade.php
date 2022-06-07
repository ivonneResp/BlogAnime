@extends('layouts.commentadmin')
@extends('adminlte::page')

@section('title', 'Admin - COMENTARIOS')


@section('content_header')

<h1>
    Comentarios
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Comentarios</h3>
                </div>

                <!-- Post 1 -->
                    <div class="card-body">
                    <table id="posts" class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>Categoría</th>
                            <th>Titulo del post</th>
                            <th>Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($posthome as $post)
                        <tr>
                            <td><FONT size=2 COLOR=#545454>{{$post->category->name}}</font></td>
                            <td><FONT size=2 COLOR=#545454>{{$post->title}}</font></td>
                            <td>
                                <button class="btn btn-info fw-bolder fst-italic" data-toggle="modal" data-target="#exampleModal-{{$post}}" ><font size=2>Ver</button></font>
                            </td>
                        </tr>

                    @include('admin.editarComments')
                @endforeach
                    </tbody>
                    </table>
                    </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

@stop

@section('js')
<script>
$(document).ready(function() {
    $('#comments').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop