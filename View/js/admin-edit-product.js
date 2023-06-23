$(document).ready(function () {
  $("#update-btn").on("click", function (e) {
    e.preventDefault();

    let productname = $("#pname").val();
    let productsku = $("#psku").val();
    let productdescription = $("#pdescription").val();
    let price = $("#price").val();
    let quantity = $("#quantity").val();
    let productimage = $("#image").val();
    let productid = $(this).attr("data-productid");

    editProduct(
      productname,
      productsku,
      productdescription,
      price,
      quantity,
      productimage,
      productid
    );
  });
});

function editProduct(
  productname,
  productsku,
  productdescription,
  price,
  quantity,
  productimage,
  productid
) {
  $.ajax({
    url: "http://localhost/fitnationx/adminupdateproduct",
    type: "POST",
    data: {
      productname: productname,
      productsku: productsku,
      productdescription: productdescription,
      price: price,
      quantity: quantity,
      productimage: productimage,
      productid: productid,
    },
    success: function (data) {
      
      alert(data);
      window.location = "http://localhost/fitnationx/admin/products";
      
    },
  });
}