/*LOANDING PAGE*/

const i = setInterval(function () {
            
    clearInterval(i);
    
    // O código desejado é apenas isto:
    document.getElementsByClassName("loading")[0].style.display = "none";
    document.getElementsByClassName("conteudo")[0].style.display = "block";
    
}, 2000);
