<div class="container-fluid d-flex justify-content-center flex-column">
    <div class="page-header d-flex justify-content-center">
        <h3 class="page-title text-center">
            Categorias
        </h3>
    </div>


    <div class="actions m-4">
        <!-- Button modal create category -->
        <button class="text-center fs-6 btn btn-outline-dark mr-1 pb-2" data-toggle="modal"
            data-target="#createModalCenter">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-plus-square mr-1" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>
            Crear
        </button>

        <!-- Button open modal create category end -->
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

    <div class="container-table p-1">
        @include('admin.categories.table-index')
    </div>
</div>
