@extends('adminlte::page')

@section('content')
    <h3>Editando Pessoas</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => ['pessoas.update', 'id'=>$pessoas->id] 'method'=>'put']) !!}
    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('idade', 'Idade:') !!}
        {!! Form::number('idade', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('dt_nascimento', 'Data da Nascimento:') !!}
        {!! Form::date('dt_nascimento', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar Entrada', ['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop