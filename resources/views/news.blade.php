@extends('layouts.app')
@section('content')

<main id="news-page" class="mt-2 mb-5 mt-5">
    <div class="text-judul ms-7">
        <h1>Berita </h1>
    </div>

    <div class="content container-fluid px-7">
       
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gy-4 mt-4">
            
            @foreach ($data as $item)    
            <div class="col p-2 ">
                <a class="card border-1 rounded-0 shadow" href="{{route('berita.show', $item->id)}}">
                    <img src="{{asset('/storage/images/berita/'.$item->photo)}}" alt="..." class="card-img rounded-0">
                    <div class="card-body py-2 px-3">
                        <h5 class="card-title mt-2">
                            {{$item->judul}}
                        </h5>
                        <div class="card-text pt-1">
                            <p style="font-size: 15px;" class="text-muted">
                                {{ implode(' ', array_slice(explode(' ', $item->deskripsi), 0, 12)) . (strlen($item->deskripsi) > 7 ? '...' : '') }}
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p style="font-size: 12px;">
                                    {{$item->created_at->diffForHumans()}}
                                </p>
                                <p style="font-size: 15px;">
                                    {{$item->penulis}}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            
        </div>

    </div>
</main>

@endsection
