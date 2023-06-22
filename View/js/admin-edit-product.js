// $(document).ready(function () {
//   $("#edit-button").on("click", function (e) {
//     e.preventDefault();
//     let productid = $(this).attr("data-productid");
//     getValue(productid);
//   });
// });

// function getValue(productid) {
//   $.ajax({
//     url: "http://localhost/fitnationx/admineditproduct",
//     type: "POST",
//     data: { productid: productid },
//     success: function (data) {
//       location.reload();
//       alert(data);
//     },
//   });
// }

$(document).ready(function () {
  $("edit-button").on("click", function (e) {
    let productid = $(this).attr("data-productid");
    window.location='http://localhost/fitnationx/';
  });
});
