@extends('layouts.main')

@section('container')

<div class="container ">
  <div class="row align-items-center">

    @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dissmis="alert" aria-label="close"></button>
  </div>
    @endif
    <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-9 fw-bold lh-1 mb-3">Mendaftar di RS IMMANUEL Bandung</h1>
      <p class="col-lg-10 fs-4">Note: Isi data diri anda dengan benar!</p>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">



      <form method="POST" action="{{ route('register') }}" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf
          <h4>Form Daftar</h4>
        <small class="text-muted">Isi menggunakan data yang benar!</small>
        <div class="form-floating mb-3">
          <input type="text" name="name" class="form-control @error('Nama') is-invalid @enderror" id="Nama" placeholder="name@example.com" required required value="{{ old('name') }}">
          <label for="Nama">Nama</label>
          @error('Nama')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control @error('Email') is-invalid @enderror" id="Email" placeholder="name@example.com" required required value="{{ old('email') }}">
          <label for="">Email</label>
          @error('Email')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
          <label for="">Password</label>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-floating mb-3">
          <input type="password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          <label for="">Confirm Password</label>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">{{ __('Register') }}</button>
        <hr class="my-4">
        <small class="text-muted">Sudah Memiliki Akun? <a href="{{ route('login') }}">Login</a></small>
      </form>
    </div>
  </div>
</div>
@endsection
