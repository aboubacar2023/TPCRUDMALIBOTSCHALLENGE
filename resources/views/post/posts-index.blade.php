<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Liste des Posts</h1>
        
        <div class="mb-4">
            <a href="post_create.html" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Ajouter un Post</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-600">Titre</th>
                        <th class="px-6 py-3 text-left text-gray-600">Contenu</th>
                        <th class="px-6 py-3 text-left text-gray-600">Catégorie</th>
                        <th class="px-6 py-3 text-left text-gray-600">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="px-6 py-4">Post Exemple</td>
                        <td class="px-6 py-4">Contenu du post...</td>
                        <td class="px-6 py-4">Technologie</td>
                        <td class="px-6 py-4">
                            <a href="post_update.html" class="text-blue-600 hover:underline">Modifier</a>
                            <a href="#" class="text-red-600 hover:underline ml-4">Supprimer</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>