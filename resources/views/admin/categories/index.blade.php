@extends('layouts.admin')
@section('title')
    All categories
@endsection
@section('content')
    <h1>All categories</h1>
    <a href="{{'categories/create'}}" class="btn btn-success my my-auto mx-2">add category</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="row">Id</th>
            <th scope="row">Category</th>
            <th scope="row">category link</th>
            <th scope="row">Comments</th>
            <th scope="row">Created at</th>
            <th scope="row">Update</th>
        </tr>
        </thead>
        <tbody>
        @if($categories)

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>


                    <td>{{$category->name}}</td>
                    <td>category link</td>
                    <td>Comments</td>
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
