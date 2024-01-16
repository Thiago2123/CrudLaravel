<?php

    namespace App\Http\Controllers\Api;

    use App\Models\Machine;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;


    class ApiMachinesController
    {
        public function index()
        {
            $machines = Machine::all();

            if($machines->count() > 0 ){
                $dados = [
                    'status' => 200,
                    'Maquinas' => $machines,
                ];
                
                return response()->json($dados, 200);
    
            }else{
                $dados = [
                    'status' => 404,
                    'Mensagem' => 'Sem  Maquinas',
                ];
                return response()->json($dados, 404);
            }

        }
        public function show($id)
        {
            $machine = Machine::find($id);
            if($machine){

                $dados = [
                    'status' => 200,
                    'Maquina' => $machine
                ];
                return response()->json($dados,200);

            }else{
                $dados = [
                    'status' => 404,
                    'mensagem' => "Maquina não encontrado com esse id"
                ];

                return response()->json($dados,404);

            }
        }

        
        public function store(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'nome' => 'required|string|max:20',
            ]);
    
            if($validator->fails()){
                $dados = [
                    'Status' => 422,
                    'Erros' => $validator->messages(),
                ];
                return response()->json($dados, 422);
            }else{
                $machine = Machine::create([
                    'nome' => $request->nome,
                ]);
    
                if($machine){
                    $dados = [
                        'status' => 202,
                        'mensagem' => "Maquina criada com sucesso"
                    ];
                    return response()->json($dados,200);
                }else{
    
                    $dados = [
                        'status' => 500,
                        'mensagem' => "Algo deu errado"
                    ];
                
    
                    return response()->json($dados,200);
                }
            }
        }

    

        public function update(Request $request, $id)
        {
            $validator = Validator::make($request->all(), [
                'nome' => 'required|string|max:20',
            ]);
    
            if($validator->fails()){
                $dados = [
                    'Status' => 422,
                    'Erros' => $validator->messages(),
                ];
                return response()->json($dados, 422);
            }else{
                $machine = Machine::find($id);
    
                
                if($machine){
                    $machine ->update([
                        'nome' => $request->nome,
                    ]);
                    $dados = [
                        'status' => 202,
                        'mensagem' => "Maquina editado com sucesso"
                    ];
                    return response()->json($dados,200);
                }else{
    
                    $dados = [
                        'status' => 404,
                        'mensagem' => "Maquina não encontrado com esse id"
                    ];
                
    
                    return response()->json($dados,404);
                }
            }
    
    
        }
        
        public function destroy($id)
        {
            $machine = Machine::find($id);
            
            if($machine){
    
                $machine->delete();
                $dados = [
                    'status' => 200,
                    'mensagem' => "Maquina deletado com sucesso"
                ];
            
    
                return response()->json($dados,404);
    
            }else{
                $dados = [
                    'status' => 404,
                    'mensagem' => "Maquina não encontrado com esse id"
                ];
            
    
                return response()->json($dados,404);
            }
        }
    }
?>