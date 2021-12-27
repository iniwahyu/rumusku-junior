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
                        <label class="col-sm-2 col-form-label">Sisi 1</label>
                        <div class="col-sm-10">
                            <input type="number" id="i-sisi-1" class="form-control" name="sisi-1" placeholder="Masukkan Angka" value="{{ request()->get('sisi-1') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sisi 2</label>
                        <div class="col-sm-10">
                            <input type="number" id="i-sisi-2" class="form-control" name="sisi-2" placeholder="Masukkan Angka" value="{{ request()->get('sisi-2') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sisi 3</label>
                        <div class="col-sm-10">
                            <input type="number" id="i-sisi-3" class="form-control" name="sisi-3" placeholder="Masukkan Angka" value="{{ request()->get('sisi-3') }}">
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