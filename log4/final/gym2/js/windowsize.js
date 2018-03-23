function getwinsize() {
	var element = document.getElementById("WindowSizeOutput");
	var newDiv = document.createElement("div");
	newDiv.id = "windowSizeOutput";
	
	document.body.appendChild(newDiv);
	
	if(element) {
		element.parentNode.removeChild(element);
	}
	
	var wd = window.innerWidth;
	var ht = window.innerHeight;
	
	element = null;
	
	var display = document.getElementById("windowSizeOutput");
	
	display.style.backgroundColor = "white";
	display.style.height = "40px";
	display.style.width = "100px";
	display.style.position = "fixed";
	display.style.left = "10px";
	display.style.top = "10px";
	
	display.innerHTML = "Width: " + wd + "px" + "<br>" +"Height: " + ht + "px";
}

document.addEventListener("DOMContentLoaded", function(){getwinsize();});