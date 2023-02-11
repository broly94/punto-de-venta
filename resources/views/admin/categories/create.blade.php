<style>
    #create-form-category label {
        font-weight: 500;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1.2rem;
    }

    #create-form-category input {
        font-size: 1rem;
        font-weight: 400;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #create-form-category textarea {
        font-size: 1rem;
        font-weight: 400;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>

<form action="{{ route('categories.store') }}" method="POST" id="create-form-category">
    @csrf


    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameCategory"
            value="{{ old('name') }}" maxlength="50">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descripción</label>
        <textarea name="description" class="form-control" id="description" rows="5" value="{{ old('description') }}"
            maxlength="250" placeholder="Deja aqui una descripcion de la categoria"></textarea>
    </div>

    <div class="pt-3">
        <button class="btn btn-success" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                class="bi bi-save m-1" viewBox="0 0 16 16">
                <path
                    d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
            </svg>
            Guardar
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
