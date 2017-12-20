<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 19/12/17
 * Time: 18:25
 */

// Variaveis de Tamanho
$mesq = ($result['txt_margem_lateral'] * 10); // Margem Esquerda (mm)
$msup = ($result['txt_margem_superior'] * 10); // Margem Superior (mm) margem mínima dois pois ficou cortando
$leti = ($result['txt_largura'] * 10); // Largura da Etiqueta (mm)
$aeti = ($result['txt_altura'] * 10); // Altura da Etiqueta (mm)

/* Uma dica: estes tamanhos você pode verificar com uma régua ou na própria caixa da etiqueta, seja bem preciso e sugiro que faça o teste na impressora que vai ser utilizada, pois pode acontecer de na impressão começar a subir ou descer, portanto, você deverá aumentar ou diminuir a altura da etiqueta.

  Outra coisa muito importante é o tamanho do papel, que deve ser bem preciso. Caso necessário, configure um papel próprio.

 */
$pdf = new FPDF('P', 'mm', array(40, 110)); //papel personalizado
$pdf->Open();
$pdf->AddPage();

$pdf->SetMargins(0, 2); //seta as margens do documento
$pdf->SetDisplayMode(100, 'continuous'); //define o nivel de zoom do documento PDF

        if ($linha == $linha_etiqueta) {
            $pdf->AddPage();
            $linha = 0;
        }

        if ($coluna == $coluna_etiqueta) { // Se for a segunda coluna
            $coluna = 0; // $coluna volta para o valor inicial
            $linha++;
        }

        if ($linha == $linha_etiqueta) { // Se for a última linha da página
            $pdf->AddPage(); // Adiciona uma nova página
            $linha = 0; // $linha volta ao seu valor inicial
        }

         $posicaoV = $linha * $aeti;
        $posicaoH = $coluna * $leti;

        if ($coluna == "0") { // Se a coluna for 0
            $somaH = $mesq; // Soma Horizontal recebe a margem da esquerda inicial
        } else {
            $somaH = $mesq + $posicaoH; // Soma Horizontal recebe a margem inicial mais a posiçãoH
        }

        if ($linha == "0") { // Se a linha for 0
            $somaV = $msup; // Soma Vertical é apenas a margem superior inicial
        } else {
            $somaV = $msup + $posicaoV; // Soma Vertical é a margem superior inicial mais a posição
        }

    //Os valores abaixo são dados que informei
        $pdf->SetMargins(1, 1);
        $pdf->Text($somaH, $somaV + 3, "PROCESSO:    ".$txt_numero);
        $pdf->Text($somaH, $somaV + 6, "DATA: ".$dt_protocolo);
        $coluna++;

        unset($posicaoH);
        unset($sigla_orgao);
        unset($posicaoV);
        unset($somaH);
        unset($somaV);
        unset($cod_numero_volume);
$pdf->Output();