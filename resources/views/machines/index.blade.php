<x-layout titulo="Listar Maquinas"> 
    
    <a href="{{ route('maquinas.create') }}">Cadastrar</a>

    <h1>Listar as maquinas</h1>
    @include('components/mensagem')
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($machines as $machine)
                <tr>
                    <td>{{$machine->id}}</td>
                    <td>{{$machine->nome}}</td>
                    <td style="display: flex">
                        <button type="button"><a href="{{ route('maquinas.show', $machine->id)}}">Visualizar</a></button>
                    </td>
                    <td>
                        <button type="button"><a href="{{ route('maquinas.edit', $machine->id)}}">Editar</a></button>
                    </td>
                    <td>
                        <form action="{{ route('maquinas.destroy', $machine->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>