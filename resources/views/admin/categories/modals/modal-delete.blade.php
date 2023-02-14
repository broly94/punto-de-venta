<div class="modal fade" id="deleteModalCenter-{{ $category->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100">¿Eliminar categoría {{ $category->name }} ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>¡Atención!</h3>
                <p class="text-muted fs-5 fw-bold">Esto eliminará todos los productos que contengan la categoría {{ $category->name }}</p>
                @include('admin.categories.form-delete')
            </div>
        </div>
    </div>
</div>
