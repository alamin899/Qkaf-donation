<div class="fixed_amount col-md-12" style="display:block">
    <div class="row chose_type_of_donation" style="padding-top:20px;padding-left:30px">
        <div>Choose a Gift Type:</div>
        <div class="gift_type">
            <label class="radio-inline">
                <input type="radio" name="gifttype" id="Onetime" value="onetime" checked>
                <span style="margin-left: 20px;"> One Time</span>
            </label>
            <label class="gift_type_label radio-inline">
                <input type="radio" name="gifttype" id="Monthly" value="monthly">
                <span style="margin-left: 20px;">Monthly</span>
            </label>
        </div>
    </div>
    <div class="chose_amount_row row mt-4">
        <div class="chose_amount_position col-md-2">
            <div class="chose_amount">Choose Amount:</div>
        </div>
        <div class="col-md-10">
            @include('Frontend.homeContent_Page.fixedAmount')
        </div>
    </div>
</div>
<div class="row mt-2">
    <div class="total_amount_">
        <div class="row total_amount" style="margin:0px;padding:0px">
            <label class="" for="">Total</label>
            <input class="Total_amount_input" type="text" readonly name="total_amount_test" id="total_amount_test" value="" onchange="myFunction()">
        </div>
    </div>
    <div class="Process">
        <button class="refresh btn btn-secondary" id="refresh" type="submit" onClick="refreshPage()">Refresh</button>
        <button class="proccedtoinfo_ btn btn-primary" id="proccedtoinfo"  disabled type="submit" onClick="next()">Procced</button>
    </div>
</div>
