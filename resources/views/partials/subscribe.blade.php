<div id="cadastro">
<h2>Inscreva-se</h2>
<p>Alunos da rede estadual de ensino</p>

<form id="subscribe" method="POST" action="/post/formResponse">
    {!! csrf_field() !!}

    {{-- Nome --}}
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name" class="sr-only control-label">Nome Completo</label>
            <input v-model="name" type="text" class="form-control input-lg" placeholder="Nome Completo" name="name" id="name" required data-validation-required-message="Por favor digite seu nome.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Nome Social --}}
    <div class="row control-group" v-if="name">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="social_name" class="sr-only control-label">Apelido</label>
            <input v-model="social_name" type="text" class="form-control input-lg" placeholder="Apelido" name="social_name" id="social_name" required data-validation-required-message="Por favor digite seu nome social.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Cidade --}}
    <div class="row control-group"  v-transition="expand" v-if="social_name">
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

    {{-- Unidade Escolar --}}
    <div class="row control-group"  v-transition="expand" v-if="city">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="school" class="sr-only control-label">Escola</label>
            <select v-model="school" value="" options="schools" v-on="change: checkSchool" class="form-control input-lg" placeholder="Escola" name="school" id="school" required data-validation-required-message="Por favor escolha a escola."></select>
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Matricula --}}
    <div class="row control-group"  v-transition="expand" v-if="city && school">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="registration" class="sr-only control-label">Matrícula</label>
            <input v-model="registration" type="text" class="form-control input-lg" placeholder="Matrícula" name="registration" id="registration" required data-validation-required-message="Por favor digite sua data de nascimento.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Sexo --}}
    <div class="row control-group"  v-transition="expand" v-if="registration">
        <div class="form-group col-lg-4 floating-label-form-group controls">
            <label for="gender" class="sr-only control-label">Sexo</label>
            <select v-model="gender" class="form-control input-lg" placeholder="Sexo" name="gender" id="gender" required data-validation-required-message="Por favor preencha o sexo.">
                <option value="">SEXO</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select>
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-lg-8 floating-label-form-group controls">
            <label for="gender2" class="sr-only control-label">Identidade de Gênero</label>
            <select v-model="gender2" class="form-control input-lg" placeholder="Identidade de Gênero" name="gender2" id="gender2" required data-validation-required-message="Por favor preencha a identidade de gênero.">
                <option value="">IDENTIDADE DE GÊNERO</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select>
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Nascimento --}}
    <div class="row control-group"  v-transition="expand" v-if="gender2">
        <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="birthdate" class="sr-only control-label">Data de nascimento</label>
            <input v-model="birthdate" type="text" class="form-control input-lg" onkeydown="return false;" placeholder="Data de nascimento" name="birthdate" id="birthdate" required data-validation-required-message="Por favor digite sua data de nascimento.">
            <span class="fa fa-calendar form-control-feedback" aria-hidden="true" style="color: #000000;"></span>
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="cpf" class="sr-only control-label">CPF</label>
            <input v-model="cpf" v-on="keyup: checkCpf" type="text" class="form-control input-lg" title="Seu CPF ou do responsável" placeholder="CPF" name="cpf" id="cpf" required data-validation-required-message="Por favor digite sua data de nascimento.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Identidade --}}
    <div class="row control-group"  v-transition="expand" v-if="cpfValid">
        <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="id_number" class="sr-only control-label">Identidade</label>
            <input v-model="id_number" type="text" class="form-control input-lg" placeholder="Identidade" name="id_number" id="id_number" required data-validation-required-message="Por favor digite sua data de nascimento.">
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-xs-6 floating-label-form-group controls">
            <label for="id_issuer" class="sr-only control-label">Órgão emissor</label>
            <input v-model="id_issuer" type="text" class="form-control input-lg" placeholder="Órgão emissor" name="id_issuer" id="id_issuer" required data-validation-required-message="Por favor digite sua data de nascimento.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Email --}}
    <div class="row control-group"  v-transition="expand" v-if="id_issuer">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="email" class="sr-only control-label">E-mail</label>
            <input v-model="email" type="text" class="form-control input-lg" placeholder="E-mail" name="email" id="email" required data-validation-required-message="Por favor digite sua data de nascimento.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Telefone --}}
    <div class="row control-group"  v-transition="expand" v-if="email">
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="phone_home" class="sr-only control-label">Telefone Residencial</label>
            <input v-model="phone_home" type="tel" class="form-control input-lg" placeholder="Telefone Residencial" name="phone_home" id="phone_home" required data-validation-required-message="Por favor digite seu telefone.">
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="phone_cellular" class="sr-only control-label">Telefone Celular</label>
            <input v-model="phone_cellular" type="tel" class="form-control input-lg" placeholder="Telefone Celular" name="phone_cellular" id="phone_cellular" required data-validation-required-message="Por favor digite seu telefone.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- CEP --}}
    <div class="row control-group"  v-transition="expand" v-if="phone_cellular || phone_home">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="zip_code" class="sr-only control-label">CEP da residência</label>
            <input v-model="zip_code" v-on="keyup: checkZip" type="tel" class="form-control input-lg" placeholder="CEP da residência" name="zip_code" id="zip_code" required data-validation-required-message="Por favor digite seu telefone.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Endereço --}}
    <div class="row control-group"  v-transition="expand" v-if="zipValid">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="address" class="sr-only control-label">Endereço</label>
            <input v-model="address" type="tel" class="form-control input-lg" placeholder="Endereço" name="address" id="address" required data-validation-required-message="Por favor digite seu telefone.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Complemento & Bairro --}}
    <div class="row control-group"  v-transition="expand" v-if="address">
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="address_complement" class="sr-only control-label">Complemento</label>
            <input v-model="address_complement" type="tel" class="form-control input-lg" placeholder="Complemento" name="address_complement" id="address_complement" required data-validation-required-message="Por favor digite o complemento.">
            <span class="help-block text-danger"></span>
        </div>

        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="address_neighborhood" class="sr-only control-label">Bairro</label>
            <input v-model="address_neighborhood" type="tel" class="form-control input-lg" placeholder="Bairro" name="address_neighborhood" id="address_neighborhood" required data-validation-required-message="Por favor digite seu bairro.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Município --}}
    <div class="row control-group"  v-transition="expand" v-if="address_neighborhood">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="address_city" class="sr-only control-label">Município</label>
            <input v-model="address_city" type="tel" class="form-control input-lg" placeholder="Município" name="address_city" id="address_city" required data-validation-required-message="Por favor digite sua cidade.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    {{-- Facebook --}}
    <div class="row control-group"  v-transition="expand" v-if="address_city">
        <div class="form-group col-lg-12 floating-label-form-group controls">
            <label for="facebook" class="sr-only control-label">Link ou usuário do Facebook</label>
            <input v-model="facebook" type="tel" class="form-control input-lg" placeholder="Link ou usuário do Facebook" name="facebook" id="facebook" data-validation-required-message="Por favor digite seu facebook.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div id="success"></div>

    <div class="row"  v-transition="expand" v-if="address_city">
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
</div>