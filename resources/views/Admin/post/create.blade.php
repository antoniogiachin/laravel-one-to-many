@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <h1 class="mb-3">Inserisci un nuovo post</h1>
        {{-- metodo POST e azione sullo store --}}
        <form method="POST" action="{{ route('admin.posts.store') }}">
    
            {{-- token sicurezza --}}
            @csrf
    
            {{-- titolo --}}
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            {{-- contenuto --}}
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Inserisci il post qui" id="content" name="content" cols="50" rows="10"></textarea>
                    <label for="content">Post</label>
                </div>
            </div>
    
            {{-- bottone submit --}}
            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection