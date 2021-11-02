@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-password-image" style="background: url(/assets/img/dogs/lab2.png);background-size: cover;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-2" style="font-weight: bold;">{{$laboratory->name}}</h4>
                                        <p class="mb-4">{{$laboratory->description}}<br></p>
                                    </div>
                                    <form class="user" action="{{route('public.accessories', $laboratory->id)}}">
                                        <div class="text-center">
                                            <hr>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: #FFCD14;border-style: none;color: rgb(0,0,0);">Ver accesorios</button>
                                    </form>
                                    <form class="user" action="{{route('public.actives', $laboratory->id)}}">
                                        <div class="text-center">
                                            <hr>
                                        </div><button class="btn btn-primary d-block btn-user w-100" type="submit" style="background: #FFCD14;border-style: none;color: rgb(0,0,0);">Ver activos</button>
                                    </form>
                                    <div class="text-center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
