<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>TES SOFTWARE DEVELOPERT</h2>
            <p>PT. TRASPAC Makmur Sejahtera</p>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pencarian berdasarkan kata <i class="fa-solid fa-magnifying-glass"></i>
                        </h5>
                        <p class="card-text">Pencarian berdasarkan kata dengan menampilkan hasil berupa berapa kali
                            ditemukan dalam artikel tersebut.</p>
                        <a href="{{ route('pencarian-kata') }}" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Penggantian Kata (Replace) <i class="fa-solid fa-hand-scissors"></i></h5>
                        <p class="card-text">Penggantian Kata (Replace), sebagai contoh kata "adalah" diganti dengan
                            kata "ialah". Outputnya adalah dengan menampilkan isi artikel yang sudah
                            terganti kata-kata yang dimaksud.</p>
                        <a href="{{ route('pencarian-kata') }}" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pengurutan kata <i class="fa-solid fa-arrow-down-a-z"></i></h5>
                        <p class="card-text">Pengurutan kata berdasar abjad. Ouputnya adalah daftar kata yang terurut
                            mulai dari abjad a sampai dengan z.</p>
                        <a href="{{ route('pencarian-kata') }}" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
