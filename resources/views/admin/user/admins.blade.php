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
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{-- PAGINATION --}}
    </div>
  </div>
@endsection