<style>
      #edit-form-provider label {
        font-weight: 500;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1.2rem;
    }

    #edit-form-provider input {
        font-size: 1rem;
        font-weight: 400;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #edit-form-provider textarea {
        font-size: 1rem;
        font-weight: 400;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>

<form action="{{ route('providers.update', $provider) }}" id="edit-form-provider" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameCategory"
            value="{{ $provider->name }}">
    </div>

    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="email" class="form-label">Correo</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailCategory"
            value="{{ $provider->email }}">
    </div>

    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="cuil_number" class="form-label">Cuil</label>
        <input type="number" name="cuil_number" class="form-control" id="cuil_number"
            aria-describedby="cuilNumberCategory" value="{{ $provider->cuil_number }}">
    </div>

    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="adress" class="form-label">Dirección</label>
        <input type="text" name="adress" class="form-control" id="adress" aria-describedby="adressCategory"
            value="{{ $provider->adress }}">
    </div>

    <div class="mb-3 d-flex flex-column align-items-start">
        <label for="phone" class="form-label">Teléfono</label>
        <input type="number" name="phone" class="form-control" id="phone" aria-describedby="phoneCategory"
            value="{{ $provider->phone }}">
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
