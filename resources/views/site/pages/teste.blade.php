@extends('site.layouts.app')

@section('content')
    <div>
        <h1>
            Home Page
        </h1>

    </div>
    <div>
    <h3>
        Form para teste de cases e denuncias
    </h3>
        <form action="{{route('admin.cases.store')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <input name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <textarea name="message">

            </textarea>
            <input type="file" name="attachment">
            <input type="submit">
        </form>
    </div>

    <hr/>
    <h1>
        Form para teste de comentarios
    </h1>
    <div>
        <form action="{{route('admin.comments.store')}}" method="post">
            @csrf
            <input name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="number" name="email" placeholder="id da postagem">
            <textarea name="content">

            </textarea>
            <input type="submit">
        </form>
    </div>

@endsection
