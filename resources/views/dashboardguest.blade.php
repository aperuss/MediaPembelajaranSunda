<x-app-layout>
    <div id="background-container" 
    class="bg-cover bg-center bg-no-repeat min-h-screen w-full flex justify-center items-center relative transition-all duration-500" 
    style="background-image: url('{{ asset('img/beranda1.png') }}');">
    <!-- Background blur -->
    <div class="absolute inset-0 backdrop-blur-sm" style="z-index: 1;"></div>

    <!-- Konten utama -->
    <div class="relative z-10 flex flex-col justify-center items-center mt-14 px-4 sm:px-8 md:px-10"> 
        <!-- Gambar logo responsif -->
        <img src="{{ asset('img/logo.png') }}" alt="Logo" 
             class="w-32 sm:w-40 md:w-56 lg:w-64 aspect-auto object-contain mb-6 sm:mb-8 md:mb-10">
        
        <!-- Teks utama -->
        <div class="text-white text-3xl sm:text-4xl md:text-6xl text-center">Wilujeung Sumping</div>
        <div id="subtitle-text" class="text-white text-xl sm:text-2xl md:text-4xl mt-4 sm:mt-6 transition-opacity duration-500 text-center">
            di wéb pangajaran basa sunda
        </div>

        <!-- Tombol -->
        @if(Auth::user()->peran == 'guru')
        <a href="{{ route('materisiswa') }}" class="relative z-20 bg-[#B99470] px-6 sm:px-8 md:px-10 py-2 rounded text-white mt-6 sm:mt-8  md:mt-10 text-base sm:text-lg md:text-xl">
            Matéri
        </a>
        @elseif(Auth::user()->peran == 'kelas7')
        <a href="{{ route('materikelas7') }}" class="relative z-20 bg-[#B99470] px-6 sm:px-8 md:px-10 py-2 rounded text-white mt-6 sm:mt-8  md:mt-10 text-base sm:text-lg md:text-xl">
            Matéri
        </a>
        @elseif(Auth::user()->peran == 'kelas8')
        <a href="{{ route('materikelas8') }}" class="relative z-20 bg-[#B99470] px-6 sm:px-8 md:px-10 py-2 rounded text-white mt-6 sm:mt-8  md:mt-10 text-base sm:text-lg md:text-xl">
            Matéri
        </a>
        @elseif(Auth::user()->peran == 'kelas9')
        <a href="{{ route('materikelas9') }}" class="relative z-20 bg-[#B99470] px-6 sm:px-8 md:px-10 py-2 rounded text-white mt-6 sm:mt-8  md:mt-10 text-base sm:text-lg md:text-xl">
            Matéri
        </a>
        @else
        <a href="#" class="relative z-20 bg-[#B99470] px-6 sm:px-8 md:px-10 py-2 rounded text-white mt-6 sm:mt-8  md:mt-10 text-base sm:text-lg md:text-xl">
            Matéri
        </a>
        @endif
    </div>

    <!-- Tombol Slide Kiri dan Kanan -->
    <div class="absolute inset-0 flex justify-between items-center" style="z-index: 2;">
        <button id="slide-left" class="bg-inherit text-white px-2 sm:px-4 py-1 rounded-full ml-4">
            <span class="text-4xl sm:text-6xl">&lt;</span>
        </button>
        <button id="slide-right" class="bg-inherit text-white px-2 sm:px-4 py-1 rounded-full mr-4">
            <span class="text-4xl sm:text-6xl">&gt;</span>
        </button>
    </div>
</div>



<div class="w-full min-h-96 bg-gradient-to-r from-[#B99470] to-[#8B705A] px-6 sm:px-16 lg:px-32 py-16">
    <div class="text-center">
        <h2 class="text-white text-3xl sm:text-4xl font-bold">Kontak Kami</h2>
        <p class="text-white text-lg sm:text-xl mt-4">Hubungi kami melalui informasi di bawah ini</p>
    </div>
    <div class="w-full h-0.5 bg-white mx-auto mt-6 mb-12" style="max-width: 150px;"></div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
        <!-- Kontak Telepon -->
        <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
            <img src="{{ asset('img/kontak.svg') }}" alt="Telepon" class="w-14 sm:w-16 mb-4">
            <h3 class="text-xl sm:text-2xl font-bold text-[#B99470]">Telepon</h3>
            <p class="text-gray-600 mt-2">+62 899-9606-368</p>
        </div>

        <!-- Kontak Email -->
        <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
            <img src="{{ asset('img/email.svg') }}" alt="Email" class="w-14 sm:w-16 mb-4">
            <h3 class="text-xl sm:text-2xl font-bold text-[#B99470]">Email</h3>
            <p class="text-gray-600 mt-2">susimulya@gmail.com</p>
        </div>

        <!-- Facebook -->
        <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
            <img src="{{ asset('img/facebook.svg') }}" alt="Facebook" class="w-14 sm:w-16 mb-4">
            <h3 class="text-xl sm:text-2xl font-bold text-[#B99470]">Facebook</h3>
            <p class="text-gray-600 mt-2">Susie</p>
        </div>

        <!-- Instagram -->
        <div class="flex flex-col items-center bg-white rounded-lg shadow-lg p-6">
            <img src="{{ asset('img/ig.svg') }}" alt="Instagram" class="w-14 sm:w-16 mb-4">
            <h3 class="text-xl sm:text-2xl font-bold text-[#B99470]">Instagram</h3>
            <p class="text-gray-600 mt-2">susimulyawati4</p>
        </div>
    </div>
</div>


    <script>
        const bgContainer = document.getElementById('background-container');
        const subtitleText = document.getElementById('subtitle-text');
        
        // Variabel untuk track slide yang aktif
        let currentSlide = 1;

        // Fungsi untuk mengubah slide
        function updateSlide(slide) {
            subtitleText.style.opacity = '0'; // Mulai dengan menyembunyikan teks

            setTimeout(() => {
                if (slide === 1) {
                    bgContainer.style.backgroundImage = "url('{{ asset('img/beranda1.png') }}')";
                    subtitleText.innerText = "di wéb pangajaran basa sunda";
                } else if (slide === 2) {
                    bgContainer.style.backgroundImage = "url('{{ asset('img/beranda2.png') }}')";
                    subtitleText.innerText = "Cikaracak ninggang batu laun-laun jadi legok";
                } else if (slide === 3) {
                    bgContainer.style.backgroundImage = "url('{{ asset('img/beranda3.png') }}')";
                    subtitleText.innerText = "Siswa siswi SMPN 3 Soreang";
                }
                
                subtitleText.style.opacity = '1'; // Tampilkan teks kembali
            }, 500); // Waktu delay sama dengan durasi transisi
        }

        // Fungsi untuk tombol slide kiri
        document.getElementById('slide-left').addEventListener('click', function() {
            currentSlide = currentSlide === 1 ? 3 : currentSlide - 1; // Jika di slide 1, kembali ke slide 3, jika tidak kurangi
            updateSlide(currentSlide);
        });

        // Fungsi untuk tombol slide kanan
        document.getElementById('slide-right').addEventListener('click', function() {
            currentSlide = currentSlide === 3 ? 1 : currentSlide + 1; // Jika di slide 3, kembali ke slide 1, jika tidak tambah
            updateSlide(currentSlide);
        });
    </script>
</x-app-layout>
