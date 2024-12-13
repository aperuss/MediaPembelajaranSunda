<x-app-layout>
    <div class="container bg-[#FEFAE0] min-h-screen min-w-screen">
        <!-- Gambar Profil -->
        <div class="flex justify-center">
            <img src="{{ asset('img/pp.jpg') }}" class="rounded-full w-40 sm:w-60 md:w-72 lg:w-80 mt-10">
        </div>
        
        <!-- Nama dan Deskripsi -->
        <div class="text-2xl sm:text-3xl md:text-4xl font-extrabold flex justify-center my-8 text-center">
            SUSI MULYAWATI S. Pd
        </div>
        
        <div class="flex justify-center px-4 sm:px-10 md:px-20 text-justify sm:text-center">
            <p class="text-sm sm:text-base md:text-lg">
                Aya saurang guru basa Sunda anu lahir dina tanggal 9 April 1973, hirupna pinuh ku dedikasi kana dunya pendidikan. Anjeunna ngamimitian sakola di SD Cikuya, tempat anjeunna mimiti neuleuman elmu pangaweruh. Sanggeus tamat ti SD, anjeunna nuluykeun sakolana ka SMP Negeri 1 Pagaden, tempat anu masihan pangaweruh leuwih jero. Saatosna, anjeunna neruskeun ka SMA Negeri 2 Subang, tempat kahayangna pikeun jadi guru mimiti jelas katingali.

                Sanggeus tamat SMA, kahayangna pikeun ngamajukeun basa Sunda ngajurung anjeunna pikeun ngalajengkeun kuliah ka jurusan basa Sunda di Fakultas Pendidikan Bahasa dan Sastra (FPBS) IKIP Bandung. Di dieu, anjeunna ngagedékeun pamahaman ngeunaan budaya Sunda, literatur, jeung cara ngajar basa Sunda, pikeun engké dibagi ka murid-muridna.
                
                Anjeunna boga tilu anak, anu kahiji ngarana Amalia Putri, anu kadua Rahma Alia, jeung anu bungsu Haidar Ali Dzulfikar. Barudakna jadi motivasi tambahan pikeun anjeunna dina ngalaksanakeun tugasna salaku guru. Dina taun 1997, anjeunna mimiti ngajar sacara resmi di SMP Sindangkerta. Kalayan sumanget jeung rasa tanggung jawab anu kuat, anjeunna ngabaktikeun dirina pikeun ngajar basa Sunda ka murid-muridna.
                
                Sanggeus sababaraha taun ngajar di SMP Sindangkerta, dina taun 2006, anjeunna dipindahkeun ka SMP Negeri 3 Soreang. Di tempat anyar ieu, anjeunna tetep sumanget pikeun nyebarkeun elmu ka generasi anyar nepi ka ayeuna. Anjeunna teu ngan ukur ngajar basa Sunda, tapi ogé ngabaktikeun dirina pikeun ngajaga jeung ngamekarkeun budaya Sunda di jiwa para murid.
            </p>
        </div>

        <!-- Kredit -->
        <div class="p-10 md:p-20 bg-[#FEFAE0] rounded-xl shadow-lg mt-10">
            <!-- Judul -->
            <div class="text-center text-3xl sm:text-4xl font-bold text-gray-800 mb-6">Krédit</div>
            <div class="text-center text-xl sm:text-2xl text-gray-600 mb-12">SMK Negeri 1 Katapang</div>
            
            <!-- Daftar Kredit -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10">
                <ul class="space-y-4 text-gray-700 text-lg sm:text-xl md:text-2xl">
                    <li class="flex items-center space-x-4">
                        <span class="rounded-full bg-[#B99470] text-white w-10 h-10 flex justify-center items-center">1</span>
                        <span>Devina Kirania</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="rounded-full bg-[#B99470] text-white w-10 h-10 flex justify-center items-center">2</span>
                        <span>Haidar Ali Dzulfikar</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="rounded-full bg-[#B99470] text-white w-10 h-10 flex justify-center items-center">3</span>
                        <span>M. Athoriq</span>
                    </li>
                </ul>
                <ul class="space-y-4 text-gray-700 text-lg sm:text-xl md:text-2xl">
                    <li class="flex items-center space-x-4">
                        <span class="rounded-full bg-[#B99470] text-white w-10 h-10 flex justify-center items-center">4</span>
                        <span>M. Averous Samudra A.</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="rounded-full bg-[#B99470] text-white w-10 h-10 flex justify-center items-center">5</span>
                        <span>Nabila Ramadhani</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="rounded-full bg-[#B99470] text-white w-10 h-10 flex justify-center items-center">6</span>
                        <span>Nadya Lestari</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
