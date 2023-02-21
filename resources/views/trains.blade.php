@extends('layouts.app')
@section('title', 'Laravel | Train')
     
@section('content')

    @foreach ($trains as $train )
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-header">
                        <strong>Info Treno</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Azienda:</strong>{{$train['azienda']}}</li>
                        <li class="list-group-item"><strong>Stazione di partenza:</strong>{{$train['stazione_partenza']}}</li>
                        <li class="list-group-item"><strong>Stazione di arrivo:</strong>{{$train['stazione_arrivo']}}</li>
                        <li class="list-group-item"><strong>Orario di partenza:</strong>{{$train['orario_partenza']}}</li>
                        <li class="list-group-item"><strong>Orario di arrivo:</strong>{{$train['orario_arrivo']}}</li>
                        <li class="list-group-item"><strong>Codice treno:</strong>{{$train['codice_treno']}}</li>
                        <li class="list-group-item"><strong>Numero carrozze:</strong>{{$train['numero_carrozze']}}</li>
                        <li class="list-group-item"><strong>In orario:</strong>{{$train['in_orario']}}</li>
                        <li class="list-group-item"><strong>Stato:</strong>{{$train['cancellato']}}</li>
                    </ul>
                </div>    
            </div>
        </div>
    </div>
    @endforeach
       
@endsection
