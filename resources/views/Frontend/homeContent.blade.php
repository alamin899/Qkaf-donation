@extends('Frontend.master')
@section('title')
    Home Page
@endsection
@section('content')
<div style="background-image:url('{{asset('images/bac.png')}}');background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="tab_section col-md-2 my-4 col-sm-12 col-xs-12">
                <div class="tab">
                    <a class="tablinks avoid-clicks" onclick="openTab(event, 'donation')" id="defaultOpen">
                        <div class="tablinks_center">
                            <img src="{{ asset('images/heart.png') }}" id="donateimg" alt="" height="57px" width="57px">
                            <p>donate</p>
                        </div>
                    </a>
                    <hr style="margin: 0px; padding: 0px;">
                    <a class="tablinks avoid-clicks" onclick="openTab(event, 'PersonalInfo')">
                        <div class="tablinks_center">
                            <img src="{{ asset('images/request.png') }}" alt="" id="personalinfo" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                            <p>info</p>
                        </div>
                    </a>
                    <hr style="margin: 0px; padding: 0px;">
                    <a class="tablinks avoid-clicks" onclick="openTab(event, 'Payment')">
                        <div class="tablinks_center">
                            <img src="{{ asset('images/debit-card.png') }}" alt="" height="57px" width="57px" style="margin-left: auto;margin-right: auto;display: block;">
                            <p>pay</p>
                        </div>
                    </a>
                </div>
            </div>
            <div id="donation" class="tabcontent col-md-10 my-4 col-sm-12 col-xs-12">
                <div class="col-md-10 mb-4" style="height:500px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                    @include('Frontend.homeContent_Page.donate')
                </div>
            </div>
            <div id="PersonalInfo" class="tabcontent col-md-10 my-4 col-sm-12 col-xs-12">
                <div class="col-md-10 mb-4" style="height:75px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                    @include('Frontend.homeContent_Page.personal_Information_up')
                </div>
                <div class="col-md-10 mb-4" style="height:400px;background-color:rgba(255, 255, 255, 0.8);padding:0px;position:relative;max-width: 100% !important">
                    @include('Frontend.homeContent_Page.personal_Information')
                </div>
            </div>
            <div id="Payment" class="tabcontent col-md-10 my-4 col-sm-12 col-xs-12">
                <div class="col-md-10 mb-4" style="height:500px;background-color:rgba(255, 255, 255, 0.8);max-width: 100% !important;">
                        @include('Frontend.homeContent_Page.payment')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!--start javascript code for varticle Tab active onclick  -->
<script>
    function openTab(evt, name) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
        // tablinks[i].style.pointer-events = "none";
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(name).style.display = "block";
        evt.currentTarget.className += " active";
        evt.currentTarget.className.replace += " avoid-clicks";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    // document.getElementById("defaultOpen").style.pointer-events = "yes";
</script>
<!--end javascript code for varticle Tab active onclick  -->

<!--start javascript code for onClick next Tab active  -->
<script>
    function next(){
        var i , tabcontent = $('.tabcontent') , tablinks = $('.tablinks');
        for (i = 0; i < tablinks.length; i++){
            if($(tablinks[i]).hasClass('active') == true){
                break;
            }
        }
        if(i < tablinks.length - 1){
            $(tablinks[i]).removeClass('active');
            $(tablinks[i+1]).addClass('active');
            //for tabcontent
            $(tabcontent[i].style.display = "none");
            $(tabcontent[i+1].style.display = "block");
            document.getElementById('donateimg').src='{{ asset('images/heart(1).png') }}';
        }
    }
    function next2(){
        var i , tabcontent = $('.tabcontent') , tablinks = $('.tablinks');
        for (i = 0; i < tablinks.length; i++){
            if($(tablinks[i]).hasClass('active') == true){
                break;
            }
        }
        if(i < tablinks.length - 1){
            $(tablinks[i]).removeClass('active');
            $(tablinks[i+1]).addClass('active');
            //show next tabcontent
            $(tabcontent[i].style.display = "none");
            $(tabcontent[i+1].style.display = "block");
            document.getElementById('personalinfo').src='{{ asset('images/request(1).png') }}';

        }
        totalvalue();
    }
</script>
<!--end javascript code for onClick next Tab active  -->

<!--start javascript code for onClick previous Tab active  -->
<script>
    function back_to_donate(){
        console.log("click");
        var i , tabcontent = $('.tabcontent') , tablinks = $('.tablinks');
        for(i = 0; i < tablinks.length; i++){
            if($(tablinks[i]).hasClass('active') == true){
                break;
            }
        }
        if(i != 0){
            // for tab
            $(tablinks[i]).removeClass('active');
            $(tablinks[i-1]).addClass('active');


            // for pane
            $(tabcontent[i].style.display = "none");
            $(tabcontent[i-1].style.display = "block");
            document.getElementById('personalinfo').src='{{ asset('images/request.png') }}';
            document.getElementById('donateimg').src='{{ asset('images/heart.png') }}';
        }
    }
    function back_to_info(){
        console.log("click");
        var i , tabcontent = $('.tabcontent') , tablinks = $('.tablinks');
            for(i = 0; i < tablinks.length; i++){
                if($(tablinks[i]).hasClass('active') == true){
                    break;
                }
            }
            if(i != 0){
                // for tab
                $(tablinks[i]).removeClass('active');
                $(tablinks[i-1]).addClass('active');


                // for pane
                $(tabcontent[i].style.display = "none");
                $(tabcontent[i-1].style.display = "block");
                document.getElementById('personalinfo').src='{{ asset('images/request.png') }}';
            }
    }
