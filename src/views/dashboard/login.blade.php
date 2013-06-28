@extends(Config::get('backend::views.layout'))

@section('header')
<h3>
    <i class="icon-signin"></i>
    {{ Lang::get('backend::common.sign_in') }}
</h3>
@stop

@section('content')
<div class="row">
    <div class="span12">

        <div class="margin-top-20">
            @if ( Session::has('login_error') )
            <div class="alert-login alert-error">
                <strong>{{ Session::get('login_error') }}</strong>
            </div>
            @endif
        </div>

        <form class="form-horizontal signin" action="{{ URL::route('admin.login') }}" method="POST">
            <div class="control-group">
                <label class="control-label" for="login_attribute">{{
                    Lang::get('backend::common.'.strtolower($login_attribute)) }}</label>
                <div class="controls">
                    <input type="text"
                           name="login_attribute" id="login_attribute" placeholder="Email"
                           value="{{ Input::old('login_attribute') }}">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="password">{{ Lang::get('backend::common.password') }}</label>
                <div class="controls">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="remember_me" value="true"> {{
                        Lang::get('backend::common.remember_this_computer') }}
                    </label>
                    <button type="submit" class="btn">{{ Lang::get('backend::common.sign_in') }}</button>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    {{ Lang::get('backend::common.don_account') }}
                    {{ HTML::linkRoute('admin.register', Lang::get('backend::common.register')) }}
                    <!--
                        TODO: make link to forget password
                     -->
                </div>
            </div>
        </form>

    </div>
</div>
@stop
