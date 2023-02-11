@extends('layouts.master')

@section('title', 'Productos')

@section('styles')
    @include('my-files.styles')
    <style>
        label {
            font-weight: 500;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1.2rem;
        }

        .form-group label {
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
                    Producto
                </h3>
            </div>

            <div class="row p-1 my-5" style="background-color: white!important;">
                <h3 class="text-center text-uppercase">Editar Producto</h3>
            </div>


            <div class="row px-3 py-5 bg-white border d-flex justify-content-center" style="width: 50%;">
                <form action="{{ route('products.update', $product) }}" enctype="multipart/form-data" id="example-form"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label text-center">Nombre</label>
                        <input type="text" name="name" class="form-control" id="name"
                            aria-describedby="nameCategory" value="{{ $product->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="sell_price" class="form-label">Precio de venta</label>
                        <input type="number" name="sell_price" class="form-control" id="sell_price"
                            aria-describedby="sellPriceCategory" value="{{ $product->sell_price }}">
                    </div>

                    <div class="mb-3">
                        <label for="code" class="form-label">Código de barra</label>
                        <input type="text" name="code" class="form-control" id="code"
                            aria-describedby="codeCategory" value="{{ $product->code }}">
                    </div>

                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" name="stock" class="form-control" id="stock"
                            aria-describedby="stockCategory" value="{{ $product->stock }}">
                        <small class="text-muted">El stock de un producto se agrega desde "Compra" asignandole un
                            proveedor</small><br>
                        <small class="text-muted">Agregar stock aquí si este producto no tiene un proveedor</small>
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($category->id === $product->category_id) selected @endif>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="provider_id">Proveedor</label>
                        <select class="form-control" name="provider_id" id="provider_id">
                            @foreach ($providers as $provider)
                                <option value="{{ $provider->id }}" @if ($provider->id == $product->provider_id) selected @endif>
                                    {{ $provider->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="py-3 d-flex flex-direction-row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <label class="card-title">Subir imagen</label>
                                    <input type="file" class="dropify" name="image" />
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('image/' . $product->image) }}" alt="">
                        </div>
                    </div>


                    <div class="pt-3">

                        <button class="btn btn-success" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-save m-1" viewBox="0 0 16 16">
                                <path
                                    d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                            </svg>
                            Actualizar
                        </button>

                        <button class="btn btn-primary btn-back">
                            <a href="{{ route('products.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-arrow-90deg-left m-1" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z" />
                                </svg>
                                Regresar
                            </a>
                        </button>

                        <button class="btn btn-warning btn-back">
                            <a href="{{ route('products.show', $product) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                    class="bi bi-eye-fill m-1" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                                Ver Producto
                            </a>
                        </button>

                    </div>
            </div>
            </form>
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
