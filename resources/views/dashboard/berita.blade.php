@extends('layouts.dashboard')
@section('content')

<div class="row px-0 mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="justify-content-center">
                    <label class="fs-4 text-white">Form Berita</label>
                    <div class="card ">
                        <div class="card-body card">
                            <p>Isi Berita</p>
                        </div>
                        <div class="col-md-10 ms-3 mt-4 me-2">
                            <img alt="..." class="card-img my-2 ms-2" style="max-width: 24rem;" id="imagePreview"
                                class="form-control">
                            <p class="custom-file-label"></p>
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" name="photo" id="image-input">
                        </div>
                        <div class="col-md-10 ms-3 mt-4 me-2">
                            <label for="nama">Judul Berita</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita">
                            </div>
                        </div>
                        <div class="col-md-10 ms-3">
                            <label for="nama">Deskripsi</label>
                            <div class="input-group mb-3">
                                <textarea name="berita" rows="3" class="form-control"
                                    placeholder="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-md-10 ms-3 mb-4 me-2">
                            <label for="nama">Sumber</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="sumber" placeholder="Sumber">
                            </div>
                        </div>
                        <div class="col-md-10 ms-3 mb-4 me-2">
                            <label for="nama">tanggal</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="tanggal_berita" placeholder="tanggal">
                            </div>
                        </div>
                        <div class="col ms-3">
                            <button type="submit" class="btn btn-primary float-right">Buat</button>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <label class="fs-4 text-white">Berita</label>
                <div class="card ">
                    <div class="row my-2 mx-2 gap-3">
                        <div class="card ms-1 mb-3 mt-2" style="width: 15rem;">
                            <div class="dropdown mt-2">
                                <button class="btn bg-light" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <form action="" method="post">

                                        <div class="row">
                                            <a href="" class="btn w-75 ms-4 mt-3">
                                                <li>Edit</li>
                                            </a>
                                            <button type="submit" class="btn w-75 ms-4">
                                                <li>Hapus</li>
                                            </button>
                                        </div>
                                    </form>
                                </ul>
                            </div>
                            <img src="{{URL::asset('/img/team/team-2.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-start">yoi</p>
                                <p class="card-text text-start">yoi</p>
                            </div>
                        </div>
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
