$(document).ready(function () {
  $("#add-to-cart-button").on("click", function (e) {
    if ($(this).attr("data-session") > 0) {
      e.preventDefault();
      let productid = $(this).attr("data-id");
      let customerid = $(this).attr("data-session");
      
      let quantity = $("#quantity").val();
      getValue(productid,customerid,quantity);
    } else {
      $(this).parent().attr("action", "http://localhost/E-Commerce/signin");
    }
  });
});

function getValue(productid,customerid,quantity) {
  $.ajax({
    url: "http://localhost/E-Commerce/addtocart",
    type: "POST",
    data: {
      productid: productid,
      customerid: customerid,
      quantity:quantity
    },
    success: function (data) {
      alert(data);
    },
  });
}
