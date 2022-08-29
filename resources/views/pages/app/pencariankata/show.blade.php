<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>HASIL Pencarian Kata <i class="fa-solid fa-magnifying-glass"></i></h2>
            <div class="card">
                <div class="card-body">
                    <h5>Text :</h5>
                    " {!! $data['text'] !!} "
                    <div class="card mt-3">
                        <div class="card-body">
                            <p>Terdapat <span class="text-info fw-bold"> {{ $count }} </span> kata berulang dengan
                                <span class="fw-bold">keyword</span>
                                "{{ $data['keyword'] }}"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
