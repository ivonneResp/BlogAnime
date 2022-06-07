@extends('adminlte::page')

@section('title', 'Admin - Blog')

@section('content_header')
<h1>
    POSTS
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        C
    </button>
</h1>
@stop



<!-- modal -->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">mojon</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <div class="modal-body">
                <p>AQUI SE SUBE :)</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-outline-light">Guardar cambios</button>
            </div>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->