<script>
    function categorySelect(){
        console.log("good")
        $.ajax({
            url:"{!!URL::to('getproduct')!!}",
            method:"get",
            data:{catagoryId:$(".category").val()},
            type:'json',
            success:function(data){
                //alert(data);
                $('#product').html(data);

            },
            error:function(error){
            console.log(error);
            alert("error");
        }
        });
    }

</script>
