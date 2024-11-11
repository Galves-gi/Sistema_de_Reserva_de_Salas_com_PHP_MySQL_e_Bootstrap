// Obtém os elementos do HTML
const monthYearElement = document.getElementById('monthYear');
const daysContainer = document.getElementById('days');  // Referência ao <tbody>
const selectedDayElement = document.getElementById('selectedDay');
const prevMonthButton = document.getElementById('prevMonth');
const nextMonthButton = document.getElementById('nextMonth');

let currentDate = new Date();

// Função para atualizar o calendário
function updateCalendar() {
    // Obtém o mês e ano atual
    const currentMonth = currentDate.getMonth(); // 0 = Janeiro, 11 = Dezembro
    const currentYear = currentDate.getFullYear();

    // Exibe o mês e ano
    monthYearElement.textContent = `${getMonthName(currentMonth)} ${currentYear}`;

    // Obtém o primeiro dia do mês e o número de dias do mês
    const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
    const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
    const numberOfDays = lastDayOfMonth.getDate();
    const firstWeekday = firstDayOfMonth.getDay(); // Dia da semana do primeiro dia do mês

    // Limpa os dias anteriores
    daysContainer.innerHTML = '';

    // Inicia a variável para controlar a linha (semana)
    let row = document.createElement('tr');
    daysContainer.appendChild(row);

    // Adiciona células vazias para os dias antes do início do mês
    for (let i = 0; i < firstWeekday; i++) {
        const emptyDay = document.createElement('td');
        row.appendChild(emptyDay);
    }

    // Preenche os dias do mês
    for (let day = 1; day <= numberOfDays; day++) {
        // Cria o <td> para o dia
        const dayElement = document.createElement('td');
        dayElement.textContent = day;

        // Adiciona os atributos data-bs-toggle e data-bs-target
        dayElement.setAttribute('data-bs-toggle', 'modal');
        dayElement.setAttribute('data-bs-target', '#exampleModal');
        
        // Adiciona as classes necessárias para o estilo
        dayElement.classList.add('flex-column', 'justify-content-between', 'days');
        dayElement.id = `day-${day}`;  // ID único para cada dia (evita duplicação de ID)

        // Ação de clique no dia
        dayElement.onclick = () => selectDay(day);

        // Adiciona o dia à linha (tr)
        row.appendChild(dayElement);

        // Quando a linha atingir 7 dias, cria uma nova linha (semana)
        if (row.children.length === 7) {
            row = document.createElement('tr');
            daysContainer.appendChild(row);
        }
    }

    // Atualiza a semana atual
    updateWeek();
}

// Função para obter o nome do mês
function getMonthName(monthIndex) {
    const months = [
        'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
        'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
    ];
    return months[monthIndex];
}

// Função para selecionar um dia
function selectDay(day) {
    // Limpa a seleção anterior
    const allDays = document.querySelectorAll('.days');
    allDays.forEach(d => d.classList.remove('selected'));

    // Marca o dia selecionado
    const selectedDayElement = [...document.querySelectorAll('.days')].find(d => d.textContent == day);
    selectedDayElement.classList.add('selected');

    // Exibe o dia selecionado
    selectedDayElement && (selectedDayElement.textContent ? selectedDayElement.textContent : "Dia não selecionado");

    // Atualiza a semana atual
    updateWeek();
}

// Função para atualizar a semana atual
function updateWeek() {
    const selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const weekNumber = Math.ceil(selectedDate.getDate() / 7);

    const week = `Semana ${weekNumber}`;

    selectedDayElement.textContent = "Semana 6" + week;
}

// Evento para o botão do mês anterior
prevMonthButton.onclick = () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    updateCalendar();
};

// Evento para o botão do próximo mês
nextMonthButton.onclick = () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    updateCalendar();
};

// Inicia o calendário
updateCalendar();
