{{-- Nome --}}
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label for="name" class="sr-only control-label">Nome Completo</label>
        <input
            v-model="name"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('name') || isset($subscription) ? $subscription->name : '' }}"
            placeholder="Nome Completo"
            name="name"
            id="name"
            required data-validation-required-message="Por favor digite seu nome."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Nome Social --}}
<div class="row control-group">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label for="social_name" class="sr-only control-label">Apelido</label>
        <input
            v-model="social_name"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('social_name') || isset($subscription) ? $subscription->social_name : '' }}"
            placeholder="Apelido"
            name="social_name"
            id="social_name"
            required
            data-validation-required-message="Por favor digite seu nome social."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

<div id="vue-schools">
    {{-- Cidade --}}
    <div class="row control-group" transition="expand">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="city" class="sr-only control-label">Município</label>
            {{--<select id="XXXXcity-edit" v-model="city" v-on:change="__fetchSchools($event)" class="form-control input-lg" placeholder="Município" name="city" id="city" required data-validation-required-message="Por favor preencha o município.">--}}
            <select id="city-edit" v-model="city" class="form-control input-lg" placeholder="Município" name="city" id="city" required data-validation-required-message="Por favor preencha o município.">
                <option value="" selected>CIDADE AONDE VOCÊ ESTUDA</option>
                @foreach ($cities as $key => $city)
                    <option
                        value="{{ $city->name }}"
                        {{ (Input::old('city') == $city->name || isset($subscription) ? $subscription->city == $city->name : false) ? 'selected' : '' }}
                    >
                        {{ $city->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Unidade Escolar --}}
    <div class="row control-group"  transition="expand">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="school" class="sr-only control-label">Escola</label>
            <select id="school-edit" v-model="school" value="" options="schools" class="form-control input-lg" placeholder="Escola" name="school" id="school" required data-validation-required-message="Por favor escolha a escola.">
                <option
                    v-for="school in schools"
                    v-bind:value="school.value"
                >
                    @{{ school.text }}
                </option>

                {{--@if (isset($schools))--}}
                    {{--@foreach ($schools as $key => $school)--}}
                        {{--<option--}}
                            {{--value="{{ $school->name }}"--}}
                            {{--{{ (Input::old('city') == $school->name || isset($subscription) ? $subscription->school == $school->name : false) ? 'selected' : '' }}--}}
                        {{-->--}}
                            {{--{{ $school->name }}--}}
                        {{--</option>--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            </select>
            <span class="help-block text-danger"></span>
        </div>
    </div>
</div>

{{-- Matricula --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-xs-6 floating-label-form-group controls">
        <label for="registration" class="sr-only control-label">Matrícula</label>
        <input
            v-model="registration"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('registration') || isset($subscription) ? $subscription->registration : '' }}"
            placeholder="Matrícula"
            name="registration"
            id="registration"
            required
            data-validation-required-message="Por favor digite sua matrícula."
        >
        <span class="help-block text-danger"></span>
    </div>

    <div class="form-group col-xs-6 floating-label-form-group controls">
        <label for="registration" class="sr-only control-label">Série</label>

        <select v-model="grade" class="form-control input-lg" placeholder="Sexo" name="grade" id="grade" required data-validation-required-message="Por favor preencha a série.">
            <option value="" selected>ESCOLHA A SÉRIE</option>

            <option
                value="1o ano do ensino médio"
                {{ (Input::old('grade') == '1o ano do ensino médio' || isset($subscription) ? $subscription->grade == '1o ano do ensino médio' : false) ? 'selected' : '' }}
            >
                1o ano do ensino médio
            </option>

            <option
                value="2o ano do ensino médio"
                {{ (Input::old('grade') == '2o ano do ensino médio' || isset($subscription) ? $subscription->grade == '2o ano do ensino médio' : false) ? 'selected' : '' }}
            >
                2o ano do ensino médio
            </option>
        </select>
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Sexo --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-4 floating-label-form-group controls">
        <label for="gender" class="sr-only control-label">Sexo</label>
        <select v-model="gender" class="form-control input-lg" placeholder="Sexo" name="gender" id="gender" required data-validation-required-message="Por favor preencha o sexo.">
            <option value="" selected>SEXO</option>

            <option
                value="F"
                {{ (Input::old('gender') == 'F' || isset($subscription) ? $subscription->gender == 'F' : false) ? 'selected' : '' }}
            >
                Feminino
            </option>

            <option
                value="M"
                    {{ (Input::old('gender') == 'M' || isset($subscription) ? $subscription->gender == 'M' : false) ? 'selected' : '' }}
            >
                Masculino
            </option>
        </select>
        <span class="help-block text-danger"></span>
    </div>
    <div class="form-group col-lg-8 floating-label-form-group controls">
        <label for="gender2" class="sr-only control-label">Identidade de Gênero</label>
        <select v-model="gender2" class="form-control input-lg" placeholder="Identidade de Gênero" name="gender2" id="gender2" required data-validation-required-message="Por favor preencha a identidade de gênero.">
            <option value="" selected>IDENTIDADE DE GÊNERO</option>

            <option
                value="F"
                {{ (Input::old('gender2') == 'F' || isset($subscription) ? $subscription->gender2 == 'F' : false) ? 'selected' : '' }}
            >
                Feminino
            </option>

            <option
                value="M"
                {{ (Input::old('gender2') == 'M' || isset($subscription) ? $subscription->gender2 == 'M' : false) ? 'selected' : '' }}
            >
                Masculino
            </option>
        </select>
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Nascimento --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-xs-6 floating-label-form-group controls">
        <label for="birthdate" class="sr-only control-label">Data de nascimento</label>
        <input
            v-model="birthdate"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('birthdate') || isset($subscription) ? $subscription->birthdate : '' }}"
            onkeydown="return false;"
            placeholder="Data de nascimento"
            name="birthdate"
            id="birthdate"
            required
            data-validation-required-message="Por favor digite sua data de nascimento."
        >
    </div>

    <div class="form-group col-xs-6 floating-label-form-group controls">
        <label for="cpf" class="sr-only control-label">CPF</label>
        <input
                v-model="cpf"
                v-on:keyup="checkCpf"
                type="text"
                class="form-control input-lg"
                value="{{ Input::old('cpf') || isset($subscription) ? $subscription->cpf : ''  }}"
                title="Seu CPF ou do responsável"
                placeholder="CPF"
                name="cpf"
                id="cpf"
                required data-validation-required-message="Por favor digite seu CPF."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Identidade --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-xs-6 floating-label-form-group controls">
        <label for="id_number" class="sr-only control-label">Identidade</label>
        <input
            v-model="id_number"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('id_number') || isset($subscription) ? $subscription->id_number : '' }}"
            placeholder="Identidade"
            name="id_number"
            id="id_number"
            required
            data-validation-required-message="Por favor digite sua identidade."
        >
        <span class="help-block text-danger"></span>
    </div>
    <div class="form-group col-xs-6 floating-label-form-group controls">
        <label for="id_issuer" class="sr-only control-label">Órgão emissor</label>
        <input
            v-model="id_issuer"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('id_issuer') || isset($subscription) ? $subscription->id_issuer : '' }}"
            placeholder="Órgão emissor"
            name="id_issuer" id="id_issuer"
            required
            data-validation-required-message="Por favor digite o órgao emissor."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Email --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-xs-12 floating-label-form-group controls">
        <label for="email" class="sr-only control-label">E-mail</label>
        <input
            v-model="email"
            type="text"
            class="form-control input-lg"
            value="{{ Input::old('email') || isset($subscription) ? $subscription->email : ''  }}"
            placeholder="E-mail"
            name="email"
            id="email"
            required
            data-validation-required-message="Por favor digite o seu email."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Telefone --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-6 floating-label-form-group controls">
        <label for="phone_home" class="sr-only control-label">Telefone Residencial</label>
        <input
            v-model="phone_home"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('phone_home') || isset($subscription) ? $subscription->phone_home : '' }}"
            placeholder="Telefone Residencial"
            name="phone_home"
            id="phone_home"
            required data-validation-required-message="Por favor digite seu telefone."
        >
        <span class="help-block text-danger"></span>
    </div>

    <div class="form-group col-lg-6 floating-label-form-group controls">
        <label for="phone_cellular" class="sr-only control-label">Telefone Celular</label>
        <input
            v-model="phone_cellular"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('phone_cellular') || isset($subscription) ? $subscription->phone_cellular : '' }}"
            placeholder="Telefone Celular"
            name="phone_cellular"
            id="phone_cellular"
            required
            data-validation-required-message="Por favor digite seu telefone celular."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- CEP --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-12 floating-label-form-group controls">
        <label for="zip_code" class="sr-only control-label">CEP da residência</label>
        <input
            v-model="zip_code"
            v-on:keyup="checkZip"
            type="tel"
            value="{{ Input::old('zip_code') || isset($subscription) ? $subscription->zip_code : '' }}"
            class="form-control input-lg"
            placeholder="CEP da residência"
            name="zip_code"
            id="zip_code"
            required
            data-validation-required-message="Por favor digite seu CEP."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Endereço --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-12 floating-label-form-group controls">
        <label for="address" class="sr-only control-label">Endereço</label>
        <input
            v-model="address"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('address') || isset($subscription) ? $subscription->address : '' }}"
            placeholder="Endereço"
            name="address"
            id="address"
            required data-validation-required-message="Por favor digite seu endereço."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Complemento & Bairro --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-6 floating-label-form-group controls">
        <label for="address_complement" class="sr-only control-label">Complemento</label>
        <input
            v-model="address_complement"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('address_complement') || isset($subscription) ? $subscription->address_complement : '' }}"
            placeholder="Complemento"
            name="address_complement"
            id="address_complement"
            data-validation-required-message="Por favor digite o complemento."
        >
        <span class="help-block text-danger"></span>
    </div>

    <div class="form-group col-lg-6 floating-label-form-group controls">
        <label for="address_neighborhood" class="sr-only control-label">Bairro</label>
        <input
            v-model="address_neighborhood"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('address_neighborhood') || isset($subscription) ? $subscription->address_neighborhood : ''  }}"
            placeholder="Bairro"
            name="address_neighborhood"
            id="address_neighborhood"
            required
            data-validation-required-message="Por favor digite seu bairro."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Município --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-12 floating-label-form-group controls">
        <label for="address_city" class="sr-only control-label">Município</label>
        <input
            v-model="address_city"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('address_city') || isset($subscription) ? $subscription->address_city : '' }}"
            placeholder="Município"
            name="address_city"
            id="address_city"
            required
            data-validation-required-message="Por favor digite sua cidade."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

