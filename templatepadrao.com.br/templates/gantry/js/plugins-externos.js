// start-BASE JQUERY DOS PLUGINS EXTERNOS
    jQuery(document).ready(function() {
    	// START-plugin que executa o efeito de aparecer e sumir o login através das teclas de atalho
        	var execMenu = function(){
        		jQuery('#simple-menu,#simple-close').sidr({
        			side: 'right'
        		});
        	}
        	execMenu(); //executando função

        	// FUNÇÃO QUE PEGA AS TECLAS DE ATALHO
        	shortcut.add("Esc",function() {
        		jQuery("#simple-menu").click();
        		jQuery("#sclogin-username").focus();
        	});
    	// END-plugin que executa o efeito de aparecer e sumir o login através das teclas de atalho

    	// START-função que ativa o plugin de acessibilidade
        	jQuery.rvFontsize({
        		targetSection: '#rt-main',
        		store: true, // store.min.js required!
        		controllers: {
        			appendTo: '#rvfs-controllers',
        			showResetButton: true
        		}
    		});
		// END-função que ativa o plugin de acessibilidade
    });
// end-BASE JQUERY DOS PLUGINS EXTERNOS

// start-FUNÇÃO QUE SOME E APARECE COM A SETA DE ENVIAR AO TOPO
    jQuery(function() {
        jQuery(window).scroll(function() {
            if(jQuery(this).scrollTop() != 0) {
                jQuery('.setatopo').fadeIn();
                jQuery('.setatopo').css('bottom','20px');
            } else {
                jQuery('.setatopo').css('bottom','-30px');
                jQuery('.setatopo').fadeOut();
            }
        });
    });
// end-FUNÇÃO QUE SOME E APARECE COM A SETA DE ENVIAR AO TOPO