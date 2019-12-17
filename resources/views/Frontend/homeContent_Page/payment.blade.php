<h4 class="mb-3" style="text-align:center">Payment</h4>
<div class="container">
  <div class="row">
    <div class="col-6">
        <div class="card_height card mr-4">
            <div class="card-body">
                <h5 class="card-title">Your Information</h5>
                @guest
                <p>this is guest part</p> 
            @else
            
            <div class="col-md-12 row">
                <div class="col-md-6 userinfo">
                <p>Frist-Name:</p>
                <span>{{ $user->frist_name }}"</span>
                <p>Last-Name:</p>
                <span> {{ $user->last_name }}</span>
                <p>Email:</p>
                <span> {{ $user->email }}</span>
                <p>phone_no:</p>
                <span>{{ $user->Phone}}</span>
                </div>

            </div>
<!-- 
            <div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">

                <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_donate()">Back</button>
                <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="next2()">Procced</button> -->
          <!--   </div> -->
        @endguest

            </div>
        </div>
    </div>
    <div class="col">
        <div class="card_height card">
            <div class="card-body">
                <h5 class="card-title">Your Donation</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <!-- <p ></p> -->
                <label>Donation Type:</label>
                <input type="text"  id="donationtype" readonly name=""><br>
                <label>Total Amount:</label>
                <input type="text"  id="setamount" readonly name="">
            
            </div>
        </div>
    </div>
  </div>
<div class="form-group row">
    <div class="col-md-12 offset-md-4">
        <div class="terms_conditions form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <!-- Button trigger modal -->
            <p data-toggle="modal" data-target="#exampleModalLong">
                I accept term and Condition
            </p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Terms and Condition</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                (1) The donation services
                                We will use your donation at our discretion but within our stated charitable objectives.
                                All payments through the Website are to be made by payment card or via PayPal.
                                Once you confirm to us through the Website that you wish to proceed with your donation your transaction will be processed through our payment services provider, WooCommerce. By confirming that you wish to proceed with your donation you authorize WooCommerce to request funds from your credit, debit, or PayPal card provider.
                                (2) Unauthorised card use
                                If you become aware of fraudulent use of your card, or if it is lost or stolen, you must notify your card provider.
                                (4) Information from you
                                Before we can process a donation you must provide us with (i) your name, address and email address; and (ii) details of the credit or debit card that you wish to use to fund the donation. We will use this information to process your donation. It is your responsibility to ensure you have provided us with the correct information.
                                When you submit your payment details, these details will be transferred to our payment provider, WooCommerce, and your payment data will be collected and processed securely by them. You should make sure that you are aware of WooCommerce’s terms and conditions, which are different from our own, to ensure that you are comfortable with how they will process your personal data before you make a donation.
                                We won’t share your personal details with any other third party other than is set out in our Privacy Policy. Our Privacy Policy forms part of these Donation Payment Terms and Conditions and by agreeing to these Terms and Conditions you are also agreeing to the way we use and protect your personal information in line with our Privacy Policy.
                                (5) Refund policy
                                If you make an error in your donation please contact us either by email at info@mentorinternational.org, by phone at +4687891180
                                or by post at Mentor International, Brunnsgatan 21A, Stockholm, Sweden 11138 within 14 days and a full refund will be made to you.
                                (6) Monthly donations
                                These Donation Payment Terms and Conditions will only apply to successive donations made through the Website where you have set up a monthly donation. When you set up a regular donation you will be scheduling a series of donations to be made on the day of the month that you choose until further notice. You agree that these Terms and Conditions will apply to each of the donations in that series.
                                By confirming that you wish to proceed with a monthly donation you authorize our payment service provider WooCommerce to request funds from your credit or debit card on the day of each month that you set.
                                To cancel your regular donation please contact us at info@mentorinternational.org.
                                (7) General
                                We reserve the right to amend these Donation Payment Terms and Conditions at any time.
                                These Donation Payment Terms and Conditions are governed by Swedish law and are subject to the exclusive jurisdiction of the Swedish courts.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="mt-4" style="float: right; padding-right: 70px;position:absolute;right:0px;bottom:10px">
    <button class="btn btn-secondary" type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" onClick="back_to_info()">Back</button>
    <button class="btn btn-primary"  type="submit" style="border-radius: 0px; padding: 10px 30px 10px 30px;" id="sslczPayBtn"
            token="if you have any token validation"
            postdata="your javascript arrays or objects which requires in backend"
            order="If you already have the transaction generated for current order"
            endpoint="www.google.com">Pay now</button>
</div>
<script type="text/javascript">
    function totalvalue(){
        var x=document.getElementById('total_amount_test').value;
        document.getElementById('setamount').value=x;

        var radios = document.getElementsByName('gifttype');

            for (var i = 0, length = radios.length; i < length; i++)
            {
             if (radios[i].checked)
             {
              // do whatever you want with the checked radio
              // alert(radios[i].value);
              document.getElementById('donationtype').value=radios[i].value;

              // only one radio can be logically checked, don't check the rest
              break;
             }
            }

    }
    
</script>