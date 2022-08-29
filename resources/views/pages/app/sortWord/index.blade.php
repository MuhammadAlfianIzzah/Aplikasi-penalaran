<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>Pengurutan Kata <i class="fa-solid fa-arrow-down-a-z"></i></h2>
            <p>Pengurutan kata berdasar abjad. Ouputnya adalah daftar kata yang terurut
                mulai dari abjad a sampai dengan z.</p>
        </div>
    </div>
    <div class="bg-white container mt-4">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('sort-word-post') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-floating mb-2">
                            <textarea style="height: 200px" name="text" required class="form-control" placeholder="Leave a comment here"
                                id="text"></textarea>
                            <label for="text">Text</label>
                            @error('text')
                                <span class="text-danger form-text">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Pisah dan Urutkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
