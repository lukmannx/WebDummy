@extends('layouts.dashboard')
@section('content')

<div class="col-md-12">
    <div class="card shadow-lg mt-4">
        <div class="card-body ms-3">
            <h1 class="fs-5">Team</h1>
            <div class="border-bottom"></div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="card-body">
                    <p class="text-uppercase text-sm">Input Nama</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mt-3">
                                <label for="example-text-input" class="form-control-label">Nama</label>
                                <input class="form-control bg-white" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <p class="custom-file-label"></p>
                                <label for="formFile" class="form-label">Default file input</label>
                                <input class="form-control" type="file" name="photo" id="image-input">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Jabatan</label>
                                <input class="form-control bg-white" type="text">
                            </div>
                        </div>

                    </div>
                    <hr class="horizontal dark">
                </div>
            </div>
        </div>

    </div>
    <div class="card shadow-lg mt-4">
        <div class="card-body ms-3">

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <div class="dropdown p-2">
                                <button class="btn bg-light" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                            <img src="{{URL::asset('/img/team/team-2.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
