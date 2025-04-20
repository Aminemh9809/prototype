<x-app-layout>
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">Ajouter un nouveau projet</h1>

        <form method="POST" action="{{ route('projects.store') }}">
            @csrf
            <div class="space-y-4">
                <input type="text" name="title" placeholder="Titre" class="w-full border rounded p-2" required>
                <textarea name="description" placeholder="Description" class="w-full border rounded p-2" required></textarea>
                <input type="number" name="goal_amount" placeholder="Objectif (en €)" class="w-full border rounded p-2" required>
                <input type="text" name="location" placeholder="Lieu (optionnel)" class="w-full border rounded p-2">
                <button class="bg-green-600 text-white px-4 py-2 rounded" type="submit">Créer</button>
            </div>
        </form>
    </div>
</x-app-layout>
