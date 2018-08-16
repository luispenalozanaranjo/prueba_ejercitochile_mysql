function soloLetras(e)
{
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = "abcdefghijklmnñopqrstuvwxyzáéíóú ";
     
     if(letras.indexOf(tecla)==-1)
         return false;
}

function soloNumeros(e)
{
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = "1234567890";
     
     if(letras.indexOf(tecla)==-1)
         return false;
}

function validarDireccion(e)
{
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = "abcdefghijklmnopqrstuvwxyzáéíóú1234567890.,° ";
     
     if(letras.indexOf(tecla)==-1)
         return false;
}

function mail(e)
{
     key = e.keyCode || e.which;
     tecla = String.fromCharCode(key).toLowerCase();
     letras = "abcdefghijklmnopqrstuvwxyz1234567890.@ ";

     
     if(letras.indexOf(tecla)==-1)
         return false;
}

function validaRut(campo){
	if ( campo.length == 0 ){ return false; }
	if ( campo.length < 8 ){ return false; }
 
	campo = campo.replace('-','')
	campo = campo.replace(/\./g,'')
 
	var suma = 0;
	var caracteres = "1234567890kK";
	var contador = 0;    
	for (var i=0; i < campo.length; i++){
		u = campo.substring(i, i + 1);
		if (caracteres.indexOf(u) != -1)
		contador ++;
	}
	if ( contador==0 ) { return false }
	
	var rut = campo.substring(0,campo.length-1)
	var drut = campo.substring( campo.length-1 )
	var dvr = '0';
	var mul = 2;
	
	for (i= rut.length -1 ; i >= 0; i--) {
		suma = suma + rut.charAt(i) * mul
                if (mul == 7) 	mul = 2
		        else	mul++
	}
	res = suma % 11
	if (res==1)		dvr = 'k'
                else if (res==0) dvr = '0'
	else {
		dvi = 11-res
		dvr = dvi + ""
	}
	if ( dvr != drut.toLowerCase() ) { return false; }
	else { return true; }
}


