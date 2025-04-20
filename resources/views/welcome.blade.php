<x-guest-layout>
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-20 lg:flex lg:items-center lg:justify-between">
            <div class="max-w-2xl">
                <h1 class="text-4xl sm:text-5xl font-bold text-green-700 leading-tight">
                    🌍 EcoFund <br> Soutenez les projets qui changent votre région.
                </h1>
                <p class="mt-6 text-lg text-gray-600">
                    Participez à la transition écologique locale. Lancez ou financez des initiatives durables dans votre ville.
                </p>
                <div class="mt-8 flex gap-4">
                    <a href="{{ route('projects.index') }}" class="px-6 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                        Voir les projets
                    </a>
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-white border border-green-600 text-green-700 rounded-lg hover:bg-green-100 transition">
                        Créer un compte
                    </a>
                </div>
            </div>
            <div class="mt-12 lg:mt-0">
                <img src="https://images.unsplash.com/photo-1593642532973-d31b6557fa68" alt="EcoFund Illustration" class="rounded-xl shadow-xl w-full max-w-md">
            </div>
        </div>
    </section>

    <section class="bg-green-50 py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-semibold text-green-800 mb-8 text-center">Pourquoi choisir EcoFund ?</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl mb-4">🌱</div>
                    <h3 class="text-xl font-bold text-green-700">Projets responsables</h3>
                    <p class="text-gray-600 mt-2">Chaque projet est sélectionné pour son impact écologique local.</p>
                </div>
                <div>
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold text-green-700">Communauté engagée</h3>
                    <p class="text-gray-600 mt-2">Rejoignez un réseau de citoyens qui veulent faire bouger les choses.</p>
                </div>
                <div>
                    <div class="text-4xl mb-4">💳</div>
                    <h3 class="text-xl font-bold text-green-700">Contributions simples</h3>
                    <p class="text-gray-600 mt-2">Soutenez un projet en quelques clics. Chaque don compte.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t py-6 text-center text-sm text-gray-500">
        © 2025 EcoFund. Conçu avec ❤️ en France.
    </footer>
</x-guest-layout>
