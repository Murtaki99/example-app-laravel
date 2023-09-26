@extends('layouts.main')
@section('main')
<section id="contact" class="contact d-flex justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <h4 class="text-center text-bg-danger rounded-top">Login</h4>
                @if (session()->has('success'))
                <p class="text-success text-center"><small>{{ session('success') }}</small></p>
                @endif
                @if (session()->has('failed'))
                <p class="text-success text-center"><small>{{ session('failed') }}</small></p>
                @endif
                <form action="/auth" method="post" >
                    @csrf
                    <div class="row justify-content-start">
                        <div class="mb-3">
                            <label class="text-left" for="">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
                        </div>
                        <div class="mb-3">
                            <label class="text-left" for="">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="text-center mb-2"><button class="btn  btn-sm btn-success col-12" type="submit">Login</button></div>
                        <small>You don't have account yet ? <a href="/register">Registrasi</a></small>
                    </div>
                </form>
              </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->
@endsection
