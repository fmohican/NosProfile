<div class="modal fade" id="createCharacter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{route('app.character.create')}}" method="POST" class="modal-content">
            @csrf
            @method('put')
            <div class="modal-header">
                <h5 class="modal-title" id="createNewCharacterLabel">Create Character</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label for="Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="Name" name="Name" placeholder="Character Name">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="FName" class="form-label">Family Name</label>
                            <input type="text" class="form-control" id="FName" name="FName" placeholder="Family Name">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="Level" class="form-label">Level</label>
                            <input type="number" min="1" max="99" class="form-control" id="Level" name="Level" placeholder="Level">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="CLevel" class="form-label">Champion Level</label>
                            <input type="number" min="1" max="60" class="form-control" id="CLevel" name="CLevel" placeholder="Champion Level">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="Gender" class="form-label">Gender</label>
                            <select class="form-select" id="Gender" name="Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <label for="Classes" class="form-label">Class</label>
                            <select class="form-select" id="Classes" name="Classes">
                                <option value="Adventurer">Adventurer</option>
                                <option value="Sorcerer">Sorcerer</option>
                                <option value="Archer">Archer</option>
                                <option value="Swordsman">Swordsman</option>
                                <option value="Martial Artist">Martial Artist</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="Server" class="form-label">Server</label>
                            <select class="form-select" id="Server" name="server">
                                @foreach(\App\Models\Server::all() as $server)
                                    <option value="{{$server->id}}">{{$server->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
