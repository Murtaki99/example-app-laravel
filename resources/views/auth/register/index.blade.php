@extends('layouts.main')
@section('main')
<section id="contact" class="contact d-flex justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h4 class="text-center text-bg-danger rounded-top">Registrasi</h4>
                <form action="/register" method="post">
                    @csrf
                    <div class="row justify-content-start">
                        <div class="mb-2">
                            <small class="text-left" for="">FullName</small>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="fullname" value="{{ old('name') }}">
                            @error('name')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <small class="text-left" for="">Username</small>
                            <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" placeholder="username" value="{{ old('usernam') }}" >
                            @error('username')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <small class="text-left" for="">Email</small>
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email address" value="{{ old('email') }}">
                            @error('email')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <small class="text-left" for="">Password</small>
                             <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="New password" >
                             @error('password')
                            <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-center mb-2"><button type="submit" class="btn  btn-sm btn-success col-12">Registrasi</button></div>
                        <small>Already have an account ? <a href="/login">Login</a></small>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
@endsection
