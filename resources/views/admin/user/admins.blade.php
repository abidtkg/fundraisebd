@extends('layouts.master')
@section('title', 'Admins')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Admin Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Adminstrator</a></li>
                    <li class="breadcrumb-item active">Admins</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Admins</h3>
        <a href="{{ route('admin.admin.create') }}" class="btn btn-sm btn-info" style="float: right;">Create Admin</a>
    </div>
    
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->role }}</td>
                    <td>{{ date('d M Y', strtotime($admin->created_at)) }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('admin.admin.delete', $admin->id) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{-- PAGINATION --}}
    </div>
  </div>
@endsection