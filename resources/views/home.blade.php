@extends('layouts.app')

@section('content')
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
    <div class="row container-feed">
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
                                    <img class="mr-3" src="https://via.placeholder.com/90"
                                        alt="Generic placeholder image">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <h4>{{$p->title}}</h4>
                                <p>{{$p->body}}</p>
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
                                        <div class="row containerRepo" style="display:block">
                                                <div class="col-sm-3" id="nomeUG"></div>
                                                <div class="col-sm-9" id="repoUG"></div>
                                            </div>
                                        <form class="forms-sample" method="POST"
                                            action="{{ route('publicate.comment') }}">
                                            {{ csrf_field() }}
                                            <textarea id="texto" style="resize: vertical"
                                                class="form-control"
                                                placeholder="Me mostra um exemplo?" name='body'> </textarea>
                                            <input type="hidden" name="body2" id="hiddenComment" >
                                            <div class="form-group">
                                                <button type="submit" class="form-control">Enviar</button>
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
@endsection