const icon = document.querySelector('.icon');
let isClicked = false;
let sound;

icon.addEventListener('click', () => {
  if (!isClicked) {
    sound = new Howl({
      src: ['./public/assets/sounds/car.mp3'],
      onend: function () {
        isClicked = false;
      }
    });
    sound.play();
    isClicked = true;
  }
});
