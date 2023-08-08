number=60;
minutos=29;
let radioButtons = document.querySelectorAll('input[type="radio"]');


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


    // radioButtons.forEach(radioButton => radioButton.disabled = true);
    // radioButtons.forEach(radioButton => radioButton.check = true);
    // for (var i = 1; i <= 60; i++) {
    //   var radios = document.getElementsByName('pregunta'+i);
    // }
    
    // for (var radio of radios)
    // {
    //     if (radio.checked) {
    //         respuestas = radio.value;
    //     }
    // }
    // window.location.href = "/evaluarb";
    clearInterval(timer);
    
  }
},1000);


