/**
 * Site containers
 */
var jcontainer = {
    site:     $('#sitecontainer'),
    header:   $('#siteheader'),
    loading:  $('#loading-site'),
};
var timing = 600;

/**
 * Load images without showing them
 */
function preloadImages(images) {
    $(images).each(function() {
        $('<img/>')[0].src = this;
    });
}

/**
 * Constructor
 */
$(document).ready(function() {
    /*
    preloadImages([
        '/static/img/menubg-over.png'
    ]);
    */
    
    loadSite();
});

/**
 * Link to project
 */
function openProject(project_name) {
    window.location.href = window.location.href+'/'+project_name;
}

/**
 * Animations to load the site
 */
function loadSite() {
    jcontainer.header.hide().slideDown(timing);
    jcontainer.site.animate({'opacity':1,'-webkit-opacity':1,'-moz-opacity':1}, timing, 'swing', function() {
        jcontainer.loading.hide();
    });
    
}

/**
 * FadeOut when click in a link
 */
$('a, .fadelink').click(function(e) {
    var self       = $(this);
    var class_name = 'fadeClicked';
    var target     = self.attr('target');
    
    if(typeof target !== 'undefined' && target !== false && target != 'self' && target != 'top') {
        return true;
    }
    
    
    e.preventDefault();
    
    if(self.hasClass(class_name)) {
        window.location.href = self.attr('href');
        return;
    }
    
    self.addClass(class_name);
    jcontainer.loading.show();
    
    jcontainer.header.slideUp(timing/4, 'linear', function() {
        jcontainer.site.fadeOut(timing, function() {
            self.click();
        });
    });
});
