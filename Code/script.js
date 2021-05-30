var modal = document.getElementById("myModal");
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = () => {
    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
}

var span = document.getElementsByClassName("close").item(0);
span.onclick = () => modal.style.display = "none";

var width = 0;
const prgrs = () => {
    element = document.getElementById("skills-move");
    let stop;
    if (width === 0)
        stop = setInterval(getWider, 8);
    function getWider() {
        if (width === 100) {
            clearInterval(stop);
            width = 0;
        }
        else
            element.style.width = ++width + '%';
    }
}

const checkform = () => {
    let form = document.getElementById("contact-me").getElementsByTagName("input");
    for (let i = 0; i < form.length; i++)
        if (form[i].value === '')
            return false;
    return true;
}

const charsCount = () => {
    let button = document.getElementById("submit-button");
    let len = document.getElementById("message").value.length;
    let charsMessage = len <= 200 ? 'remaining chars: ' + (200 - len) : 'can\'t be submitted, too long';
    document.getElementById("remain-chars").innerHTML = charsMessage;
    if ((len <= 200 && len > 0) && !checkform())
        button.disabled = false;
    else
        button.disabled = true;
}

const scrollUp = () => window.scrollTo({ top: 0, behavior: 'smooth' });
