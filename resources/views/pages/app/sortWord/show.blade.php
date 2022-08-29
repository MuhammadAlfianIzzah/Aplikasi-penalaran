<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>HASIL pengurutan Kata <i class="fa-solid fa-arrow-down-a-z"></i></h2>
            <div class="card">
                <div class="card-body">
                    <h5>Result :</h5>
                    @foreach ($data as $dt)
                        <p class="badge text-bg-info">{{ $dt }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
