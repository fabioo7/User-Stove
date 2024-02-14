<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Autocomplete de Endereço</title>
</head>
<body>

<input id="autocomplete" placeholder="Digite seu endereço aqui" type="text"></input>

<script>
function autocompleteAddress(input) {
    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${input}`)
        .then(response => response.json())
        .then(data => {
            const suggestions = data.map(item => item.display_name);
            showSuggestions(suggestions);
        })
        .catch(error => console.error('Ocorreu um erro:', error));
}

function showSuggestions(suggestions) {
    const suggestionList = document.getElementById('suggestions');
    suggestionList.innerHTML = ''; // Limpa a lista de sugestões

    suggestions.forEach(suggestion => {
        const listItem = document.createElement('li');
        listItem.textContent = suggestion;
        suggestionList.appendChild(listItem);
    });
}

document.getElementById('autocomplete').addEventListener('input', function() {
    autocompleteAddress(this.value);
});
</script>

<ul id="suggestions"></ul>

</body>
</html>
