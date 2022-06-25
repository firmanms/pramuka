@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('Tutorial') }}</h2>
                            File nya :<a href="https://drive.google.com/file/d/11zcm5gAObfJuD_3-R78RW3_3Neih3oKH/view?usp=sharing" class="btn btn-sm btn-success" target="_blank">Download</a>
                            <iframe width="100%" height="700" src="https://drive.google.com/file/d/11zcm5gAObfJuD_3-R78RW3_3Neih3oKH/preview"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
