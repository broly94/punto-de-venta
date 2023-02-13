<style>
    .content-wrapper {
        background-color: white;
    }

    #form-center_filter input {
        font-size: 1rem;
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
                Categorias
            </h3>
        </div>
        <div class="row p-1 mt-5">
            <h3 class="text-center text-uppercase">Categorias</h3>
        </div>

        <div class="actions m-4">
            @include('admin.categories.modals.modal-create')
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

        <div class="row p-3">
            <table id="form-center" class="cell-border stripe hover p-4"
                style="width:100%; border: 1px solid rgb(204, 201, 201);">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase">Id</th>
                        <th class="text-center text-uppercase">Nombre</th>
                        <th class="text-center text-uppercase">Descripcion</th>
                        <th class="text-center text-uppercase">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="text-center fs-6">{{ $category->id }}</td>
                            <td class="text-center fs-6">{{ $category->name }}</td>
                            <td class="text-center fs-6">{{ $category->description }}</td>
                            <td class="text-center fs-6 d-flex flex-direction-row justify-content-center">

                                @include('admin.categories.modals.modal-edit')

                                @include('admin.categories.modals.modal-delete')


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
