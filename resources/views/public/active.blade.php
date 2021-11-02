@extends('layouts.public')

@section('content')
    <div class="container-fluid">
        <h3 class="text-dark mb-4" style="font-weight: bold;">{{$laboratory->name}}</h3><label class="form-label" for="email" style="color: #1c478b;border-color: #1c478b;font-size: 20PX;"><strong>ARDUINO UNO</strong><br></label>
        <div class="row mb-3">
            <div class="col-lg-4">
                <div class="card mb-3">
                    <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/601-6015011_arduino-uno-png.png" width="160" height="160">
                        <div class="mb-3"></div><label class="form-label" for="email" style="color: #010c1e;border-color: #1c478b;"><strong>{{$accessory}} Unidades Disponibles</strong><br></label>
                        <div class="mb-3"></div>
                        <form>
                            <div class="row">
                                <div class="col"><button class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #1c478b;">-</button></div>
                                <div class="col"><label class="col-form-label" for="email" style="color: rgb(0,0,0);"><strong>1</strong></label></div>
                                <div class="col"><button class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #1c478b;">+</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row mb-3 d-none">
                    <div class="col">
                        <div class="card textwhite bg-primary text-white shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card textwhite bg-success text-white shadow">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col">
                                        <p class="m-0">Peformance</p>
                                        <p class="m-0"><strong>65.2%</strong></p>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                </div>
                                <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <form>
                                    <div class="row">
                                        <div class="col"><label class="col-form-label" for="email" style="color: #1c478b;border-color: #1c478b;"><strong>Descripción</strong><br></label></div>
                                        <div class="col"><label class="col-form-label" for="email" style="color: rgb(0,0,0);"><strong>Características</strong></label></div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="email" style="color: rgb(0,0,0);"><strong>Arduino UNO</strong></label>
                                                <p>El Arduino Uno es una placa de microcontrolador de código abierto basado en el microchip ATmega328P y desarrollado por Arduino.cc.​​ La placa está equipada con conjuntos de pines de E/S digitales y analógicas que pueden conectarse a varias placas de expansión y otros circuitos.<br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3" style="text-align: center;"><button class="btn btn-primary btn-sm" type="submit" style="text-align: center;background: #1c478b;">Agregar al Carrito</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="card shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
