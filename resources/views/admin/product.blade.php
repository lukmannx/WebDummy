@extends('layouts.dashboard')
@section('content')

<div class="col-md-12">
    <div class="card shadow-lg mt-4">
        <div class="card-body ms-3">
            <h1 class="fs-5">Product</h1>
            <div class="border-bottom"></div>
        </div>
        <div class="row">
            <div class="col-md-5 ms-5 mt-4 me-2 mb-5">
                <img alt="..." class="card-img ms-2" style="max-width: 24rem;" id="imagePreview" class="form-control">
                <p class="custom-file-label"></p>
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="photo" id="image-input">
                <div class="col mt-5">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Judul</label>
                        <input class="form-control bg-white bg-white" type="text">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Deskripsi</label>
                        <input class="form-control bg-white" type="text" >
                    </div>
                </div>
                <div class="col">
                    <label for="example-text-input" class="form-control-label">Kategori</label>
                    <select class="form-select form-control" aria-label="Default select example">
                        <option selected>Kategori</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="card m-2 col-md-4 p-2 ms-4 shadow-lg p-3 mb-5 bg-body-tertiary rounded-4"
                        style="width: 270px; height: 300px;">
                        <div class="dropdown p-2">
                            <button class="btn bg-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu">
                                <div class="row">
                                    <a href="" class="btn w-75 ms-4 mt-3">
                                        <li>Edit</li>
                                    </a>
                                    <button type="submit" class="btn w-75 ms-4">
                                        <li>Hapus</li>
                                    </button>
                                </div>
                            </ul>
                        </div>
                        <a href="">
                            <img src="" alt="..." class="img-fluid card-img ms-3 mt-2"
                                style="height: 300px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title"></h5>
                                <div class="card-text pt-2">
                                    <p style="font-size: 15px;" class="text-muted">
                                    </p>
                                    <div class="d-flex justify-content-between pt-2">
                                        <p>
                                        </p>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@section('js')
<script>
    document.getElementById('image-input').addEventListener('change', (ev) => {
        let reader = new FileReader()
        reader.readAsDataURL(ev.target.files[0])
        reader.onload = () => {
            document.getElementById('imagePreview').setAttribute('src', reader.result)
        }
    })

</script>
@endsection
