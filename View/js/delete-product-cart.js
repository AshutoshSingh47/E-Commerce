$(document).ready(function () {
  $(".delete-button").on("click", function (e) {
    e.preventDefault();
    let cartid = $(this).attr("data-cartid");
    let customerid = $(this).attr("data-customerid");
    console.log(cartid);
    deleteProduct(cartid, customerid);
  });
});

function deleteProduct(cartid, customerid) {
  $.ajax({
    url: "http://localhost/fitnationx/cartdeleteproduct",
    type: "POST",
    data: {
      cartid: cartid,
      customerid: customerid,
    },
    success: function (data) {
      location.reload();
    },
  });
}
