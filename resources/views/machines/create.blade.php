<x-layout titulo="Cadastrar Maquinas"> 

    <a href="{{ route('maquinas.index') }}">Listar</a>
    
    <h1>Cadastrar maquina</h1>
   
    <form action="{{ route('maquinas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name='nome' id='nome' placeholder="Nome da maquina">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
</x-layout>