const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0);
});

/*Review Automatic Navigation Start*/

var countrv = 1;
setInterval(function(){
	document.getElementById('radio' + countrv).checked = true;
	countrv++;
	if(countrv > 10)
		countrv = 1	
},1500)

/*Review Automatic Navigation Start*/