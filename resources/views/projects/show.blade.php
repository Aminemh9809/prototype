<x-app-layout>
    <div class="max-w-3xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-green-700 mb-4">{{ $project->title }}</h1>
        <p class="text-gray-700 mb-4">{{ $project->description }}</p>

        <div class="mb-6">
            <p><strong>Objectif :</strong> {{ $project->goal_amount }} €</p>
            <p><strong>Collecté :</strong> {{ $project->current_amount }} €</p>
        </div>

        @auth
            <form action="{{ route('contributions.store', $project) }}" method="POST" class="bg-green-50 p-4 rounded-lg shadow">
                @csrf
                <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">Montant du don (€)</label>
                <input type="number" name="amount" id="amount" min="1" required
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 mb-4">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Faire un don
                </button>
            </form>
        @else
            <div class="text-center bg-yellow-100 border border-yellow-400 text-yellow-700 p-4 rounded">
                <p>Veuillez <a href="{{ route('login') }}" class="underline">vous connecter</a> pour contribuer.</p>
            </div>
        @endauth
    </div>
</x-app-layout>
