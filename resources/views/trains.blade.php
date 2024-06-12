@extends('layouts.app');

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione_Partenza</th>
            <th scope="col">Stazione_Arrivo</th>
            <th scope="col">Orario_Partenza</th>
            <th scope="col">Orario_Arrivo</th>
            <th scope="col">Codice_Treno</th>
            <th scope="col">Numero_carrozze</th>
            <th scope="col">In_orario</th>
            <th scope="col">Cancellato</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
              <td>{{ $train->id }}</td>
              <td>{{ $train->Azienda }}</td>
              <td>{{ $train->Stazione_Arrivo }}</td>
              <td>{{ $train->Stazione_Arrivo }}</td>
              <td>{{ $train->Orario_Partenza }}</td>
              <td>{{ $train->Orario_Arrivo }}</td>
              <td>{{ $train->Codice_Treno }}</td>
              <td>{{ $train->Numero_carrozze }}</td>
              <td>{{ $train->In_orario }}</td>
              <td>{{ $train->Cancellato }}</td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection