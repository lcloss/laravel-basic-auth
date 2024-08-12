@extends('layouts.app')
@section('content')
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Lista de Utilizadores</h1>

            <!-- Tabela de Utilizadores -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <tr>
                            <th class="py-3 px-6 text-left">Nome</th>
                            <th class="py-3 px-6 text-left">Email</th>
                            <th class="py-3 px-6 text-left">Perfil</th>
                            <th class="py-3 px-6 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">João Silva</td>
                            <td class="py-3 px-6 text-left">joao.silva@example.com</td>
                            <td class="py-3 px-6 text-left">Administrador</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 0h6m-6 4h6m-6 4h6m-6-4v4m0 4V8m0 8h-6" />
                                        </svg>
                                    </button>
                                    <button class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8" />
                                        </svg>
                                    </button>
                                    <button class="w-4 transform hover:text-red-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Outras linhas de utilizadores -->
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">João Silva</td>
                            <td class="py-3 px-6 text-left">joao.silva@example.com</td>
                            <td class="py-3 px-6 text-left">Administrador</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 0h6m-6 4h6m-6 4h6m-6-4v4m0 4V8m0 8h-6" />
                                        </svg>
                                    </button>
                                    <button class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8" />
                                        </svg>
                                    </button>
                                    <button class="w-4 transform hover:text-red-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">João Silva</td>
                            <td class="py-3 px-6 text-left">joao.silva@example.com</td>
                            <td class="py-3 px-6 text-left">Administrador</td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <button class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m6 0h6m-6 4h6m-6 4h6m-6-4v4m0 4V8m0 8h-6" />
                                        </svg>
                                    </button>
                                    <button class="w-4 mr-2 transform hover:text-blue-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8" />
                                        </svg>
                                    </button>
                                    <button class="w-4 transform hover:text-red-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Paginação -->
            <div class="mt-4">
                <ul class="flex justify-center">
                    <li>
                        <button class="px-3 py-1 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">Anterior</button>
                    </li>
                    <li>
                        <button class="px-3 py-1 mx-1 bg-blue-600 text-white rounded-lg">1</button>
                    </li>
                    <li>
                        <button class="px-3 py-1 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">2</button>
                    </li>
                    <li>
                        <button class="px-3 py-1 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">3</button>
                    </li>
                    <li>
                        <button class="px-3 py-1 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">Próximo</button>
                    </li>
                </ul>
            </div>
@endsection
@section('scripts')
    <script>
        function toggleUserMenu() {
            var dropdown = document.getElementById('userMenuDropdown');
            dropdown.classList.toggle('hidden');
        }

        window.onclick = function(event) {
            if (!event.target.matches('#userMenuButton') && !event.target.closest('#userMenuButton')) {
                var dropdown = document.getElementById('userMenuDropdown');
                if (!dropdown.classList.contains('hidden')) {
                    dropdown.classList.add('hidden');
                }
            }
        }
    </script>
@endsection
