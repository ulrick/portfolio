var toTop = document.getElementById("to-top");
window.onscroll = function() {
    if (window.pageYOffset > 1000) {
        toTop.style.visibility = "visible";
    }
    else {
        toTop.style.visibility = "hidden";
    }
}

window.onload = () => {
    setTimeout(() => {
        document.getElementsByClassName("esprit")[0].style.visibility = "visible";
    }, 2000);
}

function goToPageTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}