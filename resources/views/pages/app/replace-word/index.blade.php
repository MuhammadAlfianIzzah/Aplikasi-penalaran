<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>Penggantian Kata (Replace) <i class="fa-solid fa-hand-scissors"></i></h2>
            <p>Penggantian Kata (Replace), sebagai contoh kata "adalah" diganti dengan
                kata "ialah". Outputnya adalah dengan menampilkan isi artikel yang sudah
                terganti kata-kata yang dimaksud</p>
        </div>
    </div>
    <div class="bg-white container mt-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('replace-word-post') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="keyword" class="form-label">Kata kunci</label>
                            <input type="text" name="keyword" required class="form-control" id="keyword">
                            @error('keyword')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="replace_text" class="form-label">Kata pengganti</label>
                            <input type="text" name="replace_text" required class="form-control" id="replace_text">
                            @error('replace_text')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-floating mb-2">
                            <textarea style="height: 200px" name="text" required class="form-control" placeholder="Leave a comment here"
                                id="text"></textarea>
                            <label for="text">Text</label>
                            @error('text')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Hitung hasil</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
