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
@endsection
