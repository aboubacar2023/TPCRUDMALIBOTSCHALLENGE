<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une Catégorie</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Ajouter une Catégorie</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Nom</label>
                <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                <textarea id="description" name="description" class="w-full border rounded px-3 py-2" rows="4"></textarea>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer</button>
            <a href="categories_index.html" class="text-gray-600 hover:underline ml-4">Retour</a>
        </div>
    </div>
</body>
</html>