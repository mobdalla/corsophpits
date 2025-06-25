@extends('app')
@section('content')
        <h2>Prodotti</h2>
        <table>
            <thead>
                <th>nome</th>
                <th>categoria</th>
                <th>origine</th>
                <th>Prezzo</th>
            </thead>
            <tbody>
                @foreach($prodotti as $p)
                <tr>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->categoria }}</td>
                    <td>{{ $p->origine }}</td>
                    <td>{{ $p->prezzo_kh }}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
@endsection