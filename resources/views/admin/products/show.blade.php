@extends('layouts.master')

@section('title', 'Proveedores')

@section('styles')
    @include('my-files.styles')
    <style>
        label {
            font-weight: 500;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1.2rem;
        }

        #example-form input {
            font-size: 1rem;
            font-weight: 400;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .btn-back a {
            text-decoration: none !important;
            color: white;
        }
    </style>
@stop

@section('navbar')
    @include('layouts.navbar')
@stop

@section('sidebar')
    @include('layouts.sidebar')
@stop

@section('content')
    <div class="main-panel" style="background-color: white!important;">
        <div class="content-wrapper d-flex align-items-center flex-column" style="background-color: white!important;">

            <div class="page-header" style="background-color: white!important;">
                <h3 class="page-title">
                    Proveedores
                </h3>
            </div>

            <div class="row p-1 my-5" style="background-color: white!important;">
                <h3 class="text-center text-uppercase">Ver Proveedor</h3>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary btn-back">
                    <a href="{{ route('providers.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-house-door-fill m-1" viewBox="0 0 16 16">
                            <path
                                d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                        </svg>
                    </a>
                </button>
            </div>

            <div class="row p-3 bg-white border d-flex justify-content-center p-2" style="width: 100%;">

                <div class="row my-3">

                    <div class="col-12 col-md-4">
                        <div class="row d-flex flex-column align-items-center">
                            <div class="col-6 p-3 w-100">
                                <h5 class="fs-4 text-center text-uppercase">{{ $provider->name; }}</h5>
                            </div>
                            <div class="col-6 p-3 w-100">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action active"
                                        aria-current="true">
                                        Información del proveedor
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">Productos</a>
                                    <a href="#" class="list-group-item list-group-item-action">Registrar productos</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="row d-flex flex-column align-items-center">
                            <div class="col-12 col-md-6 p-3 w-100">
                                <h5 class="fs-4 text-center text-uppercase">Información del Proveedor</h5>
                            </div>
                            <div class="row p-3 w-100">

                                <div class="col-12 col-md-6">

                                    <div class="d-flex align-items-start flex-column flex-wrap mt-2">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-person align-self-center mr-3"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                            </svg>
                                            <h6 class="text-uppercase">Nombre del proveedor</h6>
                                        </div>
                                        <p class="text-center fs-5 lead mt-2">{{ $provider->name }}</p>
                                    </div>

                                    <div class="d-flex align-items-start flex-column flex-wrap mt-2">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-file-earmark-ruled align-self-center mr-3"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h7v1a1 1 0 0 1-1 1H6zm7-3H6v-2h7v2z" />
                                            </svg>
                                            <h6 class="text-uppercase">Numero de CUIL</h6>
                                        </div>
                                        <p class="text-center fs-5 lead mt-2">{{ $provider->cuil_number }}</p>
                                    </div>

                                </div>

                                <div class="col-12 col-md-6">

                                    <div class="d-flex align-items-start flex-column flex-wrap mt-2 w-100">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-at align-self-center mr-3" viewBox="0 0 16 16">
                                                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                                                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                                              </svg>
                                            <h6 class="text-uppercase">Correo</h6>
                                        </div>
                                        <p class="text-center fs-5 lead mt-2">{{ $provider->email }}</p>
                                    </div>

                                    <div class="d-flex align-items-start flex-column flex-wrap mt-2 w-100">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill align-self-center mr-3" viewBox="0 0 16 16">
                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                              </svg>
                                            <h6 class="text-uppercase">Dirección</h6>
                                        </div>
                                        <p class="text-center fs-5 lead mt-2">{{ $provider->adress }}</p>
                                    </div>

                                    <div class="d-flex align-items-start flex-column flex-wrap mt-2 w-100">
                                        <div class="d-flex justify-content-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-telephone align-self-center mr-3"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                            <h6 class="text-uppercase">Teléfono</h6>
                                        </div>
                                        <p class="text-center fs-5 lead mt-2">{{ $provider->phone }}</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    @stop

    @section('footer')
        @include('layouts.footer')
    @stop

    @section('scripts')
        @include('my-files.scripts')
    @stop
