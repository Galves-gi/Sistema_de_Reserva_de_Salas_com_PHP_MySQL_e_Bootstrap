<?php
// Incluir configuração de banco de dados
include 'php/db_config.php';

// Consulta SQL para pegar os dados da tabela 'events'
$sql = "SELECT id, date, event, turno, hora, hora_final, sala FROM events";
$result = $conn->query($sql);

// Gerar a tabela HTML
echo '<table id="eventsTable" class="display">';
echo '<thead>';
echo '<tr>';
echo '<th>Data</th>';
echo '<th>Evento</th>';
echo '<th>Turno</th>';
echo '<th>Hora</th>';
echo '<th>Hora limite</th>';
echo '<th>Sala</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

// Verificar se há resultados
if ($result->num_rows > 0) {
    // Exibir dados de cada linha
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['date']) . '</td>';
        echo '<td>' . htmlspecialchars($row['event']) . '</td>';
        echo '<td>' . htmlspecialchars($row['turno']) . '</td>';
        echo '<td>' . htmlspecialchars($row['hora']) . '</td>';
        echo '<td>' . htmlspecialchars($row['hora_final']) . '</td>';
        echo '<td>' . htmlspecialchars($row['sala']) . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="5">Nenhum evento encontrado</td></tr>';
}

echo '</tbody>';
echo '</table>';

// Fechar a conexão
$conn->close();
?>
