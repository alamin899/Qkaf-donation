<script type="text/javascript">
    function projectSelect(){
      console.log("good")

            var op =" ";
    $.ajax({
            url:"{!!URL::to('getcategory')!!}",
            method:"get",
            data:{project_id:$(".project").val()},
            type:'json',
            success:function(data){
                op+='<option value="0" selected disabled> choose category....  </option>';
                data.forEach((value)=>{
                    op+=`<option value="${value.id}">${value.categoryName}</option>`;
                });
                $('#category').html(" ");
                $('#category').append(op);
            },
        error:function(error){
            console.log(error);
            alert("error");
        }
        });
    }

</script>
