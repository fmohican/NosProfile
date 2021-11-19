<div class="modal fade" id="setItemModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="setItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form class="modal-content" action="{{route('#')}}" method="POST">
            @csrf
            @method('put')
            <div class="modal-header">
                <h5 class="modal-title" id="setItemModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <select class="form-select-lg" id="Slot" name="Slot" is="ms-dropdown" aria-label="Slot">
                                <option selected disabled>Please Select Slot</option>
                                <optgroup label="Headwear">
                                    <option value="Mask" data-image="{{asset('images/mask.png')}}">Mask</option>
                                    <option value="Head" data-image="{{asset('images/headband.png')}}">Head</option>
                                    <option value="Fairy" data-image="{{asset('images/fairy.png')}}">Fairy</option>
                                </optgroup>
                                <optgroup label="Offense">
                                    <option value="Primary" data-image="{{asset('images/main_w.png')}}">Primary Weapon</option>
                                    <option value="Card" data-image="{{asset('images/card.png')}}">Card</option>
                                    <option value="Secondary" data-image="{{asset('images/secondary_w.png')}}">Secondary Weapon</option>
                                </optgroup>
                                <optgroup label="Defense">
                                    <option value="Gloves" data-image="{{asset('images/gloves.png')}}">Gloves</option>
                                    <option value="Armor" data-image="{{asset('images/armor.png')}}">Armor</option>
                                    <option value="Shoes" data-image="{{asset('images/shoes.png')}}">Shoes</option>
                                </optgroup>
                                <optgroup label="Accessories">
                                    <option value="Ring" data-image="{{asset('images/ring.png')}}">Ring</option>
                                    <option value="Necklace" data-image="{{asset('images/necklet.png')}}">Necklace</option>
                                    <option value="Bracelet" data-image="{{asset('images/bracelet.png')}}">Bracelet</option>
                                </optgroup>
                                <optgroup label="Accessories">
                                    <option value="Wings" data-image="{{asset('images/wings.png')}}">Costume Wings</option>
                                    <option value="Amulet" data-image="{{asset('images/amulet.png')}}">Amulet</option>
                                </optgroup>
                                <optgroup label="Accessories">
                                    <option value="W_Skin" data-image="{{asset('images/w_skin.png')}}">Weapon Skin</option>
                                    <option value="C_Hat" data-image="{{asset('images/c_mask.png')}}">Costume Hat</option>
                                    <option value="C_Body" data-image="{{asset('images/c_body.png')}}">Costume Body</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <select class="form-select-lg" id="equipment_icon" name="equipment_icon" aria-label="Equipment">
                                <option selected disabled>Select slot first</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Set Item</button>
            </div>
        </form>
    </div>
</div>
