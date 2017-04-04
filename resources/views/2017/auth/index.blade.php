@extends('2017.layouts.layout')

@section('contents')
    <div class="row">
        <a href="{{ route('auth.social.redirect', ['facebook']) }}" id="facebookButton"><img src="/templates/2016/images/buttonsSocialLogin/fb_logo_blue29.png"></a>
        <a href="{{ route('auth.social.redirect', ['twitter']) }}"><img src="/templates/2016/images/buttonsSocialLogin/twitter.png"></a>
        <a href="{{ route('auth.social.redirect', ['youtube']) }}"><img src="/templates/2016/images/buttonsSocialLogin/youTube48px.png"></a>
        <a href="{{ route('auth.social.redirect', ['linkedin']) }}"><img src="/templates/2016/images/buttonsSocialLogin/linkedin_2C_34px.png"></a>
        <a href="{{ route('auth.social.redirect', ['instagram']) }}"><img src="/templates/2016/images/buttonsSocialLogin/instagram.png"></a>
    </div>
@stop
