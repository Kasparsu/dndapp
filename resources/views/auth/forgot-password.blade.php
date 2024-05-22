@extends('layouts.layout')
@section('content')

<div class="card mt-36 mx-auto w-96 bg-base-300">
    <div class="card-body">
        <div class="mb-4 text-base-content">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf



            <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text">{{__('Email')}}</span>

                </div>
                <input type="email" placeholder="{{__('Email')}}" class="input input-bordered w-full max-w-xs" required autofocus autocomplete="username" value="{{old('email')}}"  name="email"/>
                <div class="label">
                    @if($errors->has('email'))
                        <span class="label-text-alt">{{$errors->get('email')}}</span>
                    @endif
                </div>
              </label>


                <button class="btn btn-primary ms-3">
                    {{  __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
