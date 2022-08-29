<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>Pencarian Kata <i class="fa-solid fa-magnifying-glass"></i></h2>
            <p>Pencarian berdasarkan kata dengan menampilkan hasil berupa berapa kali
                ditemukan dalam artikel tersebut.</p>
        </div>
    </div>
    <div class="bg-white container mt-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('pencarian-kata-post') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="keyword" class="form-label">Keyword</label>
                            <input type="text" required name="keyword" class="form-control" id="keyword">
                            @error('keyword')
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
