@extends('layouts.layout')
@section('content')

<div class="card mt-36 mx-auto w-96 bg-base-300">
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text">{{__('Name')}}</span>

                </div>
                <input type="text" placeholder="{{__('Name')}}" class="input input-bordered w-full max-w-xs" required autofocus autocomplete="name" value="{{old('name')}}" name="name" />
                <div class="label">
                    @if($errors->has('name'))
                        <span class="label-text-alt">{{$errors->get('name')}}</span>
                    @endif
                </div>
              </label>

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
              <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text">{{__('Confirm Password')}}</span>

                </div>
                <input type="password" placeholder="{{__('Confirm Password')}}" class="input input-bordered w-full max-w-xs" required name="password_confirm" />
                <div class="label">
                    @if($errors->has('password_confirmation'))
                        <span class="label-text-alt">{{$errors->get('password_confirmation')}}</span>
                    @endif
                </div>
              </label>



                <button class="btn btn-primary ms-3">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

