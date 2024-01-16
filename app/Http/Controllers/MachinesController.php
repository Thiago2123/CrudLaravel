<?php

    namespace App\Http\Controllers;

    use App\Models\Machine;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class MachinesController
    {
        public function index()
        {
            // $maquinas = DB::select('SELECT id, nome FROM machines');
            // dd($maquinas);
            $maquinas = Machine::all();

            // dd é um vardump diferente
            //dd($maquinas);
            return view('machines.index')->with('machines', $maquinas);
        }
        public function show(Machine $maquina)
        {
            // dd($maquina);
            return view('machines.show')->with('maquina', $maquina);
        }

        public function create()
        {
            return view('machines.create');
        }

        public function store(Request $request)
        {
            /*  Exemplo doque poderia ser feito para salvar 
                $machines = new Machine();
                $machines->nome =$request->nome;
                $machines->save();
            */
            //dd($request->all);
            
            /*exemplo para gravar apenas o campo nome no banco, 
                caso eu queria colocar mais campos posso colocar ['nome'],['telefone']...*/
            Machine::create($request->only(['nome']));
            
            return redirect('maquinas')->with('sucesso', 'Maquina cadastrada com sucesso');
        }

        public function edit(Machine $maquina)
        {
            return view('machines.edit')->with('maquina', $maquina);
        }

        public function update(Request $request, Machine $maquina)
        {
           $maquina->fill($request->all())->save();

            return redirect()->route('maquinas.index')->with('sucesso', 'Maquina editada com sucesso');
        }  
        
        public function destroy(Machine $maquina)
        {
            $maquina->delete();
            return redirect()->route('maquinas.index')->with('sucesso', 'Maquina deletada com sucesso');
        }
    }
?>