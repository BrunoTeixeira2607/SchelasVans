$("#perfil").on("click",function(){
    alert("Implementar essa função ainda: Profile");
});

$("#conheca").on("click",function(){
    window.location.assign("../index.php");
});

$("#login").on("click",function(){
    if(this.text == "Entrar"){
        window.location.assign("../php/Login.php");
    }else{
        alert("Implementar essa função ainda: "+this.text);
    }
});