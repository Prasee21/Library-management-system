document.getElementById("name").addEventListener("focusout", function(){
    let n = document.getElementById("name");
    if(/^[a-zA-Z' -]+$/.test(n)){
    }
    else{
        alert("Name Error!!!");
    }
});