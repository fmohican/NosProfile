<div class="col-12 col-md-4">
    <div class="card">
        <div class="card-header">
            Lv.{{$character->level}} (+{{$character->clevel}}) {{$character->name}} - {{$character->family}}
        </div>
        <div class="card-body text-center">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-3">
                        <a href="{{route('app.character.details.view', $character->id)}}">
                            @switch($character->classes)
                                @case("Sorcerer")
                                <img src="{{asset('img/mage.png')}}"  alt="Sorcerer" class="avatar"/>
                                @break
                                @case("Archer")
                                <img src="{{asset('img/archer.png')}}"  alt="Archer" class="avatar"/>
                                @break
                                @case("Swordsman")
                                <img src="{{asset('img/swordman.png')}}"  alt="Archer" class="avatar"/>
                                @break
                                @case("Martial Artist")
                                <img src="{{asset('img/ma.png')}}"  alt="Archer" class="avatar"/>
                                @break
                                @default
                                <img src="{{asset('img/adventure.png')}}"  alt="Adventure" class="avatar"/>
                                @break
                            @endswitch
                        </a>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="ShareURL" class="form-label">Share This Character</label>
                        <input type="text" min="1" max="60" class="form-control" id="ShareURL" value="{{route("#")}}" readonly>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <small class="text-muted">{{$character->created_at}} - <a href="{{$character->server->url ?? ""}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$character->server->name}}">{{$character->server->short}}</a></small>
        </div>
    </div>
</div>
