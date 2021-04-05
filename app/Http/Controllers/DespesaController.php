<?php

namespace App\Http\Controllers;
use App\Models\Despesa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateDespesa;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Storage;

#rota joga pra controller, controller para a view

class DespesaController extends Controller
{
    public function index (){
        $despesa = Despesa::paginate(10);        
        return view('admin.despesas.index', compact('despesa'));
    }

    public function create (){        
        $user = User::all();
        return view('admin.despesas.create', compact('user'));
    }

    public function store (StoreUpdateDespesa $request){             
        
        $data = $request->all();
      

        if ($request->imagem->isValid()) {
            
            $nameFile =Str::of($request->descricao)->slug('-'). '.' .$request->imagem->getClientOriginalExtension();
           
            $imagem = $request->imagem->storeAs('despesas', $nameFile);
            $data['imagem'] = $imagem;
        }
        
        
        Despesa::create($data);
        return redirect()
                        ->route('despesas.index')
                        ->with('message','Despesa criada com sucesso');
    }

    public function show ($id){        
        
        $despesa = Despesa::find($id);
       
        if (!$despesa){
            return redirect()->route ('despesas.index');
        }
        return view('admin.despesas.show', compact('despesa'));
    }

    public function destroy ($id){        
        $despesa = Despesa::find($id);
        if (!$despesa){
            return redirect()->route ('despesas.index');
            
            
        }
        if (Storage::exists($despesa->imagem))
            Storage::delete($despesa->imagem);
            
        $despesa->delete();
        return redirect()
                        ->route ('despesas.index')
                        ->with('message','Despesa deletada com sucesso');
    }

    public function edit ($id){        
        $user = User::all();
        $despesa = Despesa::find($id);
        if (!$despesa){
            return redirect()->back();
        }
        return view('admin.despesas.edit', compact('despesa', 'user'));
    }
    
    public function update (StoreUpdateDespesa $request, $id){        
      
        $despesa = Despesa::find($id);       
        if (!$despesa){
            return redirect()->back();
        }
          
        $data = $request->all();
        if ($request->imagem && $request->imagem->isValid()){
            if (Storage::exists($despesa->imagem))
                Storage::delete($despesa->imagem);
            
                
                $nameFile =Str::of($request->descricao)->slug('-'). '.' .$request->imagem->getClientOriginalExtension();
            
                $imagem = $request->imagem->storeAs('despesas', $nameFile);
                $data['imagem'] = $imagem;
        }

        $despesa->update($data);
        return redirect()
                        ->route ('despesas.index')
                        ->with('message','Despesa atualizado com sucesso');
        
    }   

    public function search(Request $request){
        $filtros = $request->except('_token');

        $despesa = Despesa::where('descricao','LIKE', "%{$request->search}%")
                            ->orWhere ('data','LIKE', "%{$request->search}%")
                            ->orWhere ('idusuario','LIKE', "%{$request->search}%")
                            ->orWhere ('data','LIKE', "%{$request->search}%")
                            ->paginate();
        return view('admin.despesas.index', compact('despesa','filtros'));
    }
}
