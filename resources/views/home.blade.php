@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="media">
                        <img class="mr-3" src="https://via.placeholder.com/135" alt="Generic placeholder image">
                    </div>
                </div>
                <div class="panel-body">
                    {{auth()->user()->name}}

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Pergunte algo a comunidade</div>

                <div class="panel-body">

                    <form class="forms-sample" method="POST" action="{{ route('publicate.question') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" name='title'>
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="questao">Dúvida</label>
                            <textarea class="form-control" placeholder="Qual a sua dúvida?" name='body'> </textarea>
                            <small class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row container-feed">

    </div>
</div>
@endsection