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
            @if(Auth::user()->characters)
            @endif
            @foreach($characters as $character)
                @include('components.CharacterModel')
            @endforeach
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-header">
                        New Character?
                    </div>
                    <div class="card-body text-center">
                        <h2><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Create Character</a></h2>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">On this window, you can create new characters.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.CreateCharacterModal')
@endsection
