function preloadImages(images) {
    $(images).each(function() {
        $('<img/>')[0].src = this;
    });
}

$(document).ready(function() {
    preloadImages([
        '/static/img/menubg-over.png'
    ]);
});


/**
 *=====================================================================================
 * 
 * O QUE AINDA FALTA FAZER
 * 
 *   Pegar TODAS as sessões dinamicamente dos arquivos de portfolio
 *     As sessÕes devem ser uma única tag especial com argumentos
 *   A lista de menus deve ser condizente à lista de sessÕes
 * 
 *=====================================================================================
 */

var pfmodal = {
    // id do modal
    _modal: $('#portfolio_modal'),
    // item de portfolio atual
    item: {},
    
    /**
     * Retorna o elemento modal
     */
    getModal: function() {
        return this._modal;
    },
    
    /**
     * Retorna o "primeiro" item de uma array/objeto associativa
     */
    getFirstAssoc: function(obj) {
        for (var prop in obj)
            return prop;
    },
    
    /**
     * CONSTRUTOR
     */
    init: function() {
        // Executar somente uma vez
        if(this.isInitExecuted){return;}
        this.isInitExecuted = true;
        
        var self = this;
        
        // Adicionar ação aos menus do modal
        $('[data-pfitem]').each(function(index, element) {
            var ele = $(element);
            ele.click(function(e) {
                e.preventDefault();
                self.setPage(ele.data('pfitem'));
            });
        });
    },
    
    /**
     * Abre a janela modal com os dados do item atual
     */
    open: function(item) {
        this.init();
        
        this.item = item;
        $('body').css('overflow','hidden');
        this.getModal().fadeIn();
        this.setPage(this.getFirstAssoc(this.item.pages));
    },
    
    /**
     * Fecha a janela modal
     */
    close: function() {
        $('body').css('overflow','auto');
        this.getModal().fadeOut();
    },
    
    /**
     * Diz em que "página" o modal está
     */
    setPage: function(page_name) {
        //console.log(this.item);
        this.page
            .createMenus(this.item.pages)
            .setCurrentMenu(page_name)
            .setTitle(this.item.title)
            .setContent(this.item.pages[page_name].content);
    },
    
    /**
     * Funções relacionadas ao conteúdo do modal
     */
    page: {
        _content: $('#portfolio_item_content'),
        _title: $('#portfolio_item_title'),
        
        /**
         * Preeche a div do conteúdo
         */
        setContent: function(content) {
            this._content.html(content);
            return this;
        },
        
        /**
         * Preenche a div do título
         */
        setTitle: function(title) {
            this._title.html(title);
            return this;
        },
        
        /**
         * Cria uma lista de menus
         */
        createMenus: function(pages) {
            var mhtml = '<a href="javascript:pfmodal.setPage(:pid)" class="list-group-item portfolio_item_menu" data-pfitem=":pid">:label</a>';
            var phtml = '';
            
            $.each(pages, function(idx, page) {
                phtml += mhtml.replace(':pid',page.id).replace(':pid',page.id).replace(':label',page.title);
            });
            
            $('#pf-listamenus').html(phtml);
            return this;
        },
        
        /**
         * Coloca a class "active" no menu que deve ter
         */
        setCurrentMenu: function(name) {
            $('[data-pfitem]').removeClass('active');
            $('[data-pfitem='+name+']').addClass('active');
            return this;
        }
    },
};
