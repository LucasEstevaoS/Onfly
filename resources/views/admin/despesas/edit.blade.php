<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Editar despesa : <strong>{{ $despesa->descricao }}</strong>
        </h2>
    </x-slot>



<!--validacao dos erros-->
@if($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
@endif

<br>
<div class="row d-flex justify-content-center">
<!--formulario-->
<form action=" {{ route('despesa.update', $despesa->iddespesa) }} " method="post" enctype="multipart/form-data">
    @csrf 
    @method('put')

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
        <input type="date" name="data" id="data" placeholder="Data" value="{{$despesa->data}}" class="form-control">
   
        </div>
    </div>

    <div class="form-group row">
       <label for="descricao" class="col-sm-2 col-form-label">Descrição</label>
        <div class="col-sm-10">
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$despesa->descricao}}" class="form-control">
        </div>
    </div>

    <div class="form-group row">
       <label for="valor" class="col-sm-2 col-form-label">Valor</label>
        <div class="col-sm-10">
        <input type="number" name="valor" id="valor" placeholder="0.00" value="{{$despesa->valor}}" class="form-control">
        </div>
    </div>

    <div class="form-group row">
       <label for="imagem" class="col-sm-2 col-form-label">Imagem</label>
        <div class="col-sm-10">
        <input type="file" name="imagem", id="imagem" value="{{$despesa->imagem}}" class="form-control">
     </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
</x-app-layout>