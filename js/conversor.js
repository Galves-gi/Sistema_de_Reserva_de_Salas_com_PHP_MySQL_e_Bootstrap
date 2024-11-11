// Função para converter CSV para JSON
function csvJSON(csv) {
    const lines = csv.split("\n");
    const result = [];
    const headers = lines[0].split(",");

    for (let i = 1; i < lines.length; i++) {
        const obj = {};
        const currentline = lines[i].split(",");

        for (let j = 0; j < headers.length; j++) {
            obj[headers[j].trim()] = currentline[j]?.trim();
        }
        result.push(obj);
    }
    return JSON.stringify(result, null, 2);
}

// Função para fazer download do JSON
function baixarJSON() {
    const fileInput = document.getElementById("csvFile");
    const file = fileInput.files[0];

    if (!file) {
        alert("Por favor, selecione um arquivo CSV primeiro!");
        return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
        const csv = e.target.result;
        const json = csvJSON(csv);
        const blob = new Blob([json], { type: "application/json" });
        const url = URL.createObjectURL(blob);

        const a = document.createElement("a");
        a.href = url;
        a.download = "data.json";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
    };
    reader.readAsText(file);
}
