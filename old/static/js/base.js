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
