<style>
    #edit-form-category label {
        font-weight: 500;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1.2rem;
    }

    #edit-form-category input {
        font-size: 1rem;
        font-weight: 400;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #edit-form-category textarea {
        font-size: 1rem;
        font-weight: 400;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

</style>

<form action="{{ route('categories.update', $category) }}" id="edit-form-category" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameCategory" value="{{ $category->name }}">
    </div>

    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" class="form-control" id="description" rows="3">{{ $category->description }}</textarea>
    </div>

    <div class="pt-3 d-flex flex-row justify-content-start">
        <button class="btn btn-success mr-1 p-1" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-pencil-square m-1" viewBox="0 0 16 16">
                <path
                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                <path fill-rule="evenodd"
                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
            </svg>
            Actualizar
        </button>

        <button class="btn btn-primary" data-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-x-lg m-1" viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
            Cerrar
        </button>

    </div>

</form>
