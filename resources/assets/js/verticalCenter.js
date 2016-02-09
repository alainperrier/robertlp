$(document).ready(function() {
    var videoHeight = $(".video-container").height();
    var contentHeight = $(".video-title").height();

    center(videoHeight, contentHeight);

    $(window).on('resize', function() {
        videoHeight = $(".video-container").height();
        contentHeight = $(".video-title").height();
        center(videoHeight, contentHeight);
    });
});

$(window).load(function() {
    var videoHeight = $(".video-container").height();
    var contentHeight = $(".video-title").height();

    center(videoHeight, contentHeight);
});

function center(heightContainer, heightContent){
    $(".video-title").css({
        top : ((heightContainer - heightContent)/2)-10
    })  
}