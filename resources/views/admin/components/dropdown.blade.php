<div class="dropdown d-inline mr-2">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Ações
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="{{ $routeEdit }}"><i class="fas fa-pen"></i> Editar</a>

        <form action="{{ $routeDelete }}" id="fa-{{ $keyRoute }}" method="post">
            @csrf
            @method('DELETE')
        </form>
        <a class="dropdown-item" href="javascript:;" onclick="$('#fa-{{ $keyRoute }}').submit()">
            <i class="fas fa-trash"></i>
            Excluir
        </a>
    </div>
</div>
