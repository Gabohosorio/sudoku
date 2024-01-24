//Developed by: Gabohsoft 2023P2
ruta = 'http://localhost/sudoku';
sdk = 1; 	bkc0 = "#F1F783"; //"#C6CD32";

function numsdk(){
	objsdk = document.getElementById('numsdk');
	objlev = document.getElementById('Msg1');
	if(objsdk.value==null || objsdk.value<1){
		objsdk.value = 1;
	}
	else if(objsdk.value>152){
		objsdk.value = 152;
	}
	objlev.innerHTML = objsdk.value;
	location.href='updatelevel.php/?lv='+objlev.innerHTML;
}

function selbutton(item){
	sdk = item.innerHTML;
	stylBt0 = "background: #C6CD32; width: 40px; margin-right: 5px; margin-bottom: 5px;";
	stylBt1 = "background: #d8ad1d; width: 40px; margin-right: 5px; margin-bottom: 5px;";
	bkc1 = "#FFF";
	bkc2 = "#dddfe1";
	Vkeys = document.getElementsByClassName("Btk");
	for(i=0; i<Vkeys.length; i++){
		Vkeys[i].style = stylBt1;
	}
	item.style = stylBt0;
	vsdk = document.querySelectorAll("#keysdk input");
	for(f=0; f<9; f++){
		for(c=0; c<9; c++){
			if(((f<3 || f>5) && (c<3 || c>5)) || ((f>2 && f<6) && (c>2 && c<6))){
				vsdk[f*9+c].style.background = bkc1;
			}
			else{
				vsdk[f*9+c].style.background = bkc2;
			}
			if(vsdk[f*9+c].value == sdk){
				vsdk[f*9+c].style.background = bkc0;
			}
		}
	}
	document.getElementById("Msg2").innerHTML = vsdk.length;
}

function pushBt(item){
	item.value = parseInt(sdk, 10);
	//item.classList.toggle('tx18'); si ya tiene la clase se la quita, y si no la tiene se la coloca
	item.classList.remove('tx18');
	item.classList.add('tx16s');
	item.style.background = bkc0;
	//alert(item.classList);
}

function Iniciar(){
	selbutton(document.getElementById('key1'));
}

window.onload=Iniciar;
