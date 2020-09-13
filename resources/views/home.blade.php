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
                            <input type="text" class="form-control {{ $errors->has('title') ? ' has-error' : '' }}"
                                name='title'>
                            @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="questao">Dúvida</label>
                            <textarea style="resize: vertical"
                                class="form-control {{ $errors->has('body') ? ' has-error' : '' }}"
                                placeholder="Qual a sua dúvida?" name='body'> </textarea>
                            @if ($errors->has('body'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                            @endif
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
        @foreach($publication as $p)
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                    <div class="panel-heading">
                        <div class="col-sm-2">
                                <div class="media">
                                    <img class="mr-3" src="https://via.placeholder.com/90"
                                        alt="Generic placeholder image">
                                </div>
                        </div>
                        <div class="col-sm-10">
                            <h4>{{$p->title}}</h4>
                            <p>{{$p->body}}</p>
                        </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-10  col-sm-offset-2">
                                <form class="forms-sample" method="POST" action="{{ route('publicate.comment') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                            <label for="titulo">Responder</label>
                            <div class="form-check">
					<label>
                    <input type="radio" name="respOption"> <span class="label-text">Escrever mensagem</span>
                    </label>
                    <label>
                    <input type="radio" name="respOption"> <span class="label-text">Indicar repositório</span>
					</label>
				</div>
                            <textarea style="resize: vertical"
                                class="form-control {{ $errors->has('body') ? ' has-error' : '' }}"
                                placeholder="Me mostra um exemplo?" name='body'> </textarea>
                            @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection