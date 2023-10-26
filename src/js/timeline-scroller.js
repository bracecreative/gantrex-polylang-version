const buttonRight = document.getElementById('slideRight');
const buttonLeft = document.getElementById('slideLeft');
const track = document.getElementById('track');

buttonLeft.onclick = function () {
    track.scrollLeft -= 360;
};
buttonRight.onclick = function () {
    track.scrollLeft += 360;
};