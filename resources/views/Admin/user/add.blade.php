@extends('Admin.layouts.master')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add User</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <form role="form" action="Admin/user/add" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}}
                        @endforeach
                    </div>
                @endif
                @if(Session::has('thanhcong'))
                    <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
                @endif
                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" value=" " />
                </div>
                <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password">

</div>
                <div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" type="text" name="email" id="email" />
</div>
<div class="form-group">
    <label for="role">Role</label>
    <select class="form-control" id="role" name="role">
        <option></option>
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
</div>
                <button type="submit" class="btn btn-success">Thêm User</button>
                <a  class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>

@endsection