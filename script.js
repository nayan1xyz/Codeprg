var xx = document.querySelector('.GhPlr');
var xy = document.querySelector('.navbar-nav');

window.addEventListener("load", function(){
    let query = window.matchMedia("(max-width: 419px)");
    
    if(query.matches)
    {
        xx.remove();
        xy.remove();
    }/*else
    {
        xx.style.display = "contents";
    }*/
});

/* matchR = window.matchMedia("(max-width: 419px)");

console.log(matchR);*/