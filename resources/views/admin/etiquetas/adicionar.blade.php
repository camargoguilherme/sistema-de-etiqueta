@extends('layout.default')

@section('titulo', 'Etiquetas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Produto</h3>
        <div class="row">
            <form class="" action="{{  }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                @include('')

                <button class="waves-effect waves-light btn green">Salvar</button>
                <button class="waves-effect waves-light btn red" href="{{  }}" >Cancelar</button>

            </form>
        </div>
    </div>
@endsection

