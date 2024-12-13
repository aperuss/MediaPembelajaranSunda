<x-app-layout>
    <div class="container bg-[#FEFAE0] min-h-screen min-w-screen ">
        <div class="flex justify-center text-6xl font-extrabold p-10">Kelas VII</div>
        <div class="flex flex-col md:flex-row px-10">
            <!-- Left Section -->
            <div class="flex-1 p-4">
                <div class="text-4xl font-bold flex justify-center mb-4">Semester 1</div>
                <div class="flex flex-col items-center">
                    <ol class="list-decimal list-inside text-2xl w-full">
                        <li class="flex flex-col items-center">
                            <div class="text-center">Dongéng</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab1kelas7') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Paguneman</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab2kelas7') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Nulis Pangalaman Pribadi</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab3kelas7') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Midangkeun Pangalaman Pribadi</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab4kelas7') }}">Masuk</a>
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
                            <div class="text-center">Pupujian</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab5kelas7') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Sajak</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab6kelas7') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Kaulinan Barudak</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab7kelas7') }}">Masuk</a>
                            </button>
                        </li>
                        <li class="flex flex-col items-center">
                            <div class="text-center">Aksara Sunda</div>
                            <button class="px-16 py-4 bg-[#C0C78C] rounded-lg my-3">
                                <a href="{{ route('bab8kelas7') }}">Masuk</a>
                            </button>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
