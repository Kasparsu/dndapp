@extends('layouts.layout')
@section('content')

<div class="card mt-36 mx-auto w-96 bg-base-300">
    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf


            <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text">{{__('Email')}}</span>

                </div>
                <input type="email" placeholder="{{__('Email')}}" class="input input-bordered w-full max-w-xs" required autofocus autocomplete="username" value="{{old('email')}}" />
                <div class="label">
                    @if($errors->has('email'))
                        <span class="label-text-alt">{{$errors->get('email')}}</span>
                    @endif
                </div>
              </label>

              <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text">{{__('Password')}}</span>

                </div>
                <input type="password" placeholder="{{__('Password')}}" class="input input-bordered w-full max-w-xs" required autofocus autocomplete="username" value="{{old('email')}}" />
                <div class="label">
                    @if($errors->has('password'))
                        <span class="label-text-alt">{{$errors->get('password')}}</span>
                    @endif
                </div>
              </label>


            <!-- Remember Me -->
            <div class="form-control">
                <label class="label cursor-pointer">
                  <span class="label-text">{{ __('Remember me') }}</span>
                  <input type="checkbox" class="toggle" name="remember" />
                </label>
              </div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-base-content rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button class="btn btn-primary ms-3">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
