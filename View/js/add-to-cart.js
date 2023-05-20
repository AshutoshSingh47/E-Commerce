$(document).ready(function () {
  $("#add-to-cart-button").on("click", function (e) {
    if ($(this).attr("data-session") > 0) {
      e.preventDefault();
      let productid = $(this).attr("data-id");
      getValue(productid);
    } else {
      $(this).parent().attr("action", "http://localhost/E-Commerce/signin");
    }
  });
});

function getValue(productid) {
  $.ajax({
    url: "http://localhost/E-Commerce/addtocart",
    type: "POST",
    data: {
      productid: productid,
    },
    success: function (data) {
      alert(data);
    },
  });
}
