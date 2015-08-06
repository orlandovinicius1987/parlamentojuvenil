<form id="subscribe" method="POST" action="/post/formResponse">
    {!! csrf_field() !!}

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name" class="sr-only control-label">Nome Completo</label>
            <input v-model="name" type="text" class="form-control input-lg" placeholder="Nome Completo" name="name" id="name" required data-validation-required-message="Por favor digite seu nome.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div class="row control-group"  v-transition="expand" v-if="name">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="city" class="sr-only control-label">Município</label>
            <select v-model="city" v-on="change: fetchSchools" class="form-control input-lg" placeholder="Município" name="city" id="city" required data-validation-required-message="Por favor preencha o município.">
                <option value="">CIDADE AONDE VOCÊ ESTUDA</option>
                @foreach ($cities as $city)
                    <option value="{{ $city->name }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row control-group"  v-transition="expand" v-if="city">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name" class="sr-only control-label">Escola</label>
            <select v-model="school" options="schools" class="form-control input-lg" placeholder="Escola" name="school" id="city" required data-validation-required-message="Por favor escolha a escola."></select>
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div class="row control-group"  v-transition="expand" v-if="city && school">
        <div class="form-group col-lg-6 floating-label-form-group controls no-pad-right">
            <label for="registration" class="sr-only control-label">Número da Matrícula</label>
            <input v-model="registration" type="text" class="form-control input-lg" placeholder="Matrícula" name="registration" id="email" required data-validation-required-message="Por favor digite sua matrícula.">
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="gender" class="sr-only control-label">Sexo</label>
            <select v-model="gender" class="form-control input-lg" placeholder="Sexo" name="gender" id="phone" required data-validation-required-message="Por favor preencha o sexo.">
                <option value="">SEXO</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select>
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div class="row control-group"  v-transition="expand" v-if="city && school && registration && gender">
        <div class="form-group col-lg-6 floating-label-form-group controls no-pad-right">
            <label for="email" class="sr-only control-label">Email</label>
            <input v-model="email" type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required data-validation-required-message="Por favor digite seu e-mail.">
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="phone" class="sr-only control-label">Seu Telefone</label>
            <input v-model="phone" type="tel" class="form-control input-lg" placeholder="Telefone" name="phone" id="phone" required data-validation-required-message="Por favor digite seu telefone.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div id="success"></div>

    <div class="row"  v-transition="expand" v-if="city && school && registration && gender && email && phone">
        <div class="form-group col-xs-12">
            <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">Enviar inscri&ccedil;&atilde;o</button>
        </div>

        @if(app()->environment() !== 'production')
            <div class="form-group col-xs-12">
                <a id="spreadsheet" class="btn btn-lg btn-success btn-block hidden" href="{{ $spreadsheet }}" target="_blank">Ver planilha com inscri&ccedil;&otilde;es <br> ESTE BOTÃO NÃO VAI APARECER NA VERSAO FINAL DO HOTSITE</a>
            </div>
        @endif
    </div>

    {{--<pre>@{{ $data | json }}</pre>--}}
</form>
