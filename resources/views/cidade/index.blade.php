@extends('layouts.default')

@section('content')
	<h1>Cidade</h1>
	<table class="table table-stripe table-bordered table-hover">
		<thead>
			<th>Nome</th>
			<th>Ações</th>
		</thead>

		<tbody>
			@foreach($cidades as $cidade)
				<tr>
					<td>{{ $cidade->nome }}</td>
					<td>
						<a href="{{ route('cidade.edit', ['id'=>$cidade->id]) }}" class="btn-sm btn-success">Editar</a>
						<a href="#" onclick="return ConfirmaExclusao({{$cidade->id}})"  class="btn-sm btn-danger">Remover</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	

	{{ $cidades->links("pagination::Bootstrap-4") }}

	<a href="{{ route('cidade.create', []) }}" class="btn btn-info">Adicionar</a>
@stop

@section('table-delete')
"cidade"
@endsection

