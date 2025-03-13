let whoweare = document.getElementById("whoweare");
let whatwedo = document.getElementById('whatwedo');
if(whoweare.style.color == '#2CB9AD' && whatwedo.style.color == '#797D86'){
    whatwedo.addEventListener('mouseover',() => {
        whatwedo.classList.add('active');
    })
    whatwedo.addEventListener('mouseout',() => {
        whatwedo.classList.remove('active');
    })
    whatwedo.addEventListener('click',() => {
        whatwedo.classList.add('active');
        whoweare.classList.remove('active');
    })
}
