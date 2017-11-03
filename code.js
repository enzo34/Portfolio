window.addEventListener("load", function(){
    var nodes = document.querySelectorAll("nav a");
    for(var i=0; i<nodes.length; i++){
        nodes[i].addEventListener("click", function()
    {
        var nodes = document.querySelectorAll("nav a");
        for(var i=0; i<nodes.length; i++){
            nodes[i].className = "";
        }
        this.className = "selected";
    });
    }
});