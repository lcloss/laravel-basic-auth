<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    <!-- Top Bar -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center py-4">
            <!-- Logo -->
            <div class="text-2xl font-bold text-gray-800">
                <a href="#">Logo</a>
            </div>

            <!-- Top Menu -->
            <div class="flex items-center space-x-6">
                <!-- Notifications -->
                <button class="relative text-gray-600 hover:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C8.67 6.165 8 7.462 8 9v5.159c0 .538-.214 1.055-.595 1.437L6 17h9z" />
                    </svg>
                    <!-- Notification Badge -->
                    <span class="absolute -top-0.5 -right-0.5 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">3</span>
                </button>

                <!-- User Avatar & Dropdown -->
                <div class="relative">
                    <button id="userMenuButton" class="flex items-center text-gray-600 hover:text-gray-800 focus:outline-none focus:ring" onclick="toggleUserMenu()">
                        <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/32" alt="User Avatar">
                        <span class="ml-2 font-medium">Utilizador</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="userMenuDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg z-20 hidden">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Perfil</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Configurações</a>
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="block w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Sair</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="flex flex-grow">
        <!-- Sidebar -->
        <nav class="bg-gray-800 text-gray-100 w-64 space-y-6 px-4 py-6">
            <a href="/app" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('users.index') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Utilizadores</a>
            <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Perfis</a>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700 w-full text-left">Sair</button>
            </form>
        </nav>

        <!-- Page Content -->
        <main class="flex-grow p-8">
            <!-- Page Content goes here -->
            @yield('content')
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 text-center text-gray-600">
            &copy; 2024 Sua Empresa. Todos os direitos reservados.
        </div>
    </footer>

</body>
<script>
    function toggleUserMenu() {
        var dropdown = document.getElementById('userMenuDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Fechar o menu de usuário ao clicar fora dele
    window.onclick = function(event) {
        if (!event.target.matches('#userMenuButton') && !event.target.closest('#userMenuButton')) {
            var dropdown = document.getElementById('userMenuDropdown');
            if (!dropdown.classList.contains('hidden')) {
                dropdown.classList.add('hidden');
            }
        }
    }
</script>
@yield('scripts')
</html>
