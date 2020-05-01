@extends('layouts.admin')
@section('title')
    onze users
    @endsection
@section('content')
    @if(Session::has('deleted_user'))
        <p class="alert alert-success">{{session('deleted_user')}}</p>
    @endif
    <h1>All users</h1>

    <a href="{{'users/create'}}" class="btn btn-success my my-auto mx-2">add user</a>

   <table class="table table-striped">
       <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
       </thead>
       <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>

                            <img height="62" src="{{$user->photo ? asset($user->photo->file) :
                            'http:/placehold
                            .it/62x62'}}" alt="">
                        </td>
                        <td>
                            <a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a>

                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role ? $user->role->name : 'User without role'}}</td>
                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                @endforeach
            @endif
       </tbody>
   </table>
    {{ $users->links() }}
@endsection
