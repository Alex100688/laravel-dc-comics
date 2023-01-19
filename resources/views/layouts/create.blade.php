@extends('layouts.main')
@section('page-content')
    <div class="container">
        <h2>Aggiungi Fumetti</h2>
        <form action="{{ route('comics.store') }}" method="POST">@csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="tile">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <button type="submit" class="btn btn-primary">Premi qui</button>
            <button type="reset" class="btn btn-secondary">Resetta tutto</button>
        </form>
    </div>
@endsection
