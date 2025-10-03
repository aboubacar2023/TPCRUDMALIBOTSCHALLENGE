<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Ajouter un Post</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Titre</label>
                <input type="text" id="title" name="title" class="w-full border rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-bold mb-2">Contenu</label>
                <textarea id="content" name="content" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
            </div>
            <div class="mb-4">
                <label for="category_id" class="block text-gray-700 font-bold mb-2">Catégorie</label>
                <select id="category_id" name="category_id" class="w-full border rounded px-3 py-2" required>
                    <option value=""></option>
                    <option value="1">Technologie</option>
                    <option value="2">Science</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Créer</button>
            <a href="posts_index.html" class="text-gray-600 hover:underline ml-4">Retour</a>
        </div>
    </div>
</body>
</html>