{{-- Facebook --}}
<div class="row control-group"  transition="expand">
    <div class="form-group col-lg-12 floating-label-form-group controls">
        <label for="facebook" class="sr-only control-label">Link ou usuário do Facebook</label>
        <input
            v-model="facebook"
            type="tel"
            class="form-control input-lg"
            value="{{ Input::old('facebook') || isset($subscription) ? $subscription->facebook : '' }}"
            placeholder="Link ou usuário do Facebook"
            name="facebook"
            id="facebook"
            data-validation-required-message="Por favor digite seu facebook."
        >
        <span class="help-block text-danger"></span>
    </div>
</div>

<div id="success"></div>

<div class="row"  transition="expand">
    <div class="form-group col-xs-12">
            @if (isset($subscription))
                <button id="submit" type="submit" class="btn btn-danger">
                    Gravar
                </button>
            @else
                <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block btn-submit-subscription">
                    Enviar inscri&ccedil;&atilde;o
                </button>
            @endif
    </div>

    @if(app()->environment() !== 'production')
        <div class="form-group col-xs-12">
            <a id="spreadsheet" class="btn btn-lg btn-success btn-block hidden" href="{{ $spreadsheet }}" target="_blank">Ver planilha com inscri&ccedil;&otilde;es <br> ESTE BOTÃO NÃO VAI APARECER NA VERSAO FINAL DO HOTSITE</a>
        </div>
    @endif
</div>
