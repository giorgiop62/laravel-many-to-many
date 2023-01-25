@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
    <div class="container">
        <h1>elenco post</h1>
        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}

            </div>
        @endif

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Data</th>
                    <th scope="col">Text</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->data }}</td>
                        <td>{{ $post->text }}</td>
                        <td class="d-flex">
                            <a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}">Show</a>

                            <a class="btn btn-secondary" href="{{ route('admin.posts.edit', $post) }}">Edit</a>

                            <form onsubmit="return confirm('Confermi di eliminare il post?')"
                                action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endsection
