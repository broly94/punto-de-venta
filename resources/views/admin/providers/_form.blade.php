<style>
    .content-wrapper {
        background-color: white;
    }


    #form-center_filter input {
        font-size: 1.2rem;
    }


    #form-center tr th {
        background-color: rgb(101, 147, 153);
        color: white;
    }

    #form-center tr td {
        font-weight: 500;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 0.8rem;
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Proveedores
            </h3>
        </div>
        <div class="row p-1 mt-5" style="background-color: white!important;">
            <h3 class="text-center text-uppercase">Proveedores</h3>
        </div>

        <div class="actions m-4">
            @include('admin.providers.modals.modal-create')
        </div>

        <div class="row p-3 bg-white">
            <table id="form-center" class="cell-border stripe hover p-4"
                style="width:100%; border: 1px solid rgb(204, 201, 201);">
                <thead>
                    <tr class="">
                        <th class="text-center text-uppercase">Id</th>
                        <th class="text-center text-uppercase">Nombre</th>
                        <th class="text-center text-uppercase">Correo</th>
                        <th class="text-center text-uppercase">Acciones</th>
                        <th class="text-center text-uppercase">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($providers as $provider)
                        <tr>
                            <td class="text-center fs-6">{{ $provider->id }}</td>
                            <td class="text-center fs-6">{{ $provider->name }}</td>
                            <td class="text-center fs-6">{{ $provider->email }}</td>

                            <td class="text-center fs-6 d-flex justify-content-center">

                                <button class="btn btn-primary mr-2">
                                    <a class="btn-edit text-uppercase" href="{{ route('providers.edit', $provider) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-pencil-square m-1" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </a>
                                </button>

                                <form action="{{ route('providers.destroy', $provider->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="delete-provider"
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
                                    <a class="btn-edit text-uppercase" href="{{ route('providers.show', $provider) }}">
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
