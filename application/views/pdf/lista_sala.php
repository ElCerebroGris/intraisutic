<!DOCTYPE html>
<html>
    <head>        
        <style>
            img {
                display: block;
                margin: 0 auto;
                width: 10px;
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
            <p>
                Lista de Candidatos da Sala <?= $salas[0]->descricao_sala ?> 
            </p>
        </div>

        <div>
            <table cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>Nome</th>
                        <th>BI</th>
                        <th>Idade</th>
                        <th>Data de Nascimento</th>
                        <th>Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($candidatos as $a) {
                        ?>
                        <tr>
                            <td><p><?= $a->id_candidato ?></p></td>
                            <td><p><?= $a->nome ?></p></td>
                            <td><p><?= $a->bi ?></p></td>
                            <td><p><?= $a->idade ?></p></td>
                            <td><p><?= $a->dia_nascimento . '-' . $a->mes_nascimento . '-' . $a->ano_nascimento ?></p></td>
                            <td>
                                <?php if ($a->codigo_curso_ensino_superior == 2) { ?>
                                    Engenharia Informática
                                <?php } else if ($a->codigo_curso_ensino_superior == 1) { ?>
                                    Engenharia de Telecomunicações
                                <?php } ?>
                                <?php if ($a->codigo_curso_ensino_superior_2 == 2) { ?>
                                    Engenharia Informática
                                <?php } else if ($a->codigo_curso_ensino_superior_2 == 1) { ?>
                                    Engenharia de Telecomunicações
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <br>
        <p class="tema text-center" style="
           border-style: solid;
           border-width: 2px 0px 0px 0px;
           border-color: #017ebc;
           font-size: 11px;
           ">Parque do Saber do MTTI, ISUTIC, Bairro dos CTT's km 7, Rangel-Luanda, Contactos:
            222041728, www.isutic.gov.ao
        </p>

    </body>
</html>
