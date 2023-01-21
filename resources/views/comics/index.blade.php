@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h1 class="text-center">Lista fumetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipologia</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->price }}€</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">Premi qui</a> </td>
                        <td><a href="{{ route('comics.edit', $comic->id) }}"class="btn btn-success">Modica</a></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"class="btn btn-dark">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <a href="{{ route('comics.create') }}">Premi qui</a>

            </tbody>
        </table>
    </div>
@endsection
