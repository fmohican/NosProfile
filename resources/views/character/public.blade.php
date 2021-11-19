@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Lv.{{$character->level}} (+{{$character->clevel}}) {{$character->name}} - {{$character->family}}
                    </div>
                    <div class="card-body text-center">
                        <div class="container-fluid">
                            {{-- Mask Headband Fairy --}}
                            <div class="row justify-content-center">
                                <div class="col-4 slot-mask">
                                    @if($equipment->mask)
                                        <img
                                            src="{{asset('img/items/'.$equipment->mask->item()->vnum.".png")}}"
                                            alt="{{$equipment->mask->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->mask->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 mt-3 slot-headband">
                                    @if($equipment->headband)
                                        <img
                                            src="{{asset('img/items/'.$equipment->headband->item()->vnum.".png")}}"
                                            alt="{{$equipment->headband->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->headband->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-fairy">
                                    @if($equipment->fairy)
                                        <img
                                            src="{{asset('img/items/'.$equipment->fairy->item()->vnum.".png")}}"
                                            alt="{{$equipment->fairy->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->fairy->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                            </div>
                            {{-- Main Card Secondary --}}
                            <div class="row justify-content-center">
                                <div class="col-4 slot-primary">
                                    @if($equipment->primary)
                                        <img
                                            src="{{asset('img/items/'.$equipment->primary->item()->vnum.".png")}}"
                                            alt="{{$equipment->primary->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->primary->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 mt-3 slot-card">
                                    @if($equipment->card)
                                        <img
                                            src="{{asset('img/items/'.$equipment->card->item()->vnum.".png")}}"
                                            alt="{{$equipment->card->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->card->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-secondary">
                                    @if($equipment->secondary)
                                        <img
                                            src="{{asset('img/items/'.$equipment->secondary->item()->vnum.".png")}}"
                                            alt="{{$equipment->secondary->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->secondary->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                            </div>
                            {{-- Gloves Armor Shoes --}}
                            <div class="row justify-content-center">
                                <div class="col-4 slot-gloves">
                                    @if($equipment->gloves)
                                        <img
                                            src="{{asset('img/items/'.$equipment->gloves->item()->vnum.".png")}}"
                                            alt="{{$equipment->gloves->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->gloves->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4  mt-3 slot-armor">
                                    @if($equipment->armor)
                                        <img
                                            src="{{asset('img/items/'.$equipment->armor->item()->vnum.".png")}}"
                                            alt="{{$equipment->armor->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->armor->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-shoes">
                                    @if($equipment->shoes)
                                        <img
                                            src="{{asset('img/items/'.$equipment->shoes->item()->vnum.".png")}}"
                                            alt="{{$equipment->shoes->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->shoes->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                            </div>
                            {{-- Ring Necklet Bracelet --}}
                            <div class="row justify-content-center">
                                <div class="col-4 slot-ring">
                                    @if($equipment->ring)
                                        <img
                                            src="{{asset('img/items/'.$equipment->ring->item()->vnum.".png")}}"
                                            alt="{{$equipment->ring->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->ring->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 mt-3 slot-necklet">
                                    @if($equipment->necklet)
                                        <img
                                            src="{{asset('img/items/'.$equipment->necklet->item()->vnum.".png")}}"
                                            alt="{{$equipment->necklet->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->necklet->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-bracelet">
                                    @if($equipment->bracelet)
                                        <img
                                            src="{{asset('img/items/'.$equipment->bracelet->item()->vnum.".png")}}"
                                            alt="{{$equipment->bracelet->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->bracelet->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                            </div>
                            {{-- Wings Null Amulet --}}
                            <div class="row justify-content-center">
                                <div class="col-4 slot-wing">
                                    @if($equipment->wing)
                                        <img
                                            src="{{asset('img/items/'.$equipment->wing->item()->vnum.".png")}}"
                                            alt="{{$equipment->wing->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->wing->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-empty"></div>
                                <div class="col-4 slot-amulet">
                                    @if($equipment->amulet)
                                        <img
                                            src="{{asset('img/items/'.$equipment->amulet->item()->vnum.".png")}}"
                                            alt="{{$equipment->amulet->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->amulet->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                            </div>
                            {{-- Skin CHat CBody --}}
                            <div class="row justify-content-center mt-3">
                                <div class="col-4 slot-w_skin">
                                    @if($equipment->w_skin)
                                        <img
                                            src="{{asset('img/items/'.$equipment->w_skin->item()->vnum.".png")}}"
                                            alt="{{$equipment->w_skin->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->w_skin->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-c_hat">
                                    @if($equipment->c_hat)
                                        <img
                                            src="{{asset('img/items/'.$equipment->c_hat->item()->vnum.".png")}}"
                                            alt="{{$equipment->c_hat->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->c_hat->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                                <div class="col-4 slot-c_body">
                                    @if($equipment->c_body)
                                        <img
                                            src="{{asset('img/items/'.$equipment->c_body->item()->vnum.".png")}}"
                                            alt="{{$equipment->c_body->item()->name}}"
                                            data-bs-toggle="tooltip" data-bs-html="true" data-bs-placement="bottom"
                                            title="<img src='{{asset($equipment->c_body->image)}}' alt='equipment'/>"
                                        />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">You're currently view {{$character->name}} from server <a href="{{$server->url ?? ""}}">{{$server->name}} ({{$server->short}})</a> items. Hover item to view details.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
