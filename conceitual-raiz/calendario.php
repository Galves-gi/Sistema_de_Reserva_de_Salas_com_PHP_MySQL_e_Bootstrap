<?php
function diasPorMes($ano)
{
    // Array para armazenar o número de dias de cada mês
    $meses = [
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 => 'Outubro',
        11 => 'Novembro',
        12 => 'Dezembro'
    ];

    echo "<table border='1'>";

    foreach ($meses as $mes => $nomeMes) {
        // Obtendo o total de dias no mês
        $diasNoMes = date('t', strtotime("$ano-$mes-01"));

        // Exibindo o nome do mês e o número de dias
        echo "<tr><th colspan='2'>$nomeMes</th>";
        echo "<td>$diasNoMes</td></tr>";
    }

    echo "</table>";
}

// Exemplo de uso para o ano de 2024
diasPorMes(2024);
?>
