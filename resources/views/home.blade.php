@extends('layouts.main')

@section('main')
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome, @auth <span>{{ auth()->user()->name }}</span></h1> @endauth
      <h2>Apakah kamu sudah melakukan registrasi ?</h2>
      <div class="d-flex">
        <a href="/login" class="btn-get-started scrollto">Login Now</a>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>
@endsection
