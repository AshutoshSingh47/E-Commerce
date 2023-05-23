$(document).ready(function(){
    let length=$(".quantity").length;
    for(let i=0;i<length;i++)
    {
        console.log($(".quantity").eq(i).val());
    }
    
});
