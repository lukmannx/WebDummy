@extends('layouts.dashboard')
@section('content')

<div class="col-md-12">
    <div class="card shadow-lg mt-4">
        <div class="card-body ms-3">
            <h1 class="fs-5">Product</h1>
            <div class="border-bottom"></div>
        </div>
        <div class="row">
            <div class="col card ms-5 mt-4 me-4 mb-5">
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-10">
                        <div class="form-group">
                            <img src="" alt="..." class="card-img ms-2" style="max-width: 24rem;" id="imagePreview"
                                class="form-control">
                            <p class="custom-file-label"></p>
                            <label for="formFile" class="form-label">Input image</label>
                            <input class="form-control" type="file" required name="photo" id="image-input">
                            <div class="form-text">
                                Maximum file upload 2MB
                              </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Judul</label>
                            <input class="form-control bg-white bg-white" required name="name" type="text">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Deskripsi</label>
                            <input class="form-control bg-white" required name="description" type="text">
                        </div>
                    </div>
                    <div class="col-md-10">
                        <label for="example-text-input" class="form-control-label">Kategori</label>
                        <select class="form-select form-control" required name="kategori" aria-label="Default select example">
                            <option value="">Kategori</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-10 mt-4">
                        <button type="submit" class="btn btn-primary float-right">Buat</button>
                    </div>
                </form>
                @error('photo')
                <div class="error text-danger ms-3">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <div class="row mt-4 me-1">
                    @foreach ($product as $item)    
                    <div class="card ms-4 mt-2" style="width: 15rem;">
                        <div class="dropdown mt-2">
                            <button class="btn bg-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                    <path
                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                </svg>
                            </button>
                            <ul class="dropdown-menu">
                                <form action="{{route('product.destroy', $item->id)}}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <div class="row">
                                        <a href="{{route('product.edit', $item->id)}}" class="btn w-75 ms-4 mt-3">
                                            <li>Edit</li>
                                        </a>
                                        <button type="submit" class="btn w-75 ms-4">
                                            <li>Hapus</li>
                                        </button>
                                    </div>
                                </form>
                            </ul>
                        </div>
                        <img src="{{asset('/storage/images/product/'.$item->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-start">{{$item->name}}</p>
                            <p class="card-text text-start">{{$item->description}}</p>
                        </div>
                    </div>
                    @endforeach
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
