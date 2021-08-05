@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento: </label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento...">
            </div>
            <div class="form-group">
                <label for="city">Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento...">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado? </label>
                <select class="form-control" name="private" id="private">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição: </label>
                <textarea class="form-control" name="description" id="description" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
@endsection
