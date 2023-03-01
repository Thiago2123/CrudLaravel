<x-layout titulo="Listar Maquinas"> 

<div class="d-flex flex-row-reverse bd-highlight p-4">

    <a class="btn btn-success p-2 bd-highlight" href="{{ route('maquinas.create') }}">Cadastrar</a>
</div >

    <h1>Listar as maquinas</h1>
    @include('components/mensagem')
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th class="col-1">ID</th>
                <th class="col-9">Nome</th>
                <th class="col-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
                <tr>
                    <td>{{$machine->id}}</td>
                    <td>{{$machine->nome}}</td>
                    <td class="">
                        <a class="btn btn-primary" href="{{ route('maquinas.show', $machine->id)}}">Visualizar</a>
                        <a class="btn btn-warning" href="{{ route('maquinas.edit', $machine->id)}}">Editar</a>
                        <form style="display:contents" action="{{ route('maquinas.destroy', $machine->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>