(function mostrarAlerta(){
	var div = document.getElementById("alerta");
	div.style.display="block";
	var top = document.getElementById("boxtop");
	top.style.display="block";
	div.style.top = "50%";
	div.style.opacity = "1";
})();


(function mostrarSucesso(){
	var sucesso = document.getElementById("sucesso");
	sucesso.style.display="block";
	sucesso.style.top = "50%";
	sucesso.style.opacity = "1";
})();

function apagar(){
	var div = document.getElementById("alerta");
	div.style.animation = "gotop 3s";
	div.style.top = "0";
	div.style.opacity = "0";
}




function redirect(){
	window.location = "cadastroUnidade.php";
}

setTimeout(redirect(), 2000);


