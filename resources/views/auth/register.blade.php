<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

<body class="min-h-screen flex items-center justify-center">

    <div class="glass w-full max-w-md rounded-3xl p-10 text-white">

        <h1 class="text-4xl font-bold text-center mb-2">
            Create Account
        </h1>

        <p class="text-center text-gray-300 mb-8">
            Welcome, create your account first
        </p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label class="block mb-2">
                    Name
                </label>

                <input type="text"
                    name="name"
                    class="w-full p-3 rounded-xl bg-white/10 border border-white/20 text-white"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Email
                </label>

                <input type="email"
                    name="email"
                    class="w-full p-3 rounded-xl bg-white/10 border border-white/20 text-white"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">
                    Password
                </label>

                <input type="password"
                    name="password"
                    class="w-full p-3 rounded-xl bg-white/10 border border-white/20 text-white"
                    required>
            </div>

            <div class="mb-6">
                <label class="block mb-2">
                    Confirm Password
                </label>

                <input type="password"
                    name="password_confirmation"
                    class="w-full p-3 rounded-xl bg-white/10 border border-white/20 text-white"
                    required>
            </div>

            <button
                type="submit"
                class="w-full bg-cyan-400 hover:bg-cyan-300 text-black font-bold py-3 rounded-xl transition">
                Register
            </button>

            <p class="text-center mt-6 text-gray-300">
                Already have account?
                <a href="{{ route('login') }}" class="text-cyan-300">
                    Login
                </a>
            </p>

        </form>

    </div>

</body>
</html>