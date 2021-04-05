<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulário para cadastro de despesa') }}
        </h2>
    </x-slot>

    
<!--validacao dos erros-->
@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-yellow-700 bg-yellow-100 border border-yellow-300">{{ $error }}</li>
        @endforeach
    </ul>
@endif
<br>


<!--formulario-->
<div class="row d-flex justify-content-center">
<form action="{{ route('despesas.store') }}" method="post" enctype="multipart/form-data">
@csrf 

    <div class="form-group row">
        <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>

        <div class="col-sm-10">
       
            <select name="idusuario" id="idusuario" class="form-control select-search">
            @foreach ($user as $u)
                <option value="{{ $u->id }}"> {{ $u->name}} </option> 
            @endforeach
            </select>
        </div>
    </div>
    
    <div class="form-group row">
       <label for="data" class="col-sm-2 col-form-label">Data</label>
        <div class="col-sm-10">
        <input type="date" name="data" id="data" placeholder="Data"value="{{old('data')}}">
        </div>
    </div>
    
    <div class="form-group row">
       <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-10">
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{old('descricao')}}" class="form-control">
        </div>
    </div>

    <div class="form-group row">
       <label for="valor" class="col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-10">
        <input type="number" name="valor" id="valor" step="0.01"  placeholder="R$ 0.00" value="{{old('valor')}}" class="form-control" > 
        </div>
    </div>
  
    <div class="form-group row">
       <label for="imagem" class="col-sm-2 col-form-label">Imagem</label>
        <div class="col-sm-10">
        <input type="file" name="imagem", id="imagem">
     </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>

</form>
</div>
</x-app-layout>

