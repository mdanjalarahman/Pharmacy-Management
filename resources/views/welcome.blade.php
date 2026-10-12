<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Akij Wellness - Login</title>

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

                <!-- ================= LEFT SIDE ================= -->
                <div class="hidden md:flex relative bg-gradient-to-br from-green-600 to-emerald-800 p-12 text-white flex-col justify-between overflow-hidden">

                    <!-- Decorative circles -->
                    <div class="absolute -top-24 -right-24 w-72 h-72 bg-white/10 rounded-full"></div>
                    <div class="absolute -bottom-32 -left-32 w-80 h-80 bg-white/10 rounded-full"></div>

                    <div class="relative z-10">

                        <!-- Logo -->
                        <div class="flex items-center gap-3 mb-10">

                            <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg">

                                <!-- Pharmacy Cross -->
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

                        <!-- Main text -->
                        <div class="mt-16">

                            <h2 class="text-4xl font-bold leading-tight">
                                Your Life will be,
                                <br>
                                <span class="text-green-200">
                                    Smarter & Simpler.
                                </span>
                            </h2>

                            <p class="mt-6 text-green-100 leading-relaxed max-w-md">
                                Manage all from one powerful platform.
                            </p>

                        </div>

                    </div>

                    <!-- Features -->
                    <div class="relative z-10 space-y-4">

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                ✓
                            </div>

                            <span class="text-green-50">
                                Easy inventory management
                            </span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                ✓
                            </div>

                            <span class="text-green-50">
                                Secure sales & customer management
                            </span>
                        </div>

                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                ✓
                            </div>

                            <span class="text-green-50">
                                Real-time Service 
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-white/20 flex items-center justify-center">
                                ✓
                            </div>

                            <span class="text-green-50">
                               Easier For Life
                            </span>
                        </div>

                    </div>


                </div>


                <!-- ================= RIGHT SIDE ================= -->
                <div class="p-8 sm:p-12 lg:p-16">

                    <!-- Mobile Logo -->
                    <div class="md:hidden flex items-center gap-3 mb-10">

                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">

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
                                Wellness is our main priority
                            </p>
                        </div>

                    </div>


                    <!-- Login heading -->
                    <div class="mb-8">

                        <h2 class="text-3xl font-bold text-gray-900">
                            Welcome Back
                        </h2>

                        <p class="mt-2 text-gray-500">
                            Sign in to continue to your account
                        </p>

                    </div>


                    <!-- Login Form -->
                    <form action="{{ route('login') }}" method="POST">
                      @csrf
                        <div>

                            <label for="email"
                                   class="block text-sm font-medium text-gray-700 mb-2">

                                Email Address

                            </label>

                            <div class="relative">

                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">

                                    <svg class="w-5 h-5 text-gray-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>

                                    </svg>

                                </div>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="you@example.com"
                                    class="w-full pl-12 pr-4 py-3.5 border border-gray-200 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-green-500
                                           focus:border-transparent transition"
                                    required
                                >

                            </div>

                        </div>


                        <!-- Password -->
                        <div>

                            <div class="flex items-center justify-between mb-2">

                                <label for="password"
                                       class="block text-sm font-medium text-gray-700">

                                    Password

                                </label>

                                <a href="#"
                                   class="text-sm font-medium text-green-600 hover:text-green-700">

                                    Forgot password?

                                </a>

                            </div>

                            <div class="relative">

                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">

                                    <svg class="w-5 h-5 text-gray-400"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v2h8z"/>

                                    </svg>

                                </div>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    placeholder="Enter your password"
                                    class="w-full pl-12 pr-12 py-3.5 border border-gray-200 rounded-xl
                                           focus:outline-none focus:ring-2 focus:ring-green-500
                                           focus:border-transparent transition"
                                    required
                                >

                                <button
                                    type="button"
                                    onclick="togglePassword()"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">

                                    <svg id="eyeIcon"
                                         class="w-5 h-5"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>

                                    </svg>

                                </button>

                            </div>

                        </div>


                        <!-- Remember me -->
                        <div class="flex items-center">

                            <input
                                type="checkbox"
                                id="remember"
                                name="remember"
                                class="w-4 h-4 text-green-600 border-gray-300 rounded
                                       focus:ring-green-500">

                            <label for="remember"
                                   class="ml-2 text-sm text-gray-600">

                                Remember me

                            </label>

                        </div>


                        <!-- Login button -->
                        <button
                            type="submit"
                            class="w-full py-3.5 px-4 bg-green-600 hover:bg-green-700
                                   text-white font-semibold rounded-xl shadow-lg
                                   shadow-green-600/20 transition duration-200
                                   hover:-translate-y-0.5">

                            Sign In

                        </button>

                    </form>


                    <!-- Register -->
                    <div class="mt-8 text-center">

                        <p class="text-sm text-gray-500">

                            New customer?

                           <a href="{{ route('register') }}"
   class="font-semibold text-green-600 hover:text-green-700">
    Create an account
</a>

                        </p>

                    </div>


                    <!-- Security -->
                    <div class="mt-10 pt-6 border-t border-gray-100">

                        <div class="flex items-center justify-center gap-2 text-xs text-gray-400">

                            <svg class="w-4 h-4"
                                 fill="none"
                                 stroke="currentColor"
                                 viewBox="0 0 24 24">

                                <path stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v2h8z"/>

                            </svg>

                            Your Security Our Concern

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Password toggle -->
    <script>

        function togglePassword() {

            const password = document.getElementById('password');

            const eyeIcon = document.getElementById('eyeIcon');

            if (password.type === 'password') {

                password.type = 'text';

            } else {

                password.type = 'password';

            }

        }

    </script>

</body>
</html>