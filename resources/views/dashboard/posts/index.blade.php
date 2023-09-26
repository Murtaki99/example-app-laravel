@extends('dashboard.mains.main')

@section('main')
<h3>My Post</h3>
@endsection
@section('container')
<div class="row mb-3">
    <div class="col-2">
        <a href="/dashboard/posts/create" class="btn btn-success">Create</a>
    </div>
    <div class="col">
        @if (session()->has('success'))
        <strong class="text-success">
            {{ session('success') }}
        </strong>
        @endif
    </div>
</div>

<table class="table table-striped table-sm" >
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
             <th>Slug</th>
            <th>Tanggal Posting</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post )
        <tr>
            <th>{{ $loop->iteration }}</th>
            <th>{{ $post->title }}</th>
            <th>{{ $post->category }}</th>
            <th>{{ $post->slug }}</th>
            <th>{{ $post->created_at }}</th>
            <th>aksi</th>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

