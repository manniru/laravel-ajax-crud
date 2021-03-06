@extends('lac::layouts.guest')

@section('title', __('Register'))
@section('child-content')
    <form method="POST" action="{{ route('register') }}" data-ajax-form>
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" name="name" id="name" class="form-control" data-error-input="name">
                <div class="invalid-feedback" data-error-feedback="name"></div>
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" name="email" id="email" class="form-control" data-error-input="email">
                <div class="invalid-feedback" data-error-feedback="email"></div>
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" name="password" id="password" class="form-control" data-error-input="password">
                <div class="invalid-feedback" data-error-feedback="password"></div>
            </div>
            <div class="form-group mb-0">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" data-error-input="password_confirmation">
                <div class="invalid-feedback" data-error-feedback="password_confirmation"></div>
            </div>
        </div>
        <div class="card-footer text-right bg-light">
            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        </div>
    </form>
@endsection
