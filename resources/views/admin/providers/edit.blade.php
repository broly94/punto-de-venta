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
                <h3 class="text-center text-uppercase">Editar Proveedor</h3>
            </div>

            <div class="row p-3 bg-white border d-flex justify-content-center p-5" style="width: 50%;">
                <form action="{{ route('providers.update', $provider) }}" id="example-form" method="POST"
                    style="width: 100%;">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="nameCategory" value="{{ $provider->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo</label>
                        <input type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailCategory" value="{{ $provider->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="cuil_number" class="form-label">Cuil</label>
                        <input type="number" name="cuil_number" class="form-control" id="cuil_number"
                            aria-describedby="cuilNumberCategory" value="{{ $provider->cuil_number }}">
                    </div>

                    <div class="mb-3">
                        <label for="adress" class="form-label">Dirección</label>
                        <input type="text" name="adress" class="form-control" id="adress"
                            aria-describedby="adressCategory" value="{{ $provider->adress }}">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="number" name="phone" class="form-control" id="phone"
                            aria-describedby="phoneCategory" value="{{ $provider->phone }}">
                    </div>

                    <div class="pt-3">
                        <button class="btn btn-success" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-pencil-square m-1" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                            Actualizar
                        </button>

                        <button class="btn btn-primary btn-back">
                            <a href="{{ route('providers.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-arrow-90deg-left m-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                                </svg>
                            </a>
                            Regresar
                        </button>

                        <button class="btn btn-warning btn-back">
                            <a href="{{ route('providers.show', $provider) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-eye-fill m-1" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                                Ver Perfil
                            </a>
                        </button>

                    </div>

                </form>
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
