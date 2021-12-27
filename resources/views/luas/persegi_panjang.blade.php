@extends($defaultTemplate)

@section('css-library')
    
@endsection

@section('css-custom')
    
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">{{ $title }}</h4>
    </div>
    <div class="card-body">
        <form action="" method="get">
            <div class="row mb-2">
                <div class="col-lg-6">
                    <h3>Masukkan Nilai</h3>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Panjang</label>
                        <div class="col-sm-10">
                            <input type="number" id="i-panjang" class="form-control" name="panjang" placeholder="Masukkan Angka" value="{{ request()->get('panjang') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Lebar</label>
                        <div class="col-sm-10">
                            <input type="number" id="i-lebar" class="form-control" name="lebar" placeholder="Masukkan Angka" value="{{ request()->get('lebar') }}">
                        </div>
                    </div>
                    <div class="form-group pt-2">
                        <button type="submit" class="btn btn-success">Hitung</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>
            </div>
        </form>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4">
                        <p class="text-bold">Hasilnya</p>
                    </div>
                    <div class="col-lg-8">
                        <p>{{ $rows['hasil'] ?? 0 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-library')
    
@endsection

@section('js-custom')
    
@endsection