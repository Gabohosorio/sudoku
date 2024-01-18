//Developed by: Gabohsoft 2023P2
ruta = 'http://localhost/sudoku';
sdk = 1;

function numsdk(){
	objsdk = document.getElementById('numsdk');
	if(objsdk.value!=null || objsdk.value<1){
		objsdk.value = 1;
	}
	else if(objsdk.value>152){
		objsdk.value = 152;
	}
	//location.href='updateparametric.php/?id';
}

function selbutton(item){
	sdk = item; id = "key"+item;
	stylBt0 = "background: #C6CD32; width: 40px; margin-right: 5px; margin-bottom: 5px;";
	stylBt1 = "background: #d8ad1d; width: 40px; margin-right: 5px; margin-bottom: 5px;";
	objbt = document.getElementById('Msg1');
	objky = document.getElementById(id);
	objbt.innerHTML = item;
	Vkeys = document.getElementsByClassName("Btk");
	for(i=0; i<Vkeys.length; i++){
		Vkeys[i].style = stylBt1;
	}
	objky.style = stylBt0;
}

function pushBt(item){
	item.value = parseInt(sdk, 10);
}

function Iniciar(){
	selbutton(1);
}

window.onload=Iniciar;
