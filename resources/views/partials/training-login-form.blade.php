@include('partials.errors')

<form id="{{ isset($formId) ? $formId : 'subscribe' }}" method="POST" action="/subscriptions">
    {!! csrf_field() !!}

    @include('partials.training-login-form-fields')

    {{--<pre>@{{ $data | json }}</pre>--}}
</form>
