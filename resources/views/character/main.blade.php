@extends('layouts.app')

@section('content')
    <div class="container">
        @if($errors->any())
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Lv.{{$character->level}} (+{{$character->clevel}}) {{$character->name}} - {{$character->family}}
                    </div>
                    <div class="card-body text-center">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-4 slot-mask">
                                    <img src="{{asset('img/Archer/Armour/93.png')}}"  alt="mask"/>
                                </div>
                                <div class="col-4 slot-headband mt-3"></div>
                                <div class="col-4 slot-fairy"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4 slot-main_w"></div>
                                <div class="col-4 slot-card mt-3"></div>
                                <div class="col-4 slot-secondary_w"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4 slot-gloves"></div>
                                <div class="col-4 slot-armor mt-3"></div>
                                <div class="col-4 slot-shoes"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4 slot-ring"></div>
                                <div class="col-4 slot-necklet mt-3"></div>
                                <div class="col-4 slot-bracelet"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-4 slot-wing"></div>
                                <div class="col-4 slot-empty"></div>
                                <div class="col-4 slot-amulet"></div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-4 slot-w_skin"></div>
                                <div class="col-4 slot-c_hat"></div>
                                <div class="col-4 slot-c_body"></div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-12">
                                    <a href="#">Edit Characters Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">On this window, you can edit equipment and characters details.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
