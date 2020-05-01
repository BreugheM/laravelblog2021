@extends('layouts.admin')
@section('title')
All Posts
@endsection
@section('content')
        <h1>All Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="row">Id</th>
                <th scope="row">Photo</th>
                <th scope="row">Owner</th>
                <th scope="row">Category</th>
                <th scope="row">Title</th>
                <th scope="row">Body</th>
                <th scope="row">Post link</th>
                <th scope="row">Comments</th>
                <th scope="row">Created at</th>
                <th scope="row">Update</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->photo_id}}</td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category->name}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>Post link</td>
                <td>Comments</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
        {{ $posts->links() }}
@endsection
