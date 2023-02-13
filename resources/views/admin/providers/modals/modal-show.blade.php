<!-- Button modal delete provider -->
<button class="text-center fs-6 btn btn-warning" data-toggle="modal" data-target="#showModalCenter-{{ $provider->id }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye-fill m-1"
        viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
    </svg>
</button>
<!-- Button open modal delete provider end -->

<!-- Modal delete provider -->
<div class="modal fade" id="showModalCenter-{{ $provider->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center w-100 text-uppercase fs-5">Perfil del proveedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('admin.providers.show')
            </div>
        </div>
    </div>
</div>
<!-- Modal delete provider end-->
