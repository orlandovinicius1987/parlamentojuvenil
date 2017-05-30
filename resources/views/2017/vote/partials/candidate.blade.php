<div class="well {{ random_color('vote', ['haze-green']) }}">
    <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
        <div class="foto-candidato-outer">
            <div class="foto-candidato-inner" >
                <img src="{{ $candidate->user_avatar }}" class="img-responsive foto-candidato-social">
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 dados-candidato text-center">
        @if (! isset($is_elected))
            <p>Candidato(a)</p>
        @endif

        <p class="nome-candidato">{{ $candidate->student_name }}</p>
        <p class="cargo">Deputado(a) Estadual Juvenil</p>
        <p class="escola">{{ $candidate->student_school }}</p>

        @if (! isset($is_elected))
            <a href="{{ route('vote.confirm', ['subscription_id' => $candidate->subscription_id]) }}" class="btn btn-primary btn-large center-block">VOTAR</a>
        @endif
    </div>
</div>
