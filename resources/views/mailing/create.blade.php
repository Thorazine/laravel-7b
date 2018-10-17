@extends('layouts.default')


@section('title', 'De titel van deze pagina')


@section('content')

	{!! Form::open(['route' => 'mailing.store', 'method' => 'POST']) !!}

		{!! Form::text('voornaam', '', ['class' => 'form-control']) !!}

	{!! Form::close() !!}

@stop


@section('script')

@stop
