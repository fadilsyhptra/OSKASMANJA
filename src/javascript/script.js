const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav){
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
}

document.getElementById('deskripsi').addEventListener('keydown', function(event) {
    if (event.key === "Enter" && !event.shiftKey) {
        event.preventDefault();
        var cursorPos = this.selectionStart;
        var textBeforeCursor = this.value.substring(0, cursorPos);
        var textAfterCursor = this.value.substring(cursorPos, this.value.length);
        this.value = textBeforeCursor + "\n" + textAfterCursor;
        this.setSelectionRange(cursorPos + 1, cursorPos + 1); 
    }
});
