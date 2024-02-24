function z($id) {
  window.location.href += "/id=" + $id.toString();
}

function y($id) {
  document.getElementById($id).classList.add("active");
  window.location.href = $URLROOT + "/" + $usertype + "/" + $id.toString();
}
function setActiveFromURL() {
  const url = window.location.href;

  const parts = url.split("/");

  const id = parts[5].toLowerCase();

  const element = document.getElementById(id);
  if (element) {
    element.classList.add("active");
  }
}

window.onload = function () {
  setActiveFromURL();
};
