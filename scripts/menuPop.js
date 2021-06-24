menu.addEventListener("click", ()=>document.querySelector('nav').classList.toggle('showmenu'));
fonty.classList.toggle("nope")
plus.classList.toggle("nope")
minus.classList.toggle("nope")
broken.addEventListener("click", ()=>{
    fonty.classList.toggle("nope")
    plus.classList.toggle("nope")
    minus.classList.toggle("nope")
    
    
    
})
fonty.addEventListener("click", ()=>document.body.classList.toggle("invalida"));
plus.addEventListener("click", ()=>document.body.style.fontSize= "20px");
minus.addEventListener("click", ()=>document.body.style.fontSize = "16px");