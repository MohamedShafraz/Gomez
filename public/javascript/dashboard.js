function y($id) {
        document.getElementById($id).classList.add("active");
        window.location.href = $id.toString(); 
    }
    function setActiveFromURL() {
  
  const url = window.location.href;
  
  
  const parts = url.split('/');

 
  const id = parts[parts.length - 1];

   const element = document.getElementById(id);
  if (element) {
    element.classList.add("active");
  }
}
window.onload = function() {
  setActiveFromURL();
};
