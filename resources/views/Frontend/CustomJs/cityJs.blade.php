<script>
        // dropdowncountry
        function stateSelect(){
            // alert("BB");
            var op =" ";
        $.ajax({
            url:"{!!URL::to('getcity')!!}",
            method:"get",
            data:{state_id:$(".state").val()},
            type:'json',
            success:function(data){
                op+='<option value="0" selected disabled> choose city  </option>';
                data.forEach((value)=>{
                    op+=`<option value="${value.id}">${value.name}</option>`;
                });
                $('#city').html(" ");
                $('#city').append(op);
            },
            error:function(error){
                console.log(error);
                alert("error");
            }
        });
        }

    </script>
