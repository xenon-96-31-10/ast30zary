@extends('layouts.app')

@section('title')База отдыха "Заря" | Оставить отзыв@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header bg-primary text-white">{{ __('Ваш отзыв') }}</div>

              <div class="card-body">
                  <form method="POST" action="{{ route('reviews.store') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Ваше имя') }}</label>

                          <div class="col-md-6">
                              <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ old('author') }}" required autocomplete="author" autofocus>

                              @error('author')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Ваш отзыв') }}</label>

                          <div class="col-md-6">
                              <textarea id="text" name="text" class="form-control @error('text') is-invalid @enderror" rows="2" cols="80" required autocomplete="old-text">{{ old('text') }}</textarea>
                              @error('text')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Оставить отзыв') }}
                              </button>

                          </div>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
