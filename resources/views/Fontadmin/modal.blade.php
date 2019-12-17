<!-- Button trigger modal -->
<button type="button" class="btn btn-primary cart_button" data-toggle="modal" data-target="#exampleModalCenter" id="cart_button">
    Add To Cart
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="modal-title" id="exampleModalCenterTitle">
                <p>note:1 xraay  price 3500 </p>
                {{-- {{ $product->productName }} {{ $product->price }} --}}
            </div>
            <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="left_body col-md-4 md-3">
                    <div class="image">
                            <img src="{{ asset('images/logo.png') }}"  alt="" height="40px" width="40px" class="center">
                            <p></p>
                            {{-- {{ $product->images }}
                            {{ $product->productName }} --}}
                    </div>
                </div>
                <div class="row">
                    <div class="right_body col-md-12 md-3">
                        <p>How many you want to give ?</p>
                        <div class="enter_quantity">
                                <label for="amount text:right">Quantity</label>
                                <input type="number" class="quantity" id="quantity" name="quantity" placeholder="" required>
                                <div class="invalid-feedback">
                                    Please enter how much you want to donate.
                                </div>
                        </div>

                        <div class="amount_total">
                            <p>total amount</p>
                            <h1>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
        </div>
    </div>
    </div>
</div>
