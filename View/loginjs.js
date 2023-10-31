
                document.getElementById("set1").onmouseenter = function select() {
                    document.getElementById("set1").innerHTML = "<font class='GMfont'>" + document.getElementById("set1").innerText + "</font>";
                    document.getElementById("set1").className = "selected";
                }
                document.getElementById("set1").ontouch = function select() {
                    document.getElementById("set1").innerHTML = "<font class='GMfont'>" + document.getElementById("set1").innerText + "</font>";
                    document.getElementById("set1").className = "selected";
                }
                document.getElementById("set1").onmouseleave = function unselect() {
                    document.getElementById("set1").innerHTML = "Home";
                    document.getElementById("set1").className = "";
                }
                document.getElementById("set").onmouseenter = function select1() {
                    document.getElementById("set").innerHTML = "<font class='GMfont'>" + document.getElementById("set").innerText + "</font>";
                    document.getElementById("set").className = "selected";
                }
                document.getElementById("set").onmouseleave = function unselect1() {
                    document.getElementById("set").innerHTML = "Contact Us";
                    document.getElementById("set").className = "";
                }
                
                document.getElementById("submit").onclick = function validation() {
                    if(document.getElementById("password").value.length<8){ 
                    document.getElementById("p1").innerText="Password must contain minimum 8 digit";
                    document.getElementById("p1").className="emailOpen";
                }
            }
            if(document.getElementById("test").value=='on'){
                document.getElementsByClassName('navbar').style.color}
                
            