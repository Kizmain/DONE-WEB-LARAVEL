<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Done - Platform pintar untuk menyelesaikan tugas secara efisien dan kolaboratif.">
    <meta name="keywords" content="Done, tugas, kolaborasi, efisiensi, produktivitas">
    <meta name="author" content="Tim Done">
    <title>Done - Platform Penyelesaian Tugas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Mode gelap berdasarkan preferensi pengguna
        if (
            localStorage.theme === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('dark');
            localStorage.theme = html.classList.contains('dark') ? 'dark' : 'light';
            console.log(`Tema berubah ke ${localStorage.theme}`);
        }
    </script>
</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans antialiased">

    <!-- Header -->
    <header class="w-full border-b dark:border-gray-700">
        @if (Route::has('login'))
        <nav class="container mx-auto flex items-center justify-between px-6 py-4">
            <a class="text-2xl font-bold text-blue-600 dark:text-blue-400" href="#">Done</a>
            <ul class="flex space-x-6 font-medium">
                <li><a href="#tentang" class="hover:text-blue-500 transition">Tentang</a></li>
                <li><a href="#fitur" class="hover:text-blue-500 transition">Fitur</a></li>
                <li><a href="#tim" class="hover:text-blue-500 transition">Tim</a></li>
                <li><a href="{{ route('login') }}" class="hover:text-blue-500 transition">Masuk</a></li>
            </ul>
        </nav>
        @endif
    </header>

    <main>

        <!-- Hero -->
        <section class="h-screen flex flex-col justify-center items-center text-center text-white px-4"
            style="background-image: url('https://source.unsplash.com/1600x900/?workspace,team'); background-size: cover; background-position: center;">
            <h1 class="text-5xl font-bold mb-4 bg-black bg-opacity-30 px-4 py-2 rounded-lg">Selamat Datang di <span class="text-blue-400">Done</span></h1>
            <p class="text-xl max-w-2xl mb-6 bg-black bg-opacity-30 px-4 py-2 rounded-lg">Sederhanakan tugas Anda dengan alat profesional dan kolaboratif kami.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#tentang" class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-lg text-white transition">Pelajari Lebih Lanjut</a>
                <a href="{{ route('login') }}" class="bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg text-white transition">Masuk</a>
            </div>
        </section>

        <!-- Tentang -->
        <section id="tentang" class="py-20 container mx-auto px-4">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold mb-4">Tentang Kami</h2>
                <p class="text-lg mb-12 text-gray-600 dark:text-gray-300">Kami menyediakan platform terbaik untuk membantu Anda mengelola tugas secara efisien dengan teknologi terkini dan desain yang ramah pengguna.</p>
            </div>

            <div class="flex overflow-x-auto gap-6 snap-x snap-mandatory px-4">
                <div class="snap-center shrink-0 w-80 bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <img src="https://source.unsplash.com/random/300x200?technology" alt="Fitur 1" class="mb-4 rounded-lg w-full">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Fitur 1</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Deskripsi fitur pertama yang sangat berguna dan kuat.</p>
                </div>
                <div class="snap-center shrink-0 w-80 bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <img src="https://source.unsplash.com/random/300x200?workspace" alt="Fitur 2" class="mb-4 rounded-lg w-full">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Fitur 2</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Deskripsi fitur kedua yang mudah digunakan dan intuitif.</p>
                </div>
                <div class="snap-center shrink-0 w-80 bg-white dark:bg-gray-800 rounded-xl shadow-md p-6">
                    <img src="https://source.unsplash.com/random/300x200?productivity" alt="Fitur 3" class="mb-4 rounded-lg w-full">
                    <h3 class="text-xl font-semibold mb-2 dark:text-white">Fitur 3</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Deskripsi fitur ketiga yang cepat, andal, dan aman.</p>
                </div>
            </div>
        </section>

        <!-- Tim -->
        <section id="tim" class="py-20 bg-gray-100 dark:bg-gray-800">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-4xl font-bold mb-12">Tim Kami</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md p-6">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Berli" class="mx-auto mb-4 rounded-full w-24 h-24 object-cover">
                        <p class="text-lg font-semibold dark:text-white">Berli Feriz Adam</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Co-founder & Developer</p>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md p-6">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Yustika" class="mx-auto mb-4 rounded-full w-24 h-24 object-cover">
                        <p class="text-lg font-semibold dark:text-white">Yustika Dewi Amelia</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Desainer & Ahli UI</p>
                    </div>
                    <div class="bg-white dark:bg-gray-700 rounded-xl shadow-md p-6">
                        <img src="https://randomuser.me/api/portraits/men/54.jpg" alt="Rezfa" class="mx-auto mb-4 rounded-full w-24 h-24 object-cover">
                        <p class="text-lg font-semibold dark:text-white">Rezfa Alhaz</p>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Manajer Proyek</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-700 dark:bg-gray-900 text-gray-300 py-6 text-center">
        <p>&copy; 2025 Done. Semua hak dilindungi.</p>
    </footer>

</body>

</html>
