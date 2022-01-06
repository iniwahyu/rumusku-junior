@extends($defaultTemplate)

@section('css-library')
    
@endsection

@section('css-custom')
    
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Menghitung Berapa Persen</h4>
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-lg-9">
                            <p><b>Contoh</b>: Nilai 20 (X) dari 80 (Y) berapa Persen? (Jawaban 25 %)</p>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Masukkan Nilai X</label>
                                <div class="col-sm-10">
                                    <input type="number" id="i-jumlahx" class="form-control" name="jumlahx" placeholder="Masukkan Angka" value="{{ request()->get('jumlahx') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Masukkan Nilai Y</label>
                                <div class="col-sm-10">
                                    <input type="number" id="i-jumlahy" class="form-control" name="jumlahy" placeholder="Masukkan Angka" value="{{ request()->get('jumlahy') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hasil</label>
                                <div class="col-sm-10">
                                    <input type="text" id="i-hasil" class="form-control" value="{{ $rows['hasil'] . " %" ?? null }}" readonly>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success">Hitung</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Menghitung Nilai</h4>
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-lg-9">
                            <p><b>Contoh</b>: 20% (A) dari 80 (B) berapa Nilainya? (Jawaban 25 %)</p>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Masukkan Nilai A</label>
                                <div class="col-sm-10">
                                    <input type="number" id="i-jumlaha" class="form-control" name="jumlaha" placeholder="Masukkan Angka (Tanpa Persen)" value="{{ request()->get('jumlaha') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Masukkan Nilai B</label>
                                <div class="col-sm-10">
                                    <input type="number" id="i-jumlahb" class="form-control" name="jumlahb" placeholder="Masukkan Angka" value="{{ request()->get('jumlahb') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Hasil</label>
                                <div class="col-sm-10">
                                    <input type="text" id="i-hasil" class="form-control" value="{{ $rows['hasil'] . " %" ?? null }}" readonly>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-success">Hitung</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-library')
    
@endsection

@section('js-custom')
    
@endsection