</script>
<!--end javascript code for onClick previous Tab active  -->

<!-- start onclick radio button show/hide fixed amount and specific Project section jquery code -->
<script>
        $(document).ready(function(){
            $("#amount").click(function(){
                console.log("amount")
                $(".fixed_amount").show();
                $(".specific_project").hide();
            });
            $("#specific_project").click(function(){
                console.log("specific_project")
                $(".specific_project").show();
                $(".fixed_amount").hide();
            });
        });
    </script>
    <!-- end onclick radio button show/hide fixed amount and specific Project section jquery code -->

<!-- start show hide  when click radio button gifttype -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#Onetime").click(function(){
            console.log("Onetime")
            $(".onetime-content").show();
            $(".monthly-content").hide();
        });
        $("#Monthly").click(function(){
            console.log("monthly")
            $(".monthly-content").show();
            $(".onetime-content").hide();
        });
    });
</script>
<!-- end show hide when click radio button gifttype -->

<!-- start toggle  when click radio button onetime & monthly -->
<script>
    function onetime_input_toggle() {
    // console.log("monthly")
    var x = document.getElementById("onetime_input_field");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "block";
    }
  }
  function monthly_input_toggle() {
    // console.log("monthly")
    var x = document.getElementById("monthly_input_field");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "block";
    }
  }
</script>
<!-- end toggle  when click radio button onetime & monthly -->

<!-- start get value onchange amount input field field jquery code -->
<script>
    //one time input
    $("#onetime_input").on("change", function() {
    // alert($(this).val());
    $("#total_amount_test").val($('#onetime_input').html());
    $('#total_amount_test').val($('#onetime_input').val());
    // $("#onetime_input,#monthly_input").toggle();
    });

    //monthly input
    $("#monthly_input").on("change", function() {
    // alert($(this).val());
    $("#total_amount_test").val($('#monthly_input').html());
    $('#total_amount_test').val($('#monthly_input').val());
    // $("#onetime_input,#monthly_input").toggle();
    });
</script>
<!-- end get value onchange amount input field field jquery code -->

<!-- start onclick radio button value get jquery code -->
<script>
    function abc(a){
        //alert(a);
        var x = document.getElementById("onetime_input_field");
        var y = document.getElementById("monthly_input_field");
        if (x.style.display === "block") {
        x.style.display = "none";
        } else {
        x.style.display = "none";
        }
        if (y.style.display === "block") {
        y.style.display = "none";
        } else {
        y.style.display = "none";
        }
        $("#total_amount_test").html(a);
        $("#total_amount_test").val(a);
    }
</script>
<!-- end  onclick radio button value get jquery code-->

<!-- start Refresh page jquery code-->
<script>
    function refreshPage(){
        location.reload();
    }
</script>
<!-- end Refresh page jquery code-->

<!-- start show hide  when click radio button user logcheck -->
<script type="text/javascript">
    $(document).ready(function(){
        $("#login").click(function(){
            console.log("login")
            $(".login_content").show();
            $(".registration_content").hide();
        });
        $("#registration").click(function(){
            console.log("registration")
            $(".registration_content").show();
            $(".login_content").hide();
        });
    });
</script>
<!-- end show hide when click radio button gifttype -->

<!-- start Enable user while check process are done -->
<script>
    function myFunction() {
        var nameInput = document.getElementById('total_amount_test').value;
        document.getElementById('proccedtoinfo').disabled = true;
        console.log(nameInput);
        if (nameInput === "") {
            document.getElementById('proccedtoinfo').disabled = true;
        } else {
        		document.getElementById('proccedtoinfo').disabled = false;
        }
    }


</script>

<!-- end Enable user while check process are done -->

<!-- start add to cart item process -->
{{-- <script>
    var cart = [];
    var Item = function(name,price,count){
        this.name= name;
        this.price = price;
        this.count = count;
    };
    function additemtoCart(name,price,count){
        var item = new Item(name,price,count);
        cart.push(item);
    }

    additemtoCart("apple", 1.22 ,1);
    console.log(cart);
</script> --}}


<!-- start register account  process -->
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#registarsubmit').click( function() {
            var fristname = $("#fristname").val();
            var lastname = $("#lastname").val();
            var email = $("#email").val();
            var dropdowncountry = $("#dropdowncountry").val();
            var state = $("#state").val();
            var city = $("#city").val();
            var address = $("#address").val();
            var zip = $("#zip").val();
            var phone = $("#phone").val();
            var password = $("#password").val();
            var password_confirm = $("#password-confirm").val();
            var userdata = 'fristname='+fristname+'&lastname='+lastname+'&email='+email+'&dropdowncountry='+dropdowncountry+'&state='+state+'&city='+city+'&address='+address+'&zip='+zip+'&phone='+phone+'&password='+password+'&password_confirm='+password-confirm;
            // alert(lastname).val();
            // var url = "/ajaxadd";
            $.ajax({
            type: "POST",
            // url: {!!URL::to('userreg')!!},
            data: userdata,
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log('Error:', data);
            }
            });
        });
    });
</script>
<!-- end register account  process -->


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
@endsection
