

function validaForm(){
          
           d = document.formCadastro;
          hora = document.querySelector('#time').value;
          	 hr = hora.split(':')
		 horas = hr[0];
		 minutos = hr[1];
		horas = parseInt (horas);
		minutos = parseInt (minutos);

 
		 if (d.txtTema.value == ""){
                   alert("O campo do tema deve ser preenchido!");
                   d.txtTema.style.backgroundColor="#CD5555";
				   d.txtTema.style.color="#ffffff";
   				   d.txtTema.focus();
                   return false;
         }
        

           if (d.txtPalestrante.value == ""){
                     alert("O campo do palestrante deve ser preenchido!");
                     d.txtPalestrante.style.backgroundColor="#CD5555";
					 d.txtPalestrante.style.color="#ffffff";
					 d.txtPalestrante.focus();
                    return false;
           }
           
           if (d.txtData.value == ""){
                     alert("O campo da data deve ser preenchido!");
                     d.txtData.style.backgroundColor="#CD5555";
					 d.txtData.style.color="#ffffff";
					d.txtData.focus();
                     return false;
           }
          

	
          
		if(d.txtLocal.value == ""){
				alert("O campo do local deve ser preenchido!");
				d.txtLocal.style.backgroundColor="#CD5555";
				d.txtLocal.style.color="#ffffff";
				d.txtLocal.focus();
                     return false;

		}
		 if(d.horario.value == ""){
			alert("O campo do horario deve ser preenchido!")
			d.horario.style.backgroundColor="#CD5555";
			d.horario.style.color="#ffffff";
			d.horario.focus();
			return false;
		}
		 
		if(d.horario.value != null){
			
			if (horas > 24 || minutos > 59){
				alert("Hora inválida!")
				d.horario.style.backgroundColor="#CD5555";
				d.horario.style.color="#ffffff";
				d.horario.focus();
				return false;
			}
		}

		if(d.txtDescricao.value == ""){
				alert("O campo do descricao deve ser preenchido!");
				d.txtDescricao.style.backgroundColor="#CD5555";
				d.txtDescricao.style.color="#ffffff";
				d.txtDescricao.focus();
                     return false;

		}

		
		if(d.txtClassificacao.value == ""){
				alert("O campo da classificacao deve ser selecionado!");				
                     return false;

		}
			
};
