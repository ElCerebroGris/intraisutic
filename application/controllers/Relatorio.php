<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Relatorio extends CI_Controller {

    public function gerar2() {

        $this->db->where('estado', 1);
        $this->db->join('naturalidade', 'naturalidade.id_naturalidade=candidato.id_naturalidade');
        $this->db->join('residencia', 'residencia.id_residencia=candidato.id_residencia');
        $this->db->join('curso_ensino_superior', 'curso_ensino_superior.id_curso_ensino_superior=candidato.codigo_curso_ensino_superior');
        $dados['candidatos'] = $this->db->get('candidato')->result();
        $msg = $this->load->view('pdf/relatorio', $dados, true);

        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L', 'margin-left' => 50]);
        $html = $msg;
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function gerar() {
        $this->db->where('estado', 1);
        $this->db->join('naturalidade', 'naturalidade.id_naturalidade=candidato.id_naturalidade');
        $this->db->join('residencia', 'residencia.id_residencia=candidato.id_residencia');
        $this->db->join('provincia', 'provincia.codigo=residencia.codigo_provincia_residencia');
        $this->db->join('municipio', 'municipio.codigo_municipio=residencia.codigo_municipio');
        $this->db->join('genero', 'genero.codigo_genero=candidato.codigo_genero');
        $this->db->join('educacao_especial', 'educacao_especial.codigo_educacao_especial=candidato.codigo_educacao_especial');
        $this->db->join('trabalho', 'trabalho.codigo_trabalho=candidato.codigo_trabalho');
        $this->db->join('precedencia_escolar', 'precedencia_escolar.codigo_precedencia_escolar=candidato.codigo_precedencia_escolar');
        $this->db->join('estado_civil', 'estado_civil.codigo_estado_civil=candidato.codigo_estado_civil');
        $this->db->join('curso_ensino_superior', 'curso_ensino_superior.id_curso_ensino_superior=candidato.codigo_curso_ensino_superior');
        $this->db->group_by('id_candidato');
        $dados['candidatos'] = $this->db->get('candidato')->result();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'ISUTIC');

        $sheet->setCellValue('A4', 'Numero de Expediente');
        $sheet->setCellValue('B4', 'Nome Completo');
        $sheet->setCellValue('C4', 'Bilhete de Identidade');
        $sheet->setCellValue('D4', 'Genero');
        $sheet->setCellValue('E4', 'Idade');
        $sheet->setCellValue('F4', 'Data de Nascimento');
        $sheet->setCellValue('G4', 'Natural');
        $sheet->setCellValue('H4', 'Endereço');
        $sheet->setCellValue('I4', 'Email');
        $sheet->setCellValue('J4', 'Telefone');
        $sheet->setCellValue('K4', 'Estado Civil');
        $sheet->setCellValue('L4', 'Provincia Residencia');
        $sheet->setCellValue('M4', 'Municipio e Comuna de Residencia');
        $sheet->setCellValue('N4', 'Necessidade de Educação Especial');
        $sheet->setCellValue('O4', 'Precedencia Escolar do Ensino Medio');
        $sheet->setCellValue('P4', 'Curso do Ensino Medio');
        $sheet->setCellValue('Q4', 'Código do Curso Inscrito no Ensino Superior ');
        $sheet->setCellValue('R4', 'Trabalhador');
        $sheet->setCellValue('S4', 'Nome da Instituição laboral');
        $sheet->setCellValue('T4', 'Nota do Exame de Acesso');
        $sheet->setCellValue('U4', 'Admissão');
        $sheet->setCellValue('V4', 'Estudante Matriculado pela 1ª Vez');
        for ($x = 0; $x < count($dados['candidatos']); $x++) {
            $sheet->setCellValue('A' . ($x + 6), $dados['candidatos'][$x]->id_candidato);
            $sheet->setCellValue('B' . ($x + 6), $dados['candidatos'][$x]->nome);
            $sheet->setCellValue('C' . ($x + 6), $dados['candidatos'][$x]->bi);
            $sheet->setCellValue('D' . ($x + 6), $dados['candidatos'][$x]->codigo_genero);
            $sheet->setCellValue('E' . ($x + 6), $dados['candidatos'][$x]->idade);
            $sheet->setCellValue('F' . ($x + 6), $dados['candidatos'][$x]->dia_nascimento . '-' .
                    $dados['candidatos'][$x]->mes_nascimento . '-' . $dados['candidatos'][$x]->ano_nascimento);
            $sheet->setCellValue('G' . ($x + 6), $dados['candidatos'][$x]->codigo_naturalidade);
            $sheet->setCellValue('H' . ($x + 6), $dados['candidatos'][$x]->endereco);
            $sheet->setCellValue('I' . ($x + 6), $dados['candidatos'][$x]->email);
            $sheet->setCellValue('J' . ($x + 6), $dados['candidatos'][$x]->telefone);
            $sheet->setCellValue('K' . ($x + 6), $dados['candidatos'][$x]->codigo_estado_civil);
            $sheet->setCellValue('L' . ($x + 6), $dados['candidatos'][$x]->codigo_provincia);
            $sheet->setCellValue('M' . ($x + 6), $dados['candidatos'][$x]->codigo_provincia);
            $sheet->setCellValue('N' . ($x + 6), $dados['candidatos'][$x]->codigo_educacao_especial);
            $sheet->setCellValue('O' . ($x + 6), $dados['candidatos'][$x]->codigo_precedencia_escolar);
            $sheet->setCellValue('P' . ($x + 6), $dados['candidatos'][$x]->curso_de_ensino_medio);
            $sheet->setCellValue('Q' . ($x + 6), $dados['candidatos'][$x]->codigo_provincia);
            $sheet->setCellValue('R' . ($x + 6), $dados['candidatos'][$x]->codigo_trabalho);
            $sheet->setCellValue('S' . ($x + 6), $dados['candidatos'][$x]->instituicao_laboral);
            $sheet->setCellValue('V' . ($x + 6), $dados['candidatos'][$x]->primeira_vez);
        }

        $writer = new Xlsx($spreadsheet);

        $filename = 'Relatorio das Inscrições';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output'); // download file 
    }

}
