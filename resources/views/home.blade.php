@extends('layouts.app')

@section('content')

@if (session('status'))
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{ session('status') }}!</strong> {{ session('message') }}
</div>
@endif

<div class="container">
    <!-- Bloco 1 -->
    <div class="row">
        <!-- AVATAR do Usuário -->
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
        <!-- Fim AVATAR do Usuário -->

        <!-- Formulário pra enviar a dúvida -->
        <div class="col-md-8">
            <div class="panel panel-default">
                <!-- Título -->
                <div class="panel-heading">Pergunte algo a comunidade</div>
                <!-- Corpo do formulário -->
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
                </div><!-- Fim Corpo do formulário -->
            </div>
        </div>
    </div><!-- Fim Bloco 1 -->

    <!-- Bloco 2 -->
    <div class="row">
        <!-- Exibindo perguntas da comunidade -->
        @foreach($publication as $v => $p)
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default">
                <!-- Painel das perguntas -->
                <div class="panel-body">
                    <!-- Pergunta -->
                    <div class="row">
                        <div class="panel-heading">
                            <div class="col-sm-2">
                                <div class="media">
                                    <img class="mr-3" src="https://via.placeholder.com/90">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>{{$p['title']}}</h4>
                                <p>{{$p['body']}}</p>
                                @foreach($p['comments'] as $c)
                            <div class="row">
                                <div class="panel-heading">
                                    <div class="col-sm-2">
                                        <div class="media">
                                            <img class="mr-3" src="https://via.placeholder.com/70">
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        {{$c->body}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div><!-- Fim pergunta -->
                    <!-- Resposta -->
                    <div class="accordion">
                        <div class="accordion-group">
                            <div class="panel-body collapse" id="acc{{$v}}">
                                <div class="row">
                                    <div class="col-sm-10  col-sm-offset-2">
                                        <div class="form-group" style="display:flex">
                                            <input id="repo{{$v}}" type="text" class="form-control"
                                                placeholder="nome de usuário do GitHub">
                                                <span class="label-text btn btn-primary"
                                                onclick="searchRepo({{$v}})">Buscar</span>
                                        </div>
                                        <div class="row containerRepo{{$v}}" style="display:block">
                                                <div class="col-sm-3" id="nomeUG" ></div>
                                                <div class="col-sm-9" id="repoUG"></div>
                                            </div>
                                        <form class="forms-sample" method="POST"
                                            action="{{ route('publicate.comment') }}">
                                            {{ csrf_field() }}
                                            <textarea style="resize: vertical"
                                                class="form-control"
                                                placeholder="Me mostra um exemplo?" name='body'> </textarea>
                                            <input type="hidden" name="body2" id="hiddenComment{{$v}}" >
                                            <input type="hidden" name="publication_id" value="{{$p['id']}}">
                                            <div class="form-group m-3">
                                                <button class="form-control">Enviar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-heading area" style="text-align:center">
                            <a class="accordion-toggle" data-toggle="collapse" href=
                            "#acc{{$v}}"><label for="titulo">Responder</label></a>
                        </div>
                        </div>
                    </div><!-- Fim Resposta -->
                </div>
            </div>
        </div><!-- Fim Exibindo perguntas da comunidade -->
        @endforeach
    </div><!-- Fim Bloco 2 -->
</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form class="form-horizontal" method="GET" action="{{ route('update.user') }}">
                            {{ csrf_field() }}
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Perfil de usuário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                        value="{{ auth()->user()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="{{ auth()->user()->email }}" disabled>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Atualizar dados</button>
                    </div>
                </div>
            </div>
            
            </form>
        </div>
@endsection