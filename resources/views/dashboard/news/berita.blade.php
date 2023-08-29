@extends('layouts.dashboard')
@section('content')

<div class="row px-0 mt-5">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="justify-content-center">
                    <label class="fs-4 text-white">Form Berita</label>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Isi Berita</p>
                            <form action="{{route('berita.store')}}" method="post">
                                @csrf
                                <div class="col-md-10 ms-3 mt-4 me-2">
                                    <img alt="..." class="card-img my-2 ms-2 mb-3" style="max-width: 24rem;"
                                        id="imagePreview" class="form-control">
                                    <p class="custom-file-label"></p>
                                    <input class="form-control" type="file" name="photo" id="image-input" required>
                                </div>
                                <div class="col-md-10 ms-3 mt-4 me-2">
                                    <label for="nama">Judul Berita</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="judul" placeholder="Judul Berita" required>
                                    </div>
                                </div>
                                <div class="col-md-10 ms-3">
                                    <label for="nama">Deskripsi</label>
                                    <div class="input-group mb-3">
                                        <textarea name="deskripsi" rows="3" class="form-control"
                                            placeholder="deskripsi" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-10 ms-3 mb-4 me-2">
                                    <label for="nama">Penulis</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="penulis" placeholder="penulis" required>
                                    </div>
                                </div>
                                <div class="col ms-3">
                                    <button type="submit" class="btn btn-primary float-right">Buat</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            @if(!$data->isEmpty())
            <div class="col-md-8">
                <label class="fs-4 text-white">Berita</label>
                <div class="card ">
                    <div class="row my-2 mx-2 gap-3">
                        @foreach($data as $item)
                        <div class="card m-2 col-md-4 p-2 h-50 ms-4" style="width: 270px;">
                            <div class="dropdown">
                                <button class="btn bg-light" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                    <form action="{{route('berita.destroy', $item->id)}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <div class="row">
                                            <a href="{{route('berita.edit', $item->id)}}" class="btn w-75 ms-4 mt-3">
                                                <li>Edit</li>
                                            </a>
                                            <button type="submit" class="btn w-75 ms-4">
                                                <li>Hapus</li>
                                            </button>
                                        </div>
                                    </form>
                                </ul>
                            </div>
                            <img src="" alt="..." class="img-fluid card-img" style="height: 250px; object-fit: cover;">
                            <div class="card-body p-3">
                                <h5 class="card-title">{{$item->judul}}</h5>
                                <div class="card-text pt-2">
                                    <p style="font-size: 15px;" class="text-muted">
                                        {{ implode(' ', array_slice(explode(' ', $item->deskripsi), 0, 12)) . (strlen($item->deskripsi) > 12 ? '...' : '') }}
                                    </p>
                                    <div class="d-flex justify-content-between pt-2">
                                        <p>
                                            {{$item->penulis}},{{$item->created_at->diffForHumans()}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
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
