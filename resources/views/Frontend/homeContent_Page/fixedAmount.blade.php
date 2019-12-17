<div class="donate_type">
    <div class="onetime-content" style="display:block">
        <div class="donate_box">
            <label>
                <input type="radio" name="amount" class="amount" value='50'  onclick="abc(50)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">50</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='100'  onclick="abc(100)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">100</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='200'  onclick="abc(150)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">200</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='300'  onclick="abc(200)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">300</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='500'  onclick="abc(250)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">500</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='1000'  onclick="abc(500)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">1000</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='1500'  onclick="abc(1000)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">1500</span>
            </label>
            <label>
                <input type="radio"  name="amount" id="onetime_amount" class="amount" onclick="onetime_input_toggle()">
                <span class="donate_amount" id="onetime_amount_other">others</span>
            </label>
            <label>
                <div class="onetime_input_field" id="onetime_input_field" style="display: none;">
                    <input type="number" class="otherinput" name="amount_others" id="onetime_input">
                </div>
            </label>
        </div>
    </div>
    <div class="monthly-content" style="display:none">
        <div class="donate_box">
            <label>
                <input type="radio" name="amount" class="amount" value='200'  onclick="abc(15)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">200</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='300'  onclick="abc(25)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">300</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='500'  onclick="abc(35)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">500</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='700'  onclick="abc(50)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">700</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='1000'  onclick="abc(75)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">1000</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='1500'  onclick="abc(100)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">1500</span>
            </label>
            <label>
                <input type="radio" name="amount" class="amount" value='2000'  onclick="abc(500)">
                <span class="donate_amount"><img class="currency_icon" src="{{ asset('images/tk.png') }}" alt="tk" height="15px" width="15px">2000</span>
            </label>
            <label>
                <input type="radio"  name="amount" id="amount" class="amount" onclick="monthly_input_toggle()">
                <span class="donate_amount" id="monthly_amount_other">others</span>
            </label>
            <label>
                <div class="monthly_input_field" id="monthly_input_field" style="display: none;">
                    <input type="number" class="otherinput" name="amount_others" id="monthly_input">
                </div>
            </label>
        </div>
    </div>
</div>
