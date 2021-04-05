<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Detalhes da Despesa :  {{ $despesa->descricao}}
        </h2>
    </x-slot>

 <div class="row d-flex justify-content-center">
    <table class="min-w-full">

        <thead>        
            <tr>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">ID da despesa</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Descrição</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Data</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Valor</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">ID Usuario</th>
                <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Imagem</th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm ">{{ $despesa->iddespesa }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm ">{{ $despesa->descricao }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm ">{{ date('d-m-Y', strtotime($despesa->data)) }}</td>
                
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm ">{{ 'R$ '.number_format($despesa->valor, 2, ',', '.') }} </td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm ">{{ $despesa->idusuario }}</td> 
            
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm "> <img src="{{ url("storage/{$despesa->imagem}") }}" style="max-width:50px;"> </td>
                
            </tr>
        </tbody>

    </table>
</div>
<br>
<br>
<div class="row d-flex justify-content-center">
    <form action="{{ route('despesa.destroy', $despesa->iddespesa) }}" method="post" >
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-danger" > Deletar despesa </button>

    </form>

</div>
</x-app-layout>

