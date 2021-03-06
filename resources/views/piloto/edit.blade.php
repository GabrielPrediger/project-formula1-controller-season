@extends('adminlte::page')

@section('content')
    <h3>Editando Pilotos</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['piloto.update', 'id'=>$piloto->id], 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $piloto->nome, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('numero', 'Numero:') !!}
        {!! Form::number('numero', $piloto->numero, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('vitorias', 'Vitorias:') !!}
        {!! Form::number('vitorias', $piloto->vitorias, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
        {!! Form::date('dt_nascimento', $piloto->dt_nascimento, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('inicio_atividades', 'Inicio das atividades:') !!}
        {!! Form::date('inicio_atividades', $piloto->inicio_atividades, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
			{!! Form::label('pais_id', 'Pais:') !!}
			{!! Form::select('pais_id', 
							 App\Models\Pais::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
			{!! Form::label('equipe_id', 'Equipe:') !!}
			{!! Form::select('equipe_id', 
							 App\Models\Equipe::orderBy('nome')->pluck('nome', 'id')->toArray(),
							 null, ['class'=>'form-control', 'required']) !!}
	</div>
    <div class="form-group">
        {!! Form::submit('Editar Piloto', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop