<style>
    .content-wrapper {
        background-color: white;
    }

    #example_length label {
        font-size: 1.1rem;
    }

    #example_length select {
        font-size: 0.9rem;
    }

    #example_filter label {
        font-size: 1.1rem;
    }

    #example_filter input {
        font-size: 1.2rem;
    }

    #example_info {
        font-size: 1rem;
    }

    .btn-edit {
        text-decoration: none;
        color: white;
    }

    .btn-edit:link {
        text-decoration: none;
    }

    .btn-edit:hover {
        color: white;
    }

    #example tr th {
        background-color: rgb(204, 201, 201);
    }

    #example tr td {
        font-weight: 500;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 0.8rem;
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Productos
            </h3>
        </div>
        <div class="row p-1 mt-5" style="background-color: white!important;">
            <h3 class="text-center text-uppercase">Productos</h3>
        </div>

        <div class="btn-group dropend">
            <button type="button" class="btn btn-success my-4 dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                    class="bi bi-calendar3 m-1" viewBox="0 0 16 16">
                    <path
                        d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                    <path
                        d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                </svg>
                Acciones
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item fs-6" href="{{ route('products.create') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-plus-square mr-1" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                        </svg>
                        Crear
                    </a>
                </li>
            </ul>
        </div>

        <div class="row p-3 bg-white">
            <table id="example" class="cell-border stripe hover p-4"
                style="width:100%; border: 1px solid rgb(204, 201, 201);">
                <thead>
                    <tr class="">
                        <th class="text-center text-uppercase p-4">Id</th>
                        <th class="text-center text-uppercase">Nombre</th>
                        <th class="text-center text-uppercase">Estado</th>
                        <th class="text-center text-uppercase">Precio</th>
                        <th class="text-center text-uppercase">Categoria</th>
                        <th class="text-center text-uppercase">Acciones</th>
                        <th class="text-center text-uppercase">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center fs-6">{{ $product->id }}</td>
                            <td class="text-center fs-6">{{ $product->name }}</td>
                            <td class="text-center fs-6 text-uppercase">{{ $product->status }}</td>
                            <td class="text-center fs-6">{{ $product->sell_price }}</td>
                            <td class="text-center fs-6">{{ $product->category->name }}</td>
                            <td class="text-center fs-6 d-flex flex-direction-row justify-content-center">

                                <button class="btn btn-primary mr-1">
                                    <a class="btn-edit text-uppercase" href="{{ route('products.edit', $product) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-pencil-square m-1" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                </button>

                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="delete-product"
                                        class="text-center fs-6 btn btn-danger text-uppercase">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-trash3-fill m-1" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>

                            <td class="text-center fs-6">
                                <button class="btn btn-warning mr-1">
                                    <a class="btn-edit text-uppercase" href="{{ route('products.show', $product) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-eye-fill m-1" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </a>
                                </button>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
