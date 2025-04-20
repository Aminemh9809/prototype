<x-app-layout>
    <div class="max-w-6xl mx-auto p-6">
        <h1 class="text-3xl font-bold text-green-700 mb-6">Tous les projets</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition">
                    <h2 class="text-xl font-semibold text-green-700">{{ $project->title }}</h2>
                    <p class="text-gray-600 mt-2">{{ Str::limit($project->description, 100) }}</p>
                    <p class="text-sm mt-2 text-gray-500">Objectif : {{ $project->goal_amount }} €</p>
                    <div class="mt-4">
                        <a href="{{ route('projects.show', $project) }}" class="text-green-600 hover:underline">Voir plus →</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
