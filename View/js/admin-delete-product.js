$(document).ready(function(){
// alert("nj");
    $(".delete-button").on("click",function(e){
        e.preventDefault();
        let productid=$(this).attr("data-productid");
        getValue(productid);
    });
});

function getValue(productid)
{
    $.ajax({
        url:"http://localhost/fitnationx/admindeleteproduct",
        type:"POST",
        data:{productid : productid},
        success:function(data){
            location.reload();
            alert(data);
        }
    })
}
