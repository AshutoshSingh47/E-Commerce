$(document).ready(function () {
  document.getElementById("btn-add-new-address").onclick = function () {
    document.getElementById("modal").style.display = "block";
  };

  window.onclick = function (event) {
    if (event.target == modal) {
      document.getElementById("modal").style.display = "none";
    }
  };

  document.getElementById("close").onclick = function () {
    document.getElementById("modal").style.display = "none";
  };

  $("#submit").on("click", function (e) {
    e.preventDefault();

    let fname = $("#fname").val();
    let lname = $("#lname").val();
    let email = $("#email").val();
    let phoneno = $("#phoneno").val();
    let houseno = $("#houseno").val();
    let streetname = $("#streetname").val();
    let city = $("#city").val();
    let state = $("#state").val();
    let country = $("#country").val();
    let pincode = $("#pincode").val();

    shippingDetails(
      fname,
      lname,
      email,
      phoneno,
      houseno,
      streetname,
      city,
      state,
      country,
      pincode
    );
  });
});

function shippingDetails(
  fname,
  lname,
  email,
  phoneno,
  houseno,
  streetname,
  city,
  state,
  country,
  pincode
) {
  $.ajax({
    url: "http://localhost/fitnationx/cart/shippingdetails/data",
    type: "POST",
    data: {
      fname: fname,
      lname: lname,
      email: email,
      phoneno: phoneno,
      houseno: houseno,
      streetname: streetname,
      city: city,
      state: state,
      country: country,
      pincode: pincode,
    },
    success(data) {
      document.getElementById("modal").style.display = "none";
      let message_id = document.getElementById("message");
      console.log(data);
      if (data == "Yes") {
         message_id.style.display="block";
         message_id.style.backgroundColor="#dff0d8";
         message_id.style.color="#3c763d";
         message_id.innerHTML =
          "Address Added Sucessfully";
          setTimeout(() => {
             message_id.style.display="none";
        }, 2000);
      } else {
         message_id.style.display="block";
         message_id.style.backgroundColor="#f2dede";
         message_id.style.color="#a94442";
         message_id.innerHTML =
          "Address Not Added Sucessfully";
          setTimeout(() => {
             message_id.style.display="none";
        }, 2000);
      }
    },
  });
}
