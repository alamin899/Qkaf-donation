<script>

    function countrySelect(){
        var op =" ";
    $.ajax({
        url:"{!!URL::to('getstate')!!}",
        method:"get",
        data:{country_id:$(".dropdowncountry").val()},
        type:'json',
        success:function(data){
            op+='<option value="0" selected disabled> choose state  </option>';
            data.forEach((value)=>{
                op+=`<option value="${value.id}">${value.name}</option>`;
            });
            $('#state').html(" ");
            $('#state').append(op);
        },
        error:function(error){
            console.log(error);
            alert("error");
        }
    });
    }

</script>
