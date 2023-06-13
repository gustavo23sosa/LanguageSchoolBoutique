function muestraReloj() {
  var fechaHora = new Date();
  var secons = fechaHora.getSeconds();
  var segundos = 0;
  var minutos = 0;

  while(minutos<=5){
   segundos = segundos++;
    if(segundos==60){
      minutos++;
    }
  }
  

  if(minutos < 10) { minutos = '0' + minutos; }
  if(segundos < 10) { segundos = '0' + segundos; }

  document.getElementById("reloj").innerHTML = minutos+':'+segundos;
}

function Prueba(){
	var fechaHora=new Date();
	var segundos = fechaHora.getSeconds();
	var minutos = '0';

	if(horas < 10) { horas = '0' + horas; }
  	if(minutos < 10) { minutos = '0' + minutos; }
	if (segundos=60){
		minutos++
	}

	document.getElementById("reloj1").innerHTML = minutos+':'+segundos;	

}

// setInterval(muestraReloj, 1000);

number=60;
minutos=4;
const timer = setInterval(()=>{
  
  
  document.getElementById("reloj").innerHTML = minutos+':'+number;
  // if(minutos < 10) { minutos = '0' + minutos; }
  // if(number < 10) { number = '0' + number; }

  while(minutos>0){
    number--;
    if(number==0){
      minutos--;
      if (number==0) {
        clearInterval(timer);
      }
    }  
  }
  
  
},1000);


