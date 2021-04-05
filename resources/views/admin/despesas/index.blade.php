<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de despesas') }}
        </h2>
    </x-slot>

<!--secao flash para falar que exclui a despesa-->
@if (session('message'))
    <div>
        {{session('message')}}
    </div>
@endif

<div class="overflow-hidden shadow-sm sm:rounded-lg ">
    <div class="p-6  border-b border-gray-200">
    <a href="{{ route('despesas.create')}}"> <button class="btn btn-primary">Criar nova despesa</button></a>
       
        <form action="{{ route('despesas.search') }}" method="post">
            <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">          
                @csrf
                <div>            
                    <input type="text" name="search">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
<!--<div> {{Auth::user()->id}}</div>-->

<div class="row d-flex justify-content-center">
    <table class="min-w-full">

        <thead>        
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Descrição</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>

                
            </tr>
        </thead>
   
        <tbody>
            @foreach($despesa as $despesas)
          
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm ">{{ $despesas->descricao }}</td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm text-right">
                            <a href="{{ route('despesa.show', $despesas -> iddespesa)}}"> <button type="button" class="btn btn-success">Visualizar</button></a>
                        </td>   
                        
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm text-right">
                            <a href="{{ route('despesa.edit', $despesas -> iddespesa)}}"> <button type="button" class="btn btn-warning">Editar</button> </a>
                        </td>
                        
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm text-right">   
                            <form action="{{ route('despesa.destroy', $despesas->iddespesa) }}" method="post" >
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" > Excluir </button>

                            </form>


                        </td>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



<hr>
<!--se existir a variavel filtro vou utilizar appends --> 
@if (isset($filtros))
    {{ $despesa->appends($filtros)->links() }} 
<!--se nao faco a paginacao sem o appends --> 
@else
    {{$despesa->links()}}
@endif


</x-app-layout>

