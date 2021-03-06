@extends('layouts.main')

@section('meta_title', 'Seriálovna.cz :: Registration')
@section('meta_description', 'Seriálovna.cz :: Registration')
@section('page_title', 'Registration')

@section('content')
<div class="container login valign-wrapper">
    <div class="row">
        <div class="col l12 s12 m12">
            <form method="POST" action="{{ route('register') }}" class="valign-wrapper">
                {{ csrf_field() }}

                <div class="row">

                    <div class="input-field col s12 {{ $errors->has('username') ? ' invalid' : '' }}">
                        <input id="username" placeholder="@lang('strings.your_username')" type="text" name="username" class="validate" value="{{ old('username') }}" required>
                        <label for="username">@lang('strings.username')</label>
                    </div>

                    <div class="input-field col s12 {{ $errors->has('email') ? ' invalid' : '' }}">
                        <input id="email" placeholder="@lang('strings.email_address')" type="email" name="email" class="validate" value="{{ old('email') }}" required>
                        <label for="email">@lang('strings.email')</label>
                    </div>

                    <div class="input-field col s12 {{ $errors->has('passeword') ? ' invalid' : '' }}">
                        <input id="password" placeholder="@lang('strings.password_must')" type="password" name="password" class="validate" required>
                        <label for="password">@lang('strings.password')</label>
                    </div>


                    <div class="input-field col s12 {{ $errors->has('password-confirm') ? ' invalid' : '' }}">
                        <input id="password-confirm" placeholder="@lang('strings.password_repeat')" type="password" name="password_confirmation" class="validate" required>
                        <label for="password-confirm">@lang('strings.password_confirm')</label>
                    </div>


                    <div class="col s12 center-align">
                        <button type="submit" class="btn login-submit blue darken-3">
                            @lang('strings.register')
                        </button>
                    </div>

                    <div class="col s12">

                        @if ($errors->has('username'))
                        <span>
                            <strong class="red">{{ $errors->first('username') }}</strong>
                        </span>
                        @endif

                        @if ($errors->has('email'))
                        <span>
                            <strong class="red">{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                        @if ($errors->has('password'))
                        <span >
                            <strong class="red">{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>


            </form>

            <div class="col s12 center-align">
                <a class="" href="{{ route('login') }}">
                    @lang('strings.already_have_account')
                </a>
            </div>

        </div>
    </div>
</div>
</div>
@endsection

