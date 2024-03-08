const icon = document.querySelector('.icon');
let isClickedIcon = false;
let soundIcon;

icon.addEventListener('click', () => {
  if (!isClickedIcon) {
    soundIcon = new Howl({
      src: ['./public/assets/sounds/car.mp3'],
      onend: function () {
        isClickedIcon = false;
      }
    });
    soundIcon.play();
    isClickedIcon = true;
  }
});

const america = document.querySelector('.america');
let isClickedAmerica = false;
let soundAmerica;

america.addEventListener('click', () => {
  {
    soundAmerica = new Howl({
      src: ['./public/assets/sounds/sniper.mp3'],
    });
    soundAmerica.play();
  }
});
