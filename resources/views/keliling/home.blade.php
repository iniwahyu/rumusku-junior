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
                <h4 class="card-title">Keliling Bangun Datar</h4>
            </div>
            <div class="card-body"> 
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/persegi') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Persegi</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/persegi-panjang') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Persegi Panjang</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/segitiga') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Segitiga</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/trapesium') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Trapesium</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/jajar-genjang') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Jajar Genjang</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/belah-ketupat') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Belah Ketupat</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/layangan') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Layang-Layang</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ url('keliling/lingkaran') }}">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3>Lingkaran</h3>
                                </div>
                            </div>
                        </a>
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