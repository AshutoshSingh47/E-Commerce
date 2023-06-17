$(document).ready(function () {
  let length = $(".quantity").length;
  for (let i = 0; i < length; i++) {
    $(".quantity")
      .eq(i)
      .on("change", function () {
        let quantity = $(".quantity").eq(i).val();
        let productid = $(".quantity").eq(i).attr("data-productid");
        let customerid = $(".quantity").eq(i).attr("data-customerid");

        getValue(productid, customerid, quantity);
      });
  }
});

function getValue(productid, customerid, quantity) {
  let count = 1;
  $.ajax({
    url: "http://localhost/fitnationx/addtocart",
    type: "POST",
    data: {
      productid: productid,
      customerid: customerid,
      quantity: quantity,
    },
    success: function (data) {
      $("#update-cart").on("click", function () {
        location.reload();
        if (count == 1) {
          alert(data);
          exit();
        }
      });
    },
  });
}
