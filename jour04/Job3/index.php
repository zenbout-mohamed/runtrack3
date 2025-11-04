<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 03 - Pokémon</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Filtrer les Pokémon</h1>

    <form id="filter-form">
        <input type="text" id="id" placeholder="ID">
        <input type="text" id="nom" placeholder="Nom">
        <select id="type">
            <option value="">--Type--</option>
            <option value="Feu">Feu</option>
            <option value="Eau">Eau</option>
            <option value="Plante">Plante</option>
        </select>
        <input type="button" id="filtrer" value="Filtrer">
    </form>

    <div id="resultat"></div>
</body>
</html>
