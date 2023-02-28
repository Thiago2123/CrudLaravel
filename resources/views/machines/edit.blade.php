<x-layout titulo="Editar Maquina"> 

    <a href="{{ route('maquinas.index') }}">Listar</a>
    
    <h1>Editar maquina</h1>

    <form action="{{ route('maquinas.update', $maquina->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome</label>
        <input type="text" name='nome' id='nome' placeholder="Nome da maquina" value="{{ $maquina->nome }}">
        <br><br>
        <button type="submit">Editar</button>
    </form>
</x-layout>