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

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <h5>Error</h5>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="fs-6">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row p-3 bg-white">
            <table id="form-center" class="cell-border stripe hover p-4"
                style="width:100%; border: 1px solid rgb(204, 201, 201);">
                <thead>
                    <tr class="">
                        <th class="text-center text-uppercase">Id</th>
                        <th class="text-center text-uppercase">Nombre</th>
                        <th class="text-center text-uppercase">Teléfono</th>
                        <th class="text-center text-uppercase">Acciones</th>
                        <th class="text-center text-uppercase">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($providers as $provider)
                        <tr>
                            <td class="text-center fs-6">{{ $provider->id }}</td>
                            <td class="text-center fs-6">{{ $provider->name }}</td>
                            <td class="text-center fs-6">{{ $provider->phone }}</td>

                            <td class="text-center fs-6 d-flex justify-content-center">

                                @include('admin.providers.modals.modal-edit')

                               @include('admin.providers.modals.modal-delete')

                            </td>

                            <td class="text-center fs-6">
                                @include('admin.providers.modals.modal-show')
                            </td>
            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
