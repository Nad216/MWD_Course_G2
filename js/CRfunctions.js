const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0);
});

/*Review Automatic Navigation Start*/


var countrv = 1;
setInterval(function () {	
	topa(countrv);		
	document.getElementById('radio' + countrv).checked = true;
	countrv++;
	if (countrv > 8) { countrv = 1; }
}, 2000)

function topa(counta)
{
	if(counta<2){
		document.getElementById('tpcont1').style.display = '';
		document.getElementById('tpcont2').style.display = 'none';
		document.getElementById('tpcont3').style.display = 'none';
		document.getElementById('tpcont4').style.display = 'none';
	}
	else if(counta<4){
		document.getElementById('tpcont1').style.display = 'none';
		document.getElementById('tpcont2').style.display = '';
		document.getElementById('tpcont3').style.display = 'none';
		document.getElementById('tpcont4').style.display = 'none';
	}
	else if(counta<6){
		document.getElementById('tpcont1').style.display = 'none';
		document.getElementById('tpcont2').style.display = 'none';
		document.getElementById('tpcont3').style.display = '';
		document.getElementById('tpcont4').style.display = 'none';
	}
	else if(counta<8){
		document.getElementById('tpcont1').style.display = 'none';
		document.getElementById('tpcont2').style.display = 'none';
		document.getElementById('tpcont3').style.display = 'none';
		document.getElementById('tpcont4').style.display = '';
	}
}


/*
setInterval(function () {
	document.getElementById('top_radio' + countaa).checked = true;	
	countaa++;		
	if(countaa>4){countaa = 1;}
}, 2000)

/*Review Automatic Navigation Start*/