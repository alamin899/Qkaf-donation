
  <!-- Bootstrap core JavaScript

    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src={{asset("dist/js/bootstrap.js")}}></script>
    <script src={{asset("dist/js/jquery.min.js")}}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src={{asset("dist/js/bootstrap_4.0.0_bootstrap.min.js")}}></script>
    <script src={{ asset("dist/js/donation_type.js")}} ></script>

<!-- show hide  when click on yes no radio button  -->
    {{-- <script type="text/javascript">
      $("#hide").click(function(){
        //console.log("clix")
        $("#specificdonate_show").hide();
      });
      $("#show").click(function(){
        //console.log("dfcdskj")
        $("#specificdonate_show").show();
      });
    </script> --}}

{{-- <!-- start onclick radio button value get jquery code -->
<script>
  function abc(a){
    //alert(a);
    $("#total_amount_test").html(a);
    $("#total_amount_test").val(a);
  }
</script>
<!-- end  onclick radio button value get jquery code--> --}}


{{-- <!-- start onchange other amount field jquery code -->

    <script>
      $("#amount_others, #monthly_input").on("change", function() {
         // alert($(this).val());
        $("#total_amount_test").val($('#amount_others').html());
        $('#total_amount_test').val($('#amount_others').val());
        $("#amount_others").hide();

      });
    </script> --}}

    {{-- clickEvent{
        if($('#monthly_input').hasClass('display-hide')){
            $("#monthly_input").removeClass('display-hide');
        }
    } --}}

<!-- end  onchane other amount field jquery code-->

<!-- start onchange monthly other amount field jquery code -->

{{-- <script type="text/javascript">
    $(document).ready(function() {
      // By Default Disable radio button
      $(".donation_type").attr('disabled', false);
    //   $("#donation_type").css('opacity', '.1'); // This line is used to lightly hide label for disable radio buttons.
      // Disable radio buttons function on Check Disable radio button.
      $("input:radio").change(function() {
        if ($(this).val() == "YES") {
          $(".donation_type").attr('checked', false);
          $(".donation_type").attr('disabled', true);
          $("#donation_type").css('opacity', '.2');
        }
        // Else Enable radio buttons.
        else {
          $(".donation_type").attr('disabled', false);
          $(".donation_type").css('opacity', '1');
        }
      });
      });
    </script> --}}

<!-- end  onchane monthly other amount field jquery code-->

<!-- start disable radio button after onclick yes button -->

    {{-- <script type="text/javascript">
    $(document).ready(function() {
      // By Default Disable radio button
      $(".amount").attr('disabled', false);
      $("#donate_amount").css('opacity', '.1'); // This line is used to lightly hide label for disable radio buttons.
      // Disable radio buttons function on Check Disable radio button.
      $("input:radio").change(function() {
        if ($(this).val() == "YES") {
          $(".amount").attr('checked', false);
          $(".amount").attr('disabled', true);

          $("#donate_amount").css('opacity', '.2');
        }
        // Else Enable radio buttons.
        else {
          $(".amount").attr('disabled', false);
          $(".donate_amount").css('opacity', '1');
        }
      });
      });
    </script> --}}
<!-- end disable radio button after onclick yes button -->
<!-- Start about Us Dropdown Menu Toggle Js -->
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function about_us() {
        // console.log("clicked");
      document.getElementById("about_us_menu").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.aboutus')) {
        var dropdowns = document.getElementsByClassName("about_us_menu");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>
<!-- End about Us Dropdown Menu Toggle Js -->
<!-- Start Login Dropdown Menu Toggle Js -->
    <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function log_menu() {
        console.log("userclicked");
      document.getElementById("log_menu").classList.toggle("log_show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.user_button')) {
        var login_dropdown = document.getElementsByClassName("log_menu");
        var i;
        for (i = 0; i < login_dropdown.length; i++) {
          var openDropdown = login_dropdown[i];
          if (openDropdown.classList.contains('log_show')) {
            openDropdown.classList.remove('log_show');
          }
        }
      }
    }
    </script>
<!-- End Login Dropdown Menu Toggle Js -->
<!-- Start Mobile Responsive Js -->
    <script>
        var w = window.innerWidth;
        if(w < 767){
          var x = document.createElement('div');
          x.className = 'my_class';
          document.querySelector('.header__top').after(x);
          x.appendChild(document.querySelector('.Donate_now'));
          x.appendChild(document.querySelector('.log_section'));
          x.appendChild(document.querySelector('.menu'));
        }
    </script>

<!-- End Mobile Responsive Js -->


<!-- start onclick radio button value get jquery code -->


    @include('Frontend.CustomJs.categoryJs')
    @include('Frontend.CustomJs.productJs')
    @include('Frontend.CustomJs.stateJs')
    @include('Frontend.CustomJs.cityJs')
