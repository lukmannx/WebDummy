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
                                    <img alt="..." class="card-img my-2 ms-2" style="max-width: 24rem;"
                                        id="imagePreview" class="form-control">
                                    <p class="custom-file-label"></p>
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" type="file" name="photo" id="image-input">
                                </div>
                                <div class="col-md-10 ms-3 mt-4 me-2">
                                    <label for="nama">Judul Berita</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="judul" placeholder="Judul Berita">
                                    </div>
                                </div>
                                <div class="col-md-10 ms-3">
                                    <label for="nama">Deskripsi</label>
                                    <div class="input-group mb-3">
                                        <textarea name="deskripsi" rows="3" class="form-control"
                                            placeholder="deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-10 ms-3 mb-4 me-2">
                                    <label for="nama">Penulis</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="penulis" placeholder="penulis">
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

            <div class="col-md-8">
                <label class="fs-4 text-white">Berita</label>
                <div class="card">
                    @foreach ($data as $item)
                    <div class="card mb-3" style="max-height: 210px">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{URL::asset('/img/team/team-2.jpg')}}" class="img-fluid rounded-start" style="max-height: 210px; max-width:210px;" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body d-flex flex-column">
                              <h5 class="card-title">{{$item->judul}}</h5>
                              <p class="card-text">{{$item->deskripsi}}</p>
                              <div class="mt-auto">{{$item->penulis}},{{$item->created_at->diffForHumans()}}</div>
                            </div>
                          </div>
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
