const $usernameVaidator = document.getElementById("username");
const $passwordVaidator = document.getElementById("password");
function usernameValidator() {
  if ($usernameVaidator.value.length > 5) {
    $usernameVaidator.style.background = "blue";
  } else {
    $usernameVaidator.style.background = "";
  }
}
