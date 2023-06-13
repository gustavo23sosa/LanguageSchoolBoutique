function habilitar(){
	text_1=document.getElementById("txt_1").value;
	text_2=document.getElementById("txt_2").value;
	text_3=document.getElementById("txt_3").value;
	text_4=document.getElementById("txt_4").value;
	text_5=document.getElementById("txt_5").value;
	select=document.getElementById("select").value;
	text_7=document.getElementById("txt_7").value;
	text_8=document.getElementById("txt_8").value;
	text_9=document.getElementById("txt_9").value;
	val = 0;

	if(text_1 == ""){
		val++;
	}
	if(text_2 == ""){
		val++;
	}
	if(text_3 == ""){
		val++;
	}
	if(text_4 == ""){
		val++;
	}
	if(text_5 == ""){
		val++;
	}
	if(text_7 == ""){
		val++;
	}
	if(text_8 == ""){
		val++;
	}
	if(text_9 == ""){
		val++;
	}
	if(select == ""){
		val++;
	}
	if(val == 0){
		document.getElementById("btn").disable=false;
	}else{
		document.getElementById("btn").disable=true;
	}
}
document.getElementById("txt_1").addEventListener("keyup",habilitar);
document.getElementById("txt_2").addEventListener("keyup",habilitar);
document.getElementById("txt_3").addEventListener("keyup",habilitar);
document.getElementById("txt_4").addEventListener("keyup",habilitar);
document.getElementById("txt_5").addEventListener("keyup",habilitar);
document.getElementById("txt_7").addEventListener("keyup",habilitar);
document.getElementById("txt_8").addEventListener("keyup",habilitar);
document.getElementById("txt_9").addEventListener("keyup",habilitar);
document.getElementById("select").addEventListener("change",habilitar);
document.getElementById("btn").addEventListener("click",()=>{
	alert("has llenado todo");
});
