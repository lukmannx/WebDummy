@extends('layouts.app-edit')

@section('content')

<div class="px-5 pt-5">
    <div class="d-flex justify-content-between align-items-center mt-4">
        <h1>Edit Berita</h1>
        <a class="btn btn-secondary py-2 px-3" href="/berita">&larr; Kembali</a>
    </div>
    <div class="row">
        <div class="col-md-6 mt-4">
            <h5>Contoh Form Group</h5>

            <div class="mt-4">
                <img alt="..." class="card-img my-2 ms-2" style="max-width: 25rem;" id="imagePreview"
                    class="form-control">
                <label for="formFile" class="form-label fs-4">Default file input example</label>
                <input class="form-control" type="file" name="photo" id="image-input" required>
            </div>

            <div class="mt-4">
                <label class="fs-4" for="nama">Nama Produk</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"  value="{{$data->name}}" name="name" placeholder="Nama Produk" required>
                </div>
            </div>

            <div class="">
                <label class="fs-4" for="nama">Deskripsi Produk</label>
                <div class="input-group mb-3">
                    <textarea name="description" rows="3" class="form-control" placeholder="description"
                        required>{{$data->description}}</textarea>
                </div>
            </div>

            <div class="mb-4">
                <label class="fs-4" for="nama">Kategori</label>
                <div class="input-group mb-3">
                        <select class="form-select form-control" required name="kategori" aria-label="Default select example">
                            <option value="{{$data->kategori}}">{{$data->kategori}}</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
        <div class="col-md-6 justify-content-center align-items-center d-flex">
            <img src="{{asset('/assets/img/lugu.png')}}" alt="">
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
