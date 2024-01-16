@extends('layouts.app')

@section('content')
    <h1>Treni</h1>
    <ul>
        @foreach ($trains as $train )
        <li>{{ $train->azienda }} , 
            {{ $train->stazione_di_partenza }} , 
            {{ $train->stazione_di_arrivo }} , 
            {{ $train->stazione_di_partenza }} ,
            {{ $train->orario_di_partenza }} ,
            {{ $train->orario_di_arrivo }} ,
            {{ $train->codice_treno }} ,
            {{ $train->numero_carrozze }} ,
            {{ $train->cancellato }}
        </li>
        @endforeach
        
    </ul>
@endsection