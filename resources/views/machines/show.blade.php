<x-layout titulo="Visualizar Maquina"> 

    <a href="{{ route('maquinas.index') }}">Listar</a>
    
    <h1>Visualizar maquina</h1>
    
    ID: {{ $maquina->id}} <br>
    Nome: {{ $maquina->nome}} <br>

</x-layout>