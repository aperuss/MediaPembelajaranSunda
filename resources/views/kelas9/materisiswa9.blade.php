<x-app-layout>
    <div class="container bg-[#FEFAE0] min-h-screen min-w-screen">
        
        <div class="flex justify-center text-6xl font-extrabold p-10">Kelas IX</div>
        <div class="flex flex-col md:flex-row px-10">
            <!-- Left Section -->
            <div class="flex-1 p-4">
                <div class="text-4xl font-bold flex justify-center mb-4">Semester 1</div>
                <div class="flex flex-col items-center">
                    <ol class="list-decimal list-inside text-2xl w-full">
                        <li class="flex flex-col items-center">
                            <div class="text-center">Panata Acara</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab1kelas9') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Deskripsi</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab2kelas9') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Bahasan</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab3kelas9') }}">Masuk</a>
                            </button>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Right Section -->
            <div class="flex-1 p-4">
                <div class="text-4xl font-bold flex justify-center mb-4">Semester 2</div>
                <div class="flex flex-col items-center">
                    <ol class="list-decimal list-inside text-2xl w-full">
                        <li class="flex flex-col items-center">
                            <div class="text-center">Novel</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab4kelas9') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Drama</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab5kelas9') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Nulis Laporan</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab6kelas9') }}">Masuk</a>
                            </button>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
