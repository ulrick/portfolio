var toTop = document.getElementById("to-top");

var quotationText1 = new Typed('#quotation-text1', {
    strings: ['<p>Diplômé en Génie Logiciel à l\'UTBM,</p>' +
        '<p>avec 6 ans d\'expériences,</p>' +
        '<p>aujourd\'hui je suis cadre en informatique chez LIEBHERR</p>' +
        '<p><strong>Je suis^1000\n</strong></p>' +
        '<h3>Ingénieur</h3>'],
    fadeOut: true,
    startDelay: 3000,
    showCursor: false,
    typeSpeed: 30
});

var quotationText2 = new Typed('#quotation-text2', {
    strings: [
        '<p>Je conçois du code et j\'en fais des choses extraordinaires:</p>' +
        '<p>Des applications, logiciels et outils</p>' +
        '<p>qui faciliteront votre quotidien.</p>' +
        '<p><strong>Je suis^1000\n</strong></p><h3>Développeur</h3>'
    ],
    fadeOut: true,
    startDelay: 12000,
    showCursor: false,
    typeSpeed: 30
});

function goToPageTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var elementTop = reveals[i].getBoundingClientRect().top;

        if (elementTop < window.innerHeight - 100) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);

window.onscroll = function () {
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
    }, 1000);
}