<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="bg-cover bg-center bg-no-repeat min-h-screen w-full flex justify-center items-center relative " 
         style="background-image: url('{{ asset('img/login-bg.png') }}')">
         
         <div class="absolute inset-0 backdrop-blur-sm"></div>

         <div class="relative bg-[#B99470] w-3/5 h-4/5 flex flex-col text-white items-center justify-center border-solid border border-black rounded-md">
            <div class="text-6xl my-14">LOGIN</div>
            <div class="w-4/5 h-0.5 bg-white mb-14"></div>
            
            <div class="w-full">
                <form action="" class="flex flex-col items-center w-full">
                    <div class="mb-10 w-3/5 flex items-center justify-between">
                        <label class="text-4xl" for="">USERNAME :</label>
                        <input class="w-3/5 p-2 rounded-xl border-none text-black" type="text" name="" id="">
                    </div>
                    <div class=" w-3/5 flex items-center justify-between">
                        <label class="text-4xl" for="">PASSWORD :</label>
                        <input class="w-3/5 p-2 rounded-xl border-none text-black" type="password" name="" id="">
                    </div>
                    <div class="my-20">
                        <button class=" rounded-lg text-4xl px-20 py-4 bg-[#C0C78C]">Masuk</button>
                    </div>
                </form>
            </div>
         </div>

    </div>
</body>
</html>
