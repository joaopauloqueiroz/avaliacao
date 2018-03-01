var dados = '';
var count = 0;
var pergunta = 0;
$(document).ready(function(){
	$('#area').hide();
	$('#vai').hide();
	var campos = '<div class="row">'
	+'<div class="col-*-*">Como forma de melhorar ainda mais a experiência de nossos clientes, queremos saber <strong>sua opinião sobre o serviço de instalação </strong>contratado.'	
	+'A pesquisa é curta e será de grande valia para melhorar os serviços prestados por nossos instalados parceiros. Obrigado!</div>'
	+'</div>';
	document.getElementById('perguntas').innerHTML = campos;

			// monitora o click do botão
			$('.bt').click(function(){
				pergunta++;
				count++;
				$('.bt').hide();
				document.getElementById('fields').innerHTML = aval;

				$("#fields").fadeToggle("slow");
				$("#fields").fadeToggle("slow",
					function(){

					}
					);

				/*Sai do load das estrelinhas e cria a nova pergunta*/
				if (count > 6) {
					document.getElementById('fields').innerHTML = '<center><img src="img/fim1.png" width="150px" onload="setTimeout(redirect, 2000);"> <br> <p>Redirecionando...</p></center>';
					document.getElementById('perguntas').innerHTML = 'Obrigado por avaliar nossos serviços! <br>';
				}else{
					if (count == 6) {
						$('#vai').show();
						document.getElementById('perguntas').innerHTML = 'Descreva sua experiencia com os nossos serviços (Opcional)';
						document.getElementById('fields').innerHTML = '';
						$('#area').show();
					}else{
				document.getElementById('perguntas').innerHTML = secaoPerguntas(count);
				}
			}
				$("#perguntas").fadeToggle("slow");
				$("#perguntas").fadeToggle("slow",
					function(){

					}
				);

			});

		});


function redirect(){
	window.location.assign("http://www.psdovidro.com.br/");
}

var aval = '<center><input type="radio" id="vazio" name="estrela" value="" checked>\
<label for="estrela_um"><i class="fa"></i></label>\
<input type="radio" id="estrela_um"  name="estrela" value="1" onclick="atualizar(this)">\
<label for="estrela_dois"><i class="fa"></i></label>\
<input type="radio" id="estrela_dois" name="estrela" value="2" onclick="atualizar(this)">\
<label for="estrela_tres"><i class="fa"></i></label>\
<input type="radio" id="estrela_tres" name="estrela" value="3" onclick="atualizar(this)">\
<label for="estrela_quatro"><i class="fa"></i></label>\
<input type="radio" id="estrela_quatro" name="estrela" value="4" onclick="atualizar(this)">\
<label for="estrela_cinco"><i class="fa"></i></label>\
<input type="radio" id="estrela_cinco" name="estrela" value="5"  onclick="atualizar(this)"></center>';


function atualizar(obj){
	var b = obj.value;
	//console.log()
	document.getElementById("p"+pergunta+"").value = pesos(pergunta, b);
	setTimeout(next, 500);
	
}

function next(){
	$('.bt').click();
}


function secaoPerguntas(obj){

	switch(obj){
		case 1:
		dados = [ 'Qual o seu nivel de satisfação com o serviço ?'];
		return dados;
		break;

		case 2: 
		dados = [ 'Qual seu nível de satisfação com a qualidade do serviço?'];
		return dados;
		break;

		case 3:
		dados = [ 'Qual seu nível de satisfação com a limpeza do serviço?'];
		return dados;
		break;

		case 4:
		dados = [ 'Qual seu nível de satisfação com o atendimento/cordialidade do instalador?'];
		return dados;
		break;

		case 5:
		dados = [ 'Qual seu nível de satisfação com a apresentação do instalador?'];
		return dados;
		break;
		default:
		dados = ['<strong>Obrigado por avaliar nossos serviços!</strong>'];
		return dados;
		break;
	}
	
}

//recebe o numero da pergunta e a quantidade de estrelas
function pesos(np, qtd)
{	
	var peso = 0;
	switch(np)
	{
		case 1:
		peso = qtd * 2;
		return peso;
		break;

		case 2:
		peso = qtd * 8;
		return peso;
		break;

		case 3:
		peso = qtd * 3;
		return peso;
		break;

		case 4:
		peso = qtd * 10;
		return peso;
		break;

		case 5:
		peso = qtd * 5;
		return peso;
		break;

		default:
		console.log('erro')
		break;
	}
}