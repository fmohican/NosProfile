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
            <div class="col-12">
                <form action="{{route('app.character.details.saveEquipment', ['id' => $character->id, 'slot' => $slot])}}" method="POST" class="card" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                    <div class="card-header">
                        {{$character->name}} - {{$character->family}} - {{$character->server()->first()->short}} - Editing {{ucfirst($slot)}}
                    </div>
                    <div class="card-body text-center">
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <h3>Pick {{ucfirst($slot)}}</h3>
                            </div>
                            <div class="row justify-content-center" id="items">
                                @foreach($items as $item)
                                    <div class="col-1 slot-slot mt-3">
                                        <input type="radio" class="d-none itemRadio" name="vnum" value="{{$item->id}}" id="i_{{$item->id}}" required>
                                        <label for="i_{{$item->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$item->name}}">
                                            <img src="{{asset('img/items/'.$item->vnum.".png")}}" alt="{{$item->name}}" />
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row justify-content-center mt-3">
                                <h3>Upload Image or Import via URL</h3>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-5">
                                    <label for="formFile" class="form-label">Upload Image</label>
                                    <input class="form-control" type="file" id="formFile" name="ImageUpload" accept="image/*">
                                </div>
                                <div class="col-2">
                                    <h3 class="pt-4">OR</h3>
                                </div>
                                <div class="col-5">
                                    <label for="ImageImport" class="form-label">Import Image</label>
                                    <input type="url" class="form-control" id="ImageImport" placeholder="https://domain.tld/image.jpg" name="ImageImport">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg">Save {{ucfirst($slot)}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        //todo
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
