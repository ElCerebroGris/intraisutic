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
        <p style="text-align: center; font-size: 26px;">
            REPUBLICA DE ANGOLA<br>
            MINISTERIO DO ENSINO SUPERIOR
        </p>

        <div class="cabecalho">
            <h4>
                <br>RELATORIO DOS EXAMES DE ACESSO DO ISUTIC
            </h4>
        </div>

        <div>
            <table cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Numero de Expediente</th>
                        <th>Nome</th>
                        <!--<th>BI</th>-->
                        <th>Genero</th>
                        <th>Idade</th>
                        <th>Data de Nascimento</th>
                        <th>Natural</th>
                        <!--<th>Endereço</th>
                        <th>Email</th>
                        <th>Telefone</th>-->
                        <th>Estado Civil</th>
                        <th>Provincia Residencia</th>
                        <th>Residencia</th>
                        <th>Codigo do Curso Inscrito no Ensino Superior</th>
                        <th>Nome do Curso Inscrito no Ensino Superior</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($candidatos as $a) {
                        ?>
                        <tr>
                            <td><?= $a->id_candidato ?></td>
                            <td><?= $a->nome ?></td>
                            <!--<td><?= $a->bi ?></td>-->
                            <td><?= $a->codigo_genero ?></td>
                            <td><?= $a->idade ?></td>
                            <td><?= $a->dia_nascimento.'-'.$a->mes_nascimento.'-'.$a->ano_nascimento ?></td>
                            <td><?= $a->codigo_naturalidade ?></td>
                            <!--<td><?= $a->endereco ?></td>
                            <td><?= $a->email ?></td>
                            <td><?= $a->telefone ?></td>-->
                            <td><?= $a->codigo_estado_civil ?></td>
                            <td><?= $a->codigo_provincia_residencia ?></td>
                            <td><?= $a->codigo_residencia ?></td>
                            <td><?= $a->codigo_curso_ensino_superior ?></td>
                            <td><?= $a->descricao_curso_ensino_superior ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </body>
</html>
