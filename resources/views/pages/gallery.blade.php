@extends('2016.layouts.layout')

@section('contents')
    @include('2016.partials.header')

    <section id="sobre">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <h2>O que é o Parlamento Juvenil?</h2>
                    <p>O Parlamento Juvenil é um projeto da Assembleia Legislativa do Rio de Janeiro (Alerj), apartidário e autônomo, cujo objetivo é aproximar o jovem da política. Instalado em 2003, envolve as 1.200 escolas estaduais dos 92 municípios do Estado e chega à nona edição em 2015.

                    <p>A iniciativa, de autoria do deputado Jorge Picciani (PMDB), presidente da Alerj, segue os moldes de um parlamento convencional. Eleitos pelos próprios colegas de escola, por voto direto, os parlamentares juvenis têm as mesmas atribuições dos deputados estaduais. Durante uma semana, eles apresentam, discutem e aprimoram projetos de lei.

                    <p>Nos últimos quatro anos, 252 jovens foram escolhidos. Para participar da seleção, é preciso ter entre 14 e 17 anos e ser aluno da rede pública estadual de ensino.


                    </p>
                    <a href="#" class="btn btn-primary">View Date & Place <i class="fa fa-angle-right"></i></a>

                    <h3>Quem pode participar?</h3>
                    <p>
                        Alunos do Ensino Fundamental II e Médio da rede pública estadual do Rio de Janeiro, com idade entre 14 e 17 anos.
                    </p>


                    {{--<h3>Inscreva-se</h3>--}}

                    @include('partials.subscribe')

                            <!--<h3>E como funciona?</h3>


                    <div class="col-md-4">
                        <h4>1</h4>
                        Cada município do Rio de Janeiro pode ser representado por um parlamentar juvenil. As eleições acontecem nas escolas, em dois turnos de votação.
                        <p></p>
                    </div>

                    <div class="col-md-4">
                        <h4>2</h4>
                        Os Deputados eleitos aprendem mais sobre sua função em oficinas de capacitação preparadas pela Alerj.
                        <p></p>
                    </div>

                    <div class="col-md-4">
                        <h4>3</h4>
                        Durante uma semana, os parlamentares apresentam, debatem e votam os projetos de sua autoria no plenário da Alerj. No fim, as escolhas são encaminhadas á apreciação do Governador, podendo ou não virar lei.
                        <p></p>
                    </div>-->

                </div>
                <div class="col-lg-4">
                    <h3>E como funciona?</h3>

                    <div >
                        <h4>1</h4>
                        Cada município do Rio de Janeiro pode ser representado por um parlamentar juvenil. As eleições acontecem nas escolas, em dois turnos de votação.
                        <p></p>
                    </div>

                    <div >
                        <h4>2</h4>
                        Os Deputados eleitos aprendem mais sobre sua função em oficinas de capacitação preparadas pela Alerj.
                        <p></p>
                    </div>

                    <div >
                        <h4>3</h4>
                        Durante uma semana, os parlamentares apresentam, debatem e votam os projetos de sua autoria no plenário da Alerj. No fim, as escolhas são encaminhadas á apreciação do Governador, podendo ou não virar lei.
                        <p></p>
                    </div>

                    <img class="img-responsive" src="/pj2016/images/guitar2.png" alt="guitar">

                </div>
            </div>
        </div>

    </section><!--/#about-->
@stop


