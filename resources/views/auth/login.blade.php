<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <!-- Container -->
    <div class="bg-cover bg-center bg-no-repeat min-h-screen w-full flex justify-center items-center relative" 
         style="background-image: url('{{ asset('img/login-bg.png') }}');">
        
        <!-- Background Blur -->
        <div class="absolute inset-0 backdrop-blur-sm bg-black bg-opacity-30"></div>

        <!-- Login Box -->
        <div class="relative bg-[#B99470] w-11/12 sm:w-4/5 md:w-3/5 lg:w-2/5 xl:w-1/3 h-auto flex flex-col items-center text-white border border-gray-300 rounded-xl p-8 shadow-xl">
            
            <!-- Header -->
            <h1 class="text-4xl sm:text-5xl font-semibold mb-4">LOGIN</h1>
            <div class="w-16 h-1 bg-white rounded-full mb-8"></div>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="w-full flex flex-col gap-6">
                @csrf
                
                <!-- Username Input -->
                <div class="flex flex-col gap-2">
                    <label for="email" class="text-lg sm:text-xl font-medium">USERNAME</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        :value="old('email')" 
                        required 
                        autofocus 
                        autocomplete="username" 
                        placeholder="Enter your username" 
                        class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring focus:ring-[#C0C78C] bg-gray-50"
                    />
                </div>

                <!-- Password Input -->
                <div class="flex flex-col gap-2">
                    <label for="password" class="text-lg sm:text-xl font-medium">PASSWORD</label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        required 
                        autocomplete="current-password" 
                        placeholder="Enter your password" 
                        class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring focus:ring-[#C0C78C] bg-gray-50"
                    />
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full py-3 mt-4 text-lg font-medium text-white bg-[#C0C78C] rounded-lg hover:bg-opacity-90 transition-all">
                    Masuk
                </button>
            </form>

            <!-- Optional Links (Uncomment if needed) -->
            <!-- <div class="text-sm mt-4">
                <a href="{{ route('password.request') }}" class="text-white underline hover:text-gray-300">
                    Forgot your password?
                </a>
            </div> -->
        </div>
    </div>
</body>
</html>
