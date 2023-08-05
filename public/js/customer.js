// setInterval(muestraReloj, 1000);

number=60;
minutos=29;
const timer = setInterval(()=>{

  
  
  
  
  if (minutos>=1 && number==0) {
    minutos--;
    number=60;
  }
  
  console.log(number);
  number--;
  document.getElementById("reloj").innerHTML = minutos+':'+number;
  if(number<10 && minutos>=10) { document.getElementById("reloj").innerHTML = minutos+':0'+number;}
  else if(number<10 && minutos<10) { document.getElementById("reloj").innerHTML = '0'+minutos+':0'+number;}
  else if(minutos<10) { document.getElementById("reloj").innerHTML = '0'+minutos+':'+number;}


  if(number==0 && minutos == 0){
    clearInterval(timer);
  }
  

  
  
},1000);


