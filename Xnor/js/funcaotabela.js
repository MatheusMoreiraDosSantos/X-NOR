function funcaotabela() {
	//Tipo do lanche
	var cb1 = document.getElementById('cb1');//Xnor
	var cb2 = document.getElementById('cb2');//Qbacon
	var cb3 = document.getElementById('cb3');//C#urras
	var cb4 = document.getElementById('cb4');//QTovo
	var cb5 = document.getElementById('cb5');//calabresa-c
	var cb6 = document.getElementById('cb6');//Jeysalada
	var cb7 = document.getElementById('cb7');//Bebidas

	var btn = document.getElementById('btn');
//quantidade do lanche 
	var qtd1 = document.getElementById('qtd1').value;//Xnor
	var qtd2 = document.getElementById('qtd2').value;//Qbacon
	var qtd3 = document.getElementById('qtd3').value;//C#urras
	var qtd4 = document.getElementById('qtd4').value;//Qtovo
	var qtd5 = document.getElementById('qtd5').value;//calabresa-c
	var qtd6 = document.getElementById('qtd6').value;//jeysalada
	var qtd7 = document.getElementById('qtd7').value;//Bebidas
//Variaveis da bebida
	var sabores = document.getElementById('sabores').value;
	var tipo = document.getElementById('tipo').value;
//Total de cada tipo de lanche 
	var total1=0;//Xnor
	var total2=0;//Qbacon
	var total3=0;//C#urras
	var total4=0;//QTovo
	var total5=0;//calabresa-c
	var total6=0;//jeysalada
	var total7=0;//Bebidas
//Total 
	var total = 0;
//Inicio das validaçoes 
	
//------------------------Xnor------------------------------------------------//	
	if(cb1.checked){
		total1 =  15*qtd1 ;//preço

		if(qtd1 == ''){
			alert ('Preencha o campo');
			return;
		}
		document.getElementById("produtoqtd1").innerHTML = ''+qtd1;
		document.getElementById("produtopreco1").innerHTML = 'R$ 15,00';
	}
//--------------------Qbacon------------------------------------------------//	
	if(cb2.checked){
		total2 = parseFloat(qtd2 * 13) ;//preço

		if(qtd2 == ''){
			alert ('Preencha o campo');
			return;
		}
		document.getElementById("produtoqtd2").innerHTML = ''+qtd2;
		document.getElementById("produtopreco2").innerHTML = 'R$ 13,00';
	}
//---------------------C#urras-------------------------------------------------//	
	if(cb3.checked){
		total3 = parseFloat(qtd3 * 14) ;//preço

		if(qtd3 == ''){
			alert ('Preencha o campo');
			return;
		}
		document.getElementById("produtoqtd3").innerHTML = ''+qtd3;
		document.getElementById("produtopreco3").innerHTML = 'R$ 14,00';
	}
//------------------QTovo------------------------------------------------//	
	if(cb4.checked){
		total4 = parseFloat(qtd4 * 10) ;//preço

		if(qtd4 == ''){
			alert ('Preencha o campo');
			return;
		}
		document.getElementById("produtoqtd4").innerHTML = ''+qtd4;
		document.getElementById("produtopreco4").innerHTML = 'R$ 10,00';
	}
	//----------------calabresa-c------------------------------------------//
	if(cb5.checked){
		total5 = parseFloat(qtd5 * 12) ;//preço

		if(qtd5 == ''){
			alert ('Preencha o campo');
			return;
		}
		document.getElementById("produtoqtd5").innerHTML = ''+qtd5;
		document.getElementById("produtopreco5").innerHTML = 'R$ 12,00';
	}
	//------------------jeysalada--------------------//
		if(cb6.checked){
		total6 = parseFloat(qtd6 * 7.5) ;//preço

		if(qtd6 == ''){
			alert ('Preencha o campo');
			return;
		}
		document.getElementById("produtoqtd6").innerHTML = ''+qtd6;
		document.getElementById("produtopreco6").innerHTML = 'R$ 7,50';
	}
	//----------------------bebidas----------------------------//
		if(cb7.checked){

			 	if(sabores == 1){
		  		document.getElementById('produtonome7').innerHTML = 'Suco de MaracuJAVA';
		  			if(tipo == 1){
		  			total7 = parseFloat(qtd7*4);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 4,00';
		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*8);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,00';
		 		 }else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*16);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 16,00';
		 		 }
		  	}
		  	else if(sabores == 2){
		  		document.getElementById('produtonome7').innerHTML = 'Suco de MorangoDB';
		  			if(tipo == 1){
		  			total7 = parseFloat(qtd7*4);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 4,00';
		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*8);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,00';
		 		 }
		 		  else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*16);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 16,00';
		 		 }
		  	}
		  	else if(sabores == 3){
		  		document.getElementById('produtonome7').innerHTML = 'Suco de LaranJAVA';
		  			if(tipo == 1){
		  			total7 = parseFloat(qtd7*4);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 4,00';
		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*8);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,00';
		 		 }
		 		 else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*16);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 16,00';
		 		 }

		  	}
		  		else if(sabores == 4){
		  		document.getElementById('produtonome7').innerHTML = 'Suco de Abacaxi';
		  			if(tipo == 1){
		  			total7 = parseFloat(qtd7*4);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 4,00';
		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*8);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,00';
		 		 }
		 		 else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*16);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 16,00';
		 		 }
		  	}

		    else if(sabores == 5){
		  		document.getElementById('produtonome7').innerHTML = 'Coca-Cola';
		  		if(tipo == 1){
		  			total7 = parseFloat(qtd7*3);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 3,00';

		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 5,00';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*8.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,50';
		 		 }
		  	}
		  	else if(sabores == 6){
		  		document.getElementById('produtonome7').innerHTML = 'Fanta';
		  		if(tipo == 1){
		  			total7 = parseFloat(qtd7*3);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 3,00';

		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 5,00';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*8.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,50';
		 		 }
		  	}
		  	else if(sabores == 5){
		  		document.getElementById('produtonome7').innerHTML = 'Guarana Antarctica';
		  		if(tipo == 1){
		  			total7 = parseFloat(qtd7*3);//preço
		  			document.getElementById("produtopreco7").innerHTML = 'R$ 3,00';

		 		 }
		 		 else if(tipo == 2){
		 		 	total7 = parseFloat(qtd7*5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 5,00';
		 		 }
		 		 else if(tipo == 3){
		 		 	total7 = parseFloat(qtd7*6.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 6,50';
		 		 }
		 		 else if(tipo == 4){
		 		 	total7 = parseFloat(qtd7*8.5);//preço
		 		 	document.getElementById("produtopreco7").innerHTML = 'R$ 8,50';
		 		 }
		  	}
		  
		

		 
		  

		document.getElementById("produtoqtd7").innerHTML = ''+qtd7;
		
	}

	//Final 

	
	total = total1+total2+total3+total4+total5+total6+total7;

	if(btn.checked){
		document.getElementById("total").innerHTML = 'R$ '+total;
		 return;
	}
	
	return;
}
// Tabela 
var tabela;
var tudo;
var endereco;
window.onload = function(){
	endereco = document.getElementById("pedido");
	tudo = document.getElementById("tudo");
	tabela = document.getElementById("tabela");
	var cbtabela = document.getElementById("cbtabela");
	tabela.classList.add("escondido");
}



//Função de esconder e Mostrar tabela
function mostrartabela(){
	if(cbtabela.checked){
		tabela.classList.remove("escondido");
		tudo.classList.add("escondido");
	}
	else{
		tabela.classList.add("escondido");
		tudo.classList.remove("escondido");
	}
}
function mostrarendereco(){
	if (retirar.checked){
		endereco.classList.add("escondido");
	}
	else{
		endereco.classList.remove("escondido");
	}
}
