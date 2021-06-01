$(document).ready(function(){
    /*
     Ao pressionar uma tecla no campo de busca
     OBS:Se desejar pode colocar um botão de ação e mudar para onclick neste botão
    */
	$('#buscar').on('keyup',function(){
  	    //pegar o valor do input e transformar em minúscula
  	    var texto = $('#buscar').val().toLowerCase();
         		
        //seleciona todos os elementos a dentro da section
        var a = $(this).parents('section').find('h1');
		$.each(a,function(){//percorre os elementos
    	    //texto do elemento também em letra minúscula
    	    var aTexto = $(this).text().toLowerCase();
            //se encontrar o valor procurado no texto do elemento
    	    if(aTexto.indexOf(texto) > -1){
      	      $(this).show(); //exibe
            } else {
      	      $(this).hide(); //oculta
            }
      
        });
  });
});