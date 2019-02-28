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
        $.ajax({
            url:"../php/Db/doLogout.php",
            type:"post",
            data: "",
            success: function (result){
                if(result){						
                    header('location: ../index.php');
                }
            }
        })
    }
});