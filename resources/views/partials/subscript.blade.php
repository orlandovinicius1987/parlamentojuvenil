<form method="POST" action="/post/formResponse">
    {!! csrf_field() !!}

    <h2>Inscreva-se</h2>
    <p>Alunos da Rede Estadual de Ensino</p>

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name" class="sr-only control-label">Nome Completo</label>
            <input type="text" class="form-control input-lg" placeholder="Nome Completo" name="name" id="name" required data-validation-required-message="Por favor digite seu nome.">
            <span class="help-block text-danger"></span>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="city" class="sr-only control-label">Município</label>
            <select class="form-control input-lg" placeholder="Município" name="city" id="city" required data-validation-required-message="Por favor preencha o município.">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label for="name" class="sr-only control-label">Escola</label>
            <input type="text" class="form-control input-lg" placeholder="Escola" name="school" id="school" required data-validation-required-message="Por favor digite seu nome.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div class="row control-group">
        <div class="form-group col-lg-6 floating-label-form-group controls no-pad-right">
            <label for="matricula" class="sr-only control-label">Número da Matrícula</label>
            <input type="text" class="form-control input-lg" placeholder="Matrícula" name="matricula" id="email" required data-validation-required-message="Por favor digite sua matrícula.">
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="gender" class="sr-only control-label">Sexo</label>
            <select class="form-control input-lg" placeholder="Sexo" name="gender" id="phone" required data-validation-required-message="Por favor preencha o sexo.">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select>
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div class="row control-group">
        <div class="form-group col-lg-6 floating-label-form-group controls no-pad-right">
            <label for="email" class="sr-only control-label">Email</label>
            <input type="email" class="form-control input-lg" placeholder="Email" name="email" id="email" required data-validation-required-message="Por favor digite seu e-mail.">
            <span class="help-block text-danger"></span>
        </div>
        <div class="form-group col-lg-6 floating-label-form-group controls">
            <label for="phone" class="sr-only control-label">Seu Telefone</label>
            <input type="tel" class="form-control input-lg" placeholder="Telefone" name="phone" id="phone" required data-validation-required-message="Por favor digite seu telefone.">
            <span class="help-block text-danger"></span>
        </div>
    </div>

    <div id="success"></div>

    <div class="row">
        <div class="form-group col-xs-12">
            <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block">Enviar inscri&ccedil;&atilde;o</button>
        </div>
        <div class="form-group col-xs-12">
            <a id="spreadsheet" class="btn btn-lg btn-success btn-block hidden" href="{{ $spreadsheet }}" target="_blank">Ver planilha com inscri&ccedil;&otilde;es</a>
        </div>
    </div>
    <br>
    <br>
    <div class="pull-right">
        <img src="files/apps/parlamentojuvenil/site/logogoverno.png" alt=""/>
    </div>
    <br>
    <br>
    <br>
    <br>

</form>
