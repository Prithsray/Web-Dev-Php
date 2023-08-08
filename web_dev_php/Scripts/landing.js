const side_bar = document.querySelector(".cs");
const mob_side_bar = document.querySelector(".nav-bar-toggle");


mob_side_bar.addEventListener('click',()=>{
    const visi = side_bar.getAttribute('data-visible');
    mob_side_bar.classList.toggle("click");
    if (visi === "false") {
        side_bar.setAttribute('data-visible', true);
        mob_side_bar.setAttribute('aria-expanded', true);
    }else{
        side_bar.setAttribute('data-visible', false);
        mob_side_bar.setAttribute('aria-expanded', false);
    }
});

document.onclick = function (e) {
    if (!side_bar.contains(e.target) && !mob_side_bar.contains(e.target)) {
        mob_side_bar.classList.toggle("click");
        side_bar.setAttribute('data-visible', false);
        mob_side_bar.setAttribute('aria-expanded', false);
    }    
};


