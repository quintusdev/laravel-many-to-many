@extends('layouts.admin')

@section('content')
    {{-- TABELLA CONTENENTE I DATI --}}
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-evenly align-items-center my-5">
                <h1>I nostri progetti</h1>
                <div class="btn-container">
                    <div class="btn-container d-flex">
                        <div class="btn-container">
                            <a href="{{ Route('admin.posts.create') }}"><button class="btn btn-success">Crea
                                    progetto</button></a>
                        </div>
                        <div class="btn-container ms-4">
                            <a href="{{ Route('admin.tecnologies.index') }}"><button class="btn btn-warning">Modifica le
                                    tecnologies</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="bg-primary text-white" scope="col">
                                <h2 class="fw-bold">Id</h2>
                            </th>
                            <th class="bg-primary text-white" scope="col">
                                <h2 class="fw-bold">Title</h2>
                            </th>
                            <th class="bg-primary text-white" scope="col">
                                <h2 class="fw-bold">Slug</h2>
                            </th>
                            <th class="bg-primary text-white" scope="col">
                                <h2 class="fw-bold">Azioni</h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th class="bg-primary-subtle fw-bold" scope="row">{{ $post->id }}</th>
                                <td class="bg-primary-subtle fw-bold">{{ $post->title }}</td>
                                <td class="bg-primary-subtle fw-bold">{{ $post->slug }}</td>
                                <td class="bg-primary-subtle fw-bold">
                                    <a class="btn btn-success btn-sm" href="{{ route('admin.posts.show', $post->id) }}"><i
                                            class="fas fa-eye"></i></a>
                                    <a class="btn btn-warning btn-sm" href="{{ route('admin.posts.edit', $post->id) }}"><i
                                            class="fas fa-pen"></i></a>
                                    <form class="d-inline-block delete-post-form"
                                        action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('admin.partials.modal_delete')
        </div>
    @endsection
