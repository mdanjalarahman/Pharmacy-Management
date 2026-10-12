<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PharmaCare - Create Account</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pharmacy: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-gradient-to-br from-green-50 via-white to-emerald-50">

<div class="min-h-screen flex items-center justify-center px-4 py-8">

    <div class="w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden">

        <div class="grid md:grid-cols-2">

            <!-- LEFT SIDE -->
            <div class="hidden md:flex relative bg-gradient-to-br from-green-600 to-emerald-800
                        p-12 text-white flex-col justify-between overflow-hidden">

                <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/10 rounded-full"></div>

                <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-white/10 rounded-full"></div>

                <div class="relative z-10">

                    <!-- Logo -->
                    <div class="flex items-center gap-3 mb-10">

                        <div class="w-14 h-14 bg-white rounded-2xl
                                    flex items-center justify-center shadow-lg">

                            <svg class="w-8 h-8 text-green-600"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 6v12M6 12h12"/>

                            </svg>

                        </div>

                        <div>

                            <h1 class="text-2xl font-bold">
                                Akij Wellness
                            </h1>

                            <p class="text-green-100 text-sm">
                                Wellness is our Main Priority
                            </p>

                        </div>

                    </div>


                    <!-- Heading -->
                    <div class="mt-16">

                        <h2 class="text-4xl font-bold leading-tight">

                            Your Wellness,<br>

                            <span class="text-green-200">
                                Our Priority.
                            </span>

                        </h2>

                        <p class="mt-6 text-green-100 leading-relaxed max-w-md">

                            Create your daily checkup account and enjoy
                            a simple and convenient pharmacy experience.

                        </p>

                    </div>

                </div>


                <!-- Features -->
                <div class="relative z-10 space-y-4">

                    <div class="flex items-center gap-3">

                        <div class="w-8 h-8 rounded-full bg-white/20
                                    flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-green-50">
                            Easy medicine ordering
                        </span>

                    </div>


                    <div class="flex items-center gap-3">

                        <div class="w-8 h-8 rounded-full bg-white/20
                                    flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-green-50">
                            Manage your pharmacy profile
                        </span>

                    </div>


                    <div class="flex items-center gap-3">

                        <div class="w-8 h-8 rounded-full bg-white/20
                                    flex items-center justify-center">
                            ✓
                        </div>

                        <span class="text-green-50">
                            Secure account management
                        </span>

                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE -->
            <div class="p-8 sm:p-12 lg:p-14">

                <!-- Mobile Logo -->
                <div class="md:hidden flex items-center gap-3 mb-8">

                    <div class="w-12 h-12 bg-green-100 rounded-xl
                                flex items-center justify-center">

                        <svg class="w-7 h-7 text-green-600"
                             fill="none"
                             stroke="currentColor"
                             viewBox="0 0 24 24">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 6v12M6 12h12"/>

                        </svg>

                    </div>

                    <div>

                        <h1 class="text-xl font-bold text-gray-900">
                            Akij Wellness
                        </h1>

                        <p class="text-xs text-gray-500">
                            Wellness is our Main Priority
                        </p>

                    </div>

                </div>


                <!-- Heading -->
                <div class="mb-7">

                    <h2 class="text-3xl font-bold text-gray-900">
                        Create Account
                    </h2>

                    <p class="mt-2 text-gray-500">
                        Register as a PharmaCare customer
                    </p>

                </div>


                <!-- Validation Errors -->
                @if ($errors->any())

                    <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200">

                        <ul class="text-sm text-red-600 space-y-1">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                <!-- Registration Form -->
                <form method="POST"
                      action="{{ route('register') }}"
                      class="space-y-5">

                    @csrf


                    <!-- Name -->
                    <div>

                        <label for="name"
                               class="block text-sm font-medium text-gray-700 mb-2">

                            Full Name

                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Enter your full name"
                            required
                            autofocus
                            autocomplete="name"
                            class="w-full px-4 py-3.5 border border-gray-200
                                   rounded-xl focus:outline-none focus:ring-2
                                   focus:ring-green-500 focus:border-transparent
                                   transition">

                    </div>


                    <!-- Email -->
                    <div>

                        <label for="email"
                               class="block text-sm font-medium text-gray-700 mb-2">

                            Email Address

                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            required
                            autocomplete="username"
                            class="w-full px-4 py-3.5 border border-gray-200
                                   rounded-xl focus:outline-none focus:ring-2
                                   focus:ring-green-500 focus:border-transparent
                                   transition">

                    </div>


                    <!-- Phone -->
                    <div>

                        <label for="phone"
                               class="block text-sm font-medium text-gray-700 mb-2">

                            Phone Number

                        </label>

                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            value="{{ old('phone') }}"
                            placeholder="01XXXXXXXXX"
                            autocomplete="tel"
                            class="w-full px-4 py-3.5 border border-gray-200
                                   rounded-xl focus:outline-none focus:ring-2
                                   focus:ring-green-500 focus:border-transparent
                                   transition">

                    </div>


                    <!-- Address -->
                    <div>

                        <label for="address"
                               class="block text-sm font-medium text-gray-700 mb-2">

                            Address

                        </label>

                        <textarea
                            id="address"
                            name="address"
                            rows="2"
                            placeholder="Enter your address"
                            autocomplete="street-address"
                            class="w-full px-4 py-3.5 border border-gray-200
                                   rounded-xl focus:outline-none focus:ring-2
                                   focus:ring-green-500 focus:border-transparent
                                   transition">{{ old('address') }}</textarea>

                    </div>


                    <!-- Password -->
                    <div>

                        <label for="password"
                               class="block text-sm font-medium text-gray-700 mb-2">

                            Password

                        </label>

                        <div class="relative">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Create a password"
                                required
                                autocomplete="new-password"
                                class="w-full px-4 py-3.5 pr-12 border border-gray-200
                                       rounded-xl focus:outline-none focus:ring-2
                                       focus:ring-green-500 focus:border-transparent
                                       transition">

                            <button
                                type="button"
                                onclick="togglePassword('password')"
                                class="absolute right-4 top-1/2
                                       -translate-y-1/2 text-gray-400
                                       hover:text-gray-600">

                                👁

                            </button>

                        </div>

                    </div>


                    <!-- Confirm Password -->
                    <div>

                        <label for="password_confirmation"
                               class="block text-sm font-medium text-gray-700 mb-2">

                            Confirm Password

                        </label>

                        <div class="relative">

                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Confirm your password"
                                required
                                autocomplete="new-password"
                                class="w-full px-4 py-3.5 pr-12 border border-gray-200
                                       rounded-xl focus:outline-none focus:ring-2
                                       focus:ring-green-500 focus:border-transparent
                                       transition">

                            <button
                                type="button"
                                onclick="togglePassword('password_confirmation')"
                                class="absolute right-4 top-1/2
                                       -translate-y-1/2 text-gray-400
                                       hover:text-gray-600">

                                👁

                            </button>

                        </div>

                    </div>


                    <!-- Submit -->
                    <button
                        type="submit"
                        class="w-full py-3.5 px-4 bg-green-600
                               hover:bg-green-700 text-white font-semibold
                               rounded-xl shadow-lg shadow-green-600/20
                               transition duration-200 hover:-translate-y-0.5">

                        Create Account

                    </button>

                </form>


                <!-- Login Link -->
                <div class="mt-7 text-center">

                    <p class="text-sm text-gray-500">

                        Already have an account?

                        <a href="{{ route('login') }}"
                           class="font-semibold text-green-600
                                  hover:text-green-700">

                            Sign in

                        </a>

                    </p>

                </div>


                <!-- Footer -->
                <div class="mt-8 pt-6 border-t border-gray-100">

                    <div class="flex items-center justify-center gap-2
                                text-xs text-gray-400">

                        🔒 Secure Management System

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

function togglePassword(id) {

    const password = document.getElementById(id);

    if (password.type === 'password') {
        password.type = 'text';
    } else {
        password.type = 'password';
    }

}

</script>

</body>
</html>