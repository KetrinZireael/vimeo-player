let button = document.querySelector('#play_button');
if (button) {
    button.addEventListener('click', function () {
        let player = new Vimeo.Player(document.querySelector('iframe'));
        let playerCustom = document.querySelector("iframe");
        this.classList.add("hidden");
        player.play();
        playerCustom.style.zIndex = "2";
    })
}