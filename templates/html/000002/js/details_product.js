/**
 * LIST IMAGES CONTROL UP & DOWN
 */
/* UP */
$('#list-images-up').on('mousedown',function(e) {
    interval = setInterval(function() {
        // here goes your code that displays your image/replaces the one that is already there
        document.getElementById('list-images').scrollTop -= 10;
    },5); // 5ms between each frame
});
$('#list-images-up').on('mouseup',function(e) {
    clearInterval(interval);
});
// This code will stop the interval if you move your mouse away from the button while still holding it.
$('#list-images-up').on('mouseout',function(e) {
    clearInterval(interval);
});
/* DOWN */
$('#list-images-down').on('mousedown',function(e) {
    interval = setInterval(function() {
        // here goes your code that displays your image/replaces the one that is already there
        document.getElementById('list-images').scrollTop += 10;
    },5); // 5ms between each frame
});
$('#list-images-down').on('mouseup',function(e) {
    clearInterval(interval);
});
// This code will stop the interval if you move your mouse away from the button while still holding it.
$('#list-images-down').on('mouseout',function(e) {
    clearInterval(interval);
});


/**
 * CHANGE MAIN IMAGE
 */
$('#list-images img').on('click',function(e) {
    $('#main-image').attr("src", $(this).attr("main-image"));
});
