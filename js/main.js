/*Máscara de preeenchimento do input telefone*/
		function mascara_input(o,f){
			v_obj = o
			v_func = f
			setTimeout("execmascara(),1")
		}

		function execmascara(){
			v_obj.value = v_func(v_obj.value)
		}

		function mascara_telefone(v){
			v = v.replace(/\D/g,"");
			v = v.replace(/^(\d{2})(\d)/g,"($1) $2");
			v = v.replace(/(\d)(\d{4})$/,"$1-$2");
			return v;
		}

		function id(el){
			return document.getElementById(el);
		}

		window.onload = function(){
			id('telefone').onkeyup = function(){
				mascara_input(this, mascara_telefone);
			}
		}