@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('Dashboard') }}</h2>
                            {{-- <p>{{ __('You are logged in!') }}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                    <svg class="icon" fill="green" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/></svg>
                                </div>
                                <div class="d-sm-none">
                                    <h2 class="fw-extrabold h5"> Jumlah Siagas</h2>
                                    <h3 class="mb-1">{{ number_format($getsiaga) }}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h6 text-gray-500 mb-0"> Jumlah Siaga</h2>
                                    <h3 class="fw-extrabold mb-2">{{ number_format($getsiaga) }}</h3>
                                </div>                                
                                <div class="small d-flex mt-1">                               
                                    <h6>Lihat Semua<h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                    <svg class="icon" fill="red" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/></svg>
                                </div>
                                <div class="d-sm-none">
                                    <h2 class="fw-extrabold h5"> Jumlah Penggalang</h2>
                                    <h3 class="mb-1">{{ number_format($getpenggalang) }}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h6 text-gray-500 mb-0"> Jumlah Penggalang</h2>
                                    <h3 class="fw-extrabold mb-2">{{ number_format($getpenggalang) }}</h3>
                                </div>                                
                                <div class="small d-flex mt-1">                               
                                    <h6>Lihat Semua<h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                    <svg class="icon" fill="yellow" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/></svg>
                                </div>
                                <div class="d-sm-none">
                                    <h2 class="fw-extrabold h5"> Jumlah Penegak</h2>
                                    <h3 class="mb-1">{{ number_format($getpenegak) }}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h6 text-gray-500 mb-0"> Jumlah Penegak</h2>
                                    <h3 class="fw-extrabold mb-2">{{ number_format($getpenegak) }}</h3>
                                </div>                                
                                <div class="small d-flex mt-1">                               
                                    <h6>Lihat Semua<h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                    <svg class="icon" fill="brown" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/></svg>
                                </div>
                                <div class="d-sm-none">
                                    <h2 class="fw-extrabold h5"> Jumlah Pandega</h2>
                                    <h3 class="mb-1">{{ number_format($getpandega) }}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h6 text-gray-500 mb-0"> Jumlah Pandega</h2>
                                    <h3 class="fw-extrabold mb-2">{{ number_format($getpandega) }}</h3>
                                </div>                                
                                <div class="small d-flex mt-1">                               
                                    <h6>Lihat Semua<h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                    <svg class="icon" fill="black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/></svg>
                                </div>
                                <div class="d-sm-none">
                                    <h2 class="fw-extrabold h5"> Jumlah Pembina</h2>
                                    <h3 class="mb-1">{{ number_format($getpembina) }}</h3>
                                </div>
                            </div>
                            <div class="col-12 col-xl-7 px-xl-0">
                                <div class="d-none d-sm-block">
                                    <h2 class="h6 text-gray-500 mb-0"> Jumlah Pembina</h2>
                                    <h3 class="fw-extrabold mb-2">{{ number_format($getpembina) }}</h3>
                                </div>                                
                                <div class="small d-flex mt-1">                               
                                    <h6>Lihat Semua<h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        
    </div>
@endsection
