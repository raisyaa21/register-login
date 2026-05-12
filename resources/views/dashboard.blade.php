<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body{
            background-image:url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
        }

        .glass{
            backdrop-filter: blur(15px);
            background: rgba(10,20,40,0.45);
            border:1px solid rgba(255,255,255,0.15);
            box-shadow:0 8px 32px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center text-white">

    <div class="glass p-12 rounded-3xl text-center w-full max-w-2xl">

        <h1 class="text-5xl font-bold mb-4">
            Ocean Dashboard
        </h1>

        <p class="text-gray-300 text-lg mb-8">
            Welcome to your dashboard
        </p>

        <div class="grid grid-cols-2 gap-5">

            <div class="bg-white/10 p-6 rounded-2xl">
                <h2 class="text-3xl font-bold text-cyan-300">
                    24
                </h2>

                <p class="text-gray-300 mt-2">
                    Posts
                </p>
            </div>

            <div class="bg-white/10 p-6 rounded-2xl">
                <h2 class="text-3xl font-bold text-cyan-300">
                    12
                </h2>

                <p class="text-gray-300 mt-2">
                    Visitors
                </p>
            </div>

        </div>
        <form method="POST" action="{{ route('logout') }}" class="mt-8">
            @csrf

            <button
                type="submit"
                class="bg-red-500 hover:bg-red-600 px-6 py-3 rounded-xl font-bold transition">
                Logout
            </button>
        </form>

    </div>

</body>
</html>