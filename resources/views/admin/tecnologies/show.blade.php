@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">{{ $tecnology->name }}</h1>
            </div>
            <div class="col-12">
                <p>
                    {{ $tecnology->content }}
                </p>
                <a href="{{ route('admin.tecnologies.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista
                    completa dei tag
                </a>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-primary">Ritorna alla Dashboard
                </a>
            </div>
        </div>
    </div>
@endsection
