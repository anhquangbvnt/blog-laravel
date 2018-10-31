@extends('Admin.layouts.master')
@section('content')
    {{--<h1> Xin Chao moi nguoi</h1>--}}
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List User</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Blog User
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="25%">Username</th>
                                    <th width="25%">Email</th>
                                    <th width="10%">Role</th>
                                    <th width="5%">Edit</th>
                                    <th width="5%">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)

                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>@if($user->role == 1){{'Admin'}}@else{{'Editor'}}@endif</td>
                                    <td><a href="{{route('editAdminUser', ['id'=> 1])}}" class="btn btn-primary">Edit</a></td>
                                    <td><a href="{{route('deleteAdminUser', ['id=> 1'])}}" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('addAdminUser')}}" class="btn btn-warning">Add User</a>
        </div>
    </div>


@endsection