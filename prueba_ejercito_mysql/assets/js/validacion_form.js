jQuery(function() {

   jQuery( "#frm-alumno" ).validate({
           rules: {
                   NOMBREUSUARIO: {
                           required: true
                   },
				   APELLIDOUSUARIO: {
					   required:true
				   },
				   RUTUSUARIO: {
					   required:true,
					   ValRut:true
				   },
				   MAILUSUARIO: {
					   required:true,
					   email: true
				   },
				   DIRECCIONUSUARIO: {
					   required:true
				   },
				   GENEROUSUARIO: {
					   required:true
				   }
           },
           messages: {
                   NOMBREUSUARIO: {
                           required: "Debes Ingresar tu Nombre"
                   },
				   APELLIDOUSUARIO: {
                           required: "Debes Ingresar tu(s) Apellido(s)"
                   },
				   RUTUSUARIO: {
                           required: "Debes Ingresar tu Rut",
						   ValRut: "Rut no Valido, Favor vuelva a Ingresar"
                   },
				   MAILUSUARIO: {
					   required:"Debe Ingresar su Mail",
					   email:"Debe Ingresar un Mail Valido"
				   },
				   DIRECCIONUSUARIO: {
					   required:"Debe Ingresar su Dirección"
				   },
				   GENEROUSUARIO: {
					   required:"Debe Seleccion un Genero"
				   }
           }
   });
   
   		jQuery.validator.addMethod("ValRut", function(value, element) { 
			return this.optional(element) || validaRut(value); 
		}, "Debe ingresar un RUT válido.");
});