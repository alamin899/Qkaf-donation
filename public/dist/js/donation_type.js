
$(document).ready(function(){
    $(".monthly").click(function(){
        $(".monthly-content").show();
        $(".onetime-content").hide();
        $(".monthly").addClass('active');
        $(".onetime").removeClass('active');
    });
    $(".onetime").click(function(){
        $(".onetime-content").show();
        $(".monthly-content").hide();
        $(".onetime").addClass('active');
        $(".monthly").removeClass('active');
    });
});

function show_onetime_input() {
  var y = document.getElementById("onetime_input_field");
  if (y.style.display === "none") {
    y.style.display = "block";
  } else {
    y.style.display = "none";
  }
}

function show_monthly_input() {
  var x = document.getElementById("monthly_input_field");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

// function showspecificdonationoption() {

// }

// function hidespecificdonationoption() {

// }
