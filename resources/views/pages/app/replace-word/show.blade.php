<x-main-layout>
    <div class="h-100 p-5 bg-light border rounded-3">
        <div class="container">
            <h2>HASIL Pegantian Kata <i class="fa-solid fa-hand-scissors"></i></h2>
            <div class="card">
                <div class="card-body">
                    <h5>Result :</h5>
                    " {!! $data['text'] !!} "
                    <div class="card mt-3">
                        <div class="card-body">
                            <p>
                                kata <span class="fw-bold">{{ $data['keyword'] }}</span> diganti menjadi
                                <span class="fw-bold"> {{ $data['replace_text'] }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main-layout>
