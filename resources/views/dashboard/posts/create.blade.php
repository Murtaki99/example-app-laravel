@extends('dashboard.mains.main')

@section('main')
<h4>Create New Post</h4>
@endsection
@section('container')
<div class="container">
<div class="col-md-8 order-md-1">
      <form class="needs-validation" novalidate method="POST" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
          <label for="title">Judul Post <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Judul postingan...">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <div class="mb-3">
          <label for="slug">Slug Post <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug otomatis di isi">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <div class="mb-2">
            <label for="category">Kategori</label>
            <select name="category" id="category" class="form-control">
                <Option value="Developer">Developer</Option>
                <option value="Designer">Designer</option>
                <Option value="Personal">Personal</Option>
            </select>
        </div>
        <div class="mb-3">
          <label for="slug">Isi Post <span class="text-danger">*</span></label>
          <textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Create Now</button>
      </form>
    </div>
</div>
@endsection
