@extends('welcome')

@section('contenent-main')
        <ul>
            @foreach ($movies as $item)

                <li>
                    <h3>Titolo: <span> {{ $item -> title }} </span> </h3>
                    <p>Data pubblicazione : <span> {{ $item -> date }} </span> </p>
                    <p>Voto : <span> {{ $item -> vote }} </span> </p>
                </li>
                
            @endforeach
        </ul>
    
@endsection