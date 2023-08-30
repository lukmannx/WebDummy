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
            <form action="{{route('berita.update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mt-4">
                    <img alt="..." class="card-img my-2 ms-2" style="max-width: 25rem;" id="imagePreview"
                        class="form-control">
                    <label for="formFile" class="form-label fs-4">Default file input example</label>
                    <input class="form-control" type="file" name="photo" id="image-input" required>
                </div>
    
                <div class="mt-4">
                    <label class="fs-4" for="nama">Judul Berita</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  value="{{$data->judul}}" name="judul" placeholder="Judul Berita" required>
                    </div>
                </div>
    
                <div class="">
                    <label class="fs-4" for="nama">Deskripsi</label>
                    <div class="input-group mb-3">
                        <textarea name="deskripsi" rows="3" class="form-control" placeholder="deskripsi"
                            required>{{$data->deskripsi}}</textarea>
                    </div>
                </div>
    
                <div class="mb-4">
                    <label class="fs-4" for="nama">Penulis</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{$data->penulis}}" name="penulis" placeholder="penulis" required>
                    </div>
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

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
