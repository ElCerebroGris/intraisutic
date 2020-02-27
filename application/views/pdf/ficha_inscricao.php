<!DOCTYPE html>
<html>
    <head>        
        <style>
            img {
                display: block;
                margin: 0 auto;
                width: 100%;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            .cabecalho h4{
                text-align: center;
                font-weight: bold;
            }
            .preta {
                border-style: solid;
                border-width: 0px 0px 1px 0px;
                border-color: #000;
            }
            .sec{
                padding-left:10em;
                padding-right:10em;
            }
            p {
                font-family: "Bookman Old Style";
                font-size: 12px;
            }
            .tema {
                font-weight: bold;
            }
            .conteudo {
                padding-right: 10px;
                text-decoration: underline;
                font-style: normal;
            }
            .azul {
                border-style: solid;
                border-width: 0px 0px 5px 0px;
                border-color: #017ebc;
            }
            .preta {
                border-style: solid;
                border-width: 0px 0px 1px 0px;
                border-color: #000;
            }
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                height: 60px;
                width: 160px;
                text-align: center;
            }
            .dir{
                padding-left:30em;
                font-size: 11px;
            }
            .all{
                padding-left:2em;
                padding-right:2em;
            }
        </style>
    </head>

    <body>
        <img src="<?= base_url() ?>img/logo.png" class="center" style="text-align: center;
             margin-left: 40%;" alt="logo" />
        <br>
        <p style="font-size: 12px" class="azul tema text-center">Criado Pelo Decreto Nº7/09 do Conselho de Ministros de 12 de Maio de 2009, Artigo 8º, 
            Diário nº87 | Série</p>

        <div class="cabecalho">
            <h4>FICHA DE INSCRÇÃO
            </h4>
        </div>

        <div>
            <p>Inscrição Nº: <u>&nbsp;&nbsp; <?= $candidatos[0]->id_candidato ?> &nbsp;&nbsp; </u>
                Ano Letivo <u>&nbsp;&nbsp; 2020 &nbsp;&nbsp;</u>
                Data <u>&nbsp;&nbsp; <?= $candidatos[0]->data_criacao ?> &nbsp;&nbsp;</u>
            </p>
        </div>

        <div>
            <p><b>1-DADOS BIOGRÁFICOS</b></p>
            <p>Nome Completo: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->nome ?>&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
            <p>Genero: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->descricao_genero ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
                Data de Nascimento: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->dia_nascimento . '/' . $candidatos[0]->mes_nascimento . '/' . $candidatos[0]->ano_nascimento ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
                Estado Civil: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->descricao_estado_civil ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
            </p>
            <p>Tipo de Identificação: <u>&nbsp;&nbsp;&nbsp;&nbsp;BI&nbsp;&nbsp;&nbsp;&nbsp;</u>
                Nº de Identificação <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->bi ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
                Emitido em <u>&nbsp;&nbsp;&nbsp;&nbsp;LUANDA&nbsp;&nbsp;&nbsp;&nbsp;</u> 
                Aos <u>&nbsp;&nbsp;&nbsp;&nbsp;12/10/2018&nbsp;&nbsp;&nbsp;&nbsp;</u> 

            </p>
            <p>Residencia: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->endereco ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
                Provincia de: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->descricao_provincia ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
                Municipio de: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->descricao_municipio ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
            </p>
            <p>Telefone: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->telefone ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
                Email: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->email ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
            </p>
            <p>Necessidade de Educação especial: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->descricao_educacao_especial ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
            </p>
        </div>

        <div>
            <p><b>2-SITUAÇÃO ESTUDANTIL</b></p>
            <p>Procedencia: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->descricao_precedencia_escolar ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
            Curso: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->curso_de_ensino_medio ?>&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
            <p>Curso que pretende frequentar
                <?php if ($candidatos[0]->codigo_curso_ensino_superior == 2) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia Informática&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } else if ($candidatos[0]->codigo_curso_ensino_superior == 1) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia de Telecomunicações&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } ?>
                <?php if ($candidatos[0]->codigo_curso_ensino_superior_2 == 2) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia Informática&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } else if ($candidatos[0]->codigo_curso_ensino_superior_2 == 1) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia de Telecomunicações&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } ?>
            </p>
        </div>

        <div>
            <p><b>3-DADOS LABORAIS</b></p>
            <p>Trabalhador: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->descricao_trabalho ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
                Nome da Instituição laboral: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->instituicao_laboral ?>&nbsp;&nbsp;&nbsp;&nbsp;</u>
            </p>
        </div>

        <br>
        <div class="tema text-center">
            <div class="sec">
                <p class="preta"></p>
            </div>
            <p style="font-size: 12px; text-align: center">
                <span>A Secretaria Académica</span>
            </p>
        </div>

        <hr>

        <div>
            <p style="text-align: center;"><b>INSTITUTO SUPERIOR DE TECNOLOGIAS DE INFORMAÇÃO E COMUNICAÇÃO</b></p>
            <p>Inscrição Nº: <u>&nbsp;&nbsp; <?= $candidatos[0]->id_candidato ?> &nbsp;&nbsp; </u>
                Ano Letivo <u>&nbsp;&nbsp; 2020 &nbsp;&nbsp;</u>
                Data <u>&nbsp;&nbsp; <?= $candidatos[0]->data_criacao ?> &nbsp;&nbsp;</u>
            </p>
            <p>Nome Completo: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $candidatos[0]->nome ?>&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
            <p>Curso
                <?php if ($candidatos[0]->codigo_curso_ensino_superior == 2) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia Informática&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } else if ($candidatos[0]->codigo_curso_ensino_superior == 1) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia de Telecomunicações&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } ?>
                <?php if ($candidatos[0]->codigo_curso_ensino_superior_2 == 2) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia Informática&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } else if ($candidatos[0]->codigo_curso_ensino_superior_2 == 1) { ?>
                    <u>&nbsp;&nbsp;&nbsp;&nbsp;Engenharia de Telecomunicações&nbsp;&nbsp;&nbsp;&nbsp;</u>
                <?php } ?>
                Data de Nascimento: <u>&nbsp;&nbsp;&nbsp;&nbsp;
                    <?= $candidatos[0]->dia_nascimento . '/' . $candidatos[0]->mes_nascimento . '/' . $candidatos[0]->ano_nascimento ?>&nbsp;&nbsp;&nbsp;&nbsp;</u> 
            </p>
            <p>O Funcionario: <u>&nbsp;&nbsp;&nbsp;&nbsp;<?= $this->session->userdata('nome_completo') ?>&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
        </div>

        <br>
        <br>
        <p class="tema text-center" style="
           border-style: solid;
           border-width: 2px 0px 0px 0px;
           border-color: #017ebc;
           font-size: 11px;
           ">Parque do Saber do MTTI, ISUTIC, Bairro dos CTT's km 7, Rangel-Luanda, Contactos:
            222041728, www.isutic.gov.ao</p>

    </body>
</html>
