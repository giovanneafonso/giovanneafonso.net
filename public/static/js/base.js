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

function openProject(project_name) {
    window.location.href = window.location.href+'/'+project_name;
}
