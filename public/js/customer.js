// setInterval(muestraReloj, 1000);

number=0;
minutos=5;
const timer = setInterval(()=>{

  document.getElementById("reloj").innerHTML = minutos+':'+number;
  if (number==0) {
    
    if (number==0 && minutos==0) {
      clearInterval(timer);
    }

      // number = '0' + number++;
      
      minutos--;
      number=60;
    
  }else{
    document.getElementById("reloj").innerHTML = minutos+':'+number;
  }
  number--;
  if(number < 10) { number = '0' + number; }
  console.log(number);
  document.getElementById("reloj").innerHTML = minutos+':'+number;
  // if(minutos < 10) { minutos = '0' + minutos; }
  
  

  
  
},1000);


