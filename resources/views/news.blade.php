@extends('layouts.app')
@section('content')

<main id="news-page" class="mt-2 mb-5 mt-5">
    <div class="text-judul ms-7">
        <h1>Berita </h1>
    </div>

    <div class="content container-fluid px-7">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gy-4 mt-4">
            <div class="col p-2 ">
                <a class="card border-1 rounded-0 shadow member-img" href="">
                    <img src="{{URL::asset('/img/portfolio/portfolio-2.jpg')}}" alt="..." class= rounded-0" style="display: block; width: 450px; height: 350px; object-fit: cover;">
                    <div class="card-body py-2 px-3">
                        <h5 class="card-title mt-2">
                            Lorem ipsum dolor sit amet.
                        </h5>
                        <div class="card-text pt-1">
                            <p style="font-size: 15px;" class="text-muted">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quae.
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p>
                                    10.20.30
                                </p>
                                <p>
                                    Lukman
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col p-2 ">
                <a class="card border-1 rounded-0 shadow member-img" href="">
                    <img src="{{URL::asset('/img/portfolio/portfolio-2.jpg')}}" alt="..." class= rounded-0" style="display: block; width: 450px; height: 350px; object-fit: cover;">
                    <div class="card-body py-2 px-3">
                        <h5 class="card-title mt-2">
                            Lorem ipsum dolor sit amet.
                        </h5>
                        <div class="card-text pt-1">
                            <p style="font-size: 15px;" class="text-muted">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quae.
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p>
                                    10.20.30
                                </p>
                                <p>
                                    Lukman
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col p-2 ">
                <a class="card border-1 rounded-0 shadow member-img" href="">
                    <img src="{{URL::asset('/img/portfolio/portfolio-3.jpg')}}" alt="..." class= rounded-0" style="display: block; width: 450px; height: 350px; object-fit: cover;">
                    <div class="card-body py-2 px-3">
                        <h5 class="card-title mt-2">
                            Lorem ipsum dolor sit amet.
                        </h5>
                        <div class="card-text pt-1">
                            <p style="font-size: 15px;" class="text-muted">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quae.
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p>
                                    10.20.30
                                </p>
                                <p>
                                    Lukman
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col p-2 ">
                <a class="card border-1 rounded-0 shadow member-img" href="">
                    <img src="{{URL::asset('/img/portfolio/portfolio-1.jpg')}}" alt="..." class= rounded-0" style="display: block; width: 450px; height: 350px; object-fit: cover;">
                    <div class="card-body py-2 px-3">
                        <h5 class="card-title mt-2">
                            Lorem ipsum dolor sit amet.
                        </h5>
                        <div class="card-text pt-1">
                            <p style="font-size: 15px;" class="text-muted">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quae.
                            </p>
                            <div class="d-flex justify-content-between pt-2">
                                <p>
                                    10.20.30
                                </p>
                                <p>
                                    Lukman
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>




        </div>

    </div>
</main>

@endsection
