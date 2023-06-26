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
