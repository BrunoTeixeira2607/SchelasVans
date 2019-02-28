$("#register").on("click",function(){
    window.location.assign("Cadastro.php");
});

$("#formLogin").submit(function(e){
    e.preventDefault();
    var email=$('#email').val();
    var password=$('#password').val();
    var dados = {"email":email,"password":password};

    $.ajax({
        url:"../php/Db/doLogin.php",
        type:"post",
        data: dados,
        success: function(result){
            alert(result);
            if(result){						
                header("location: ../php/dashboard.php");
            }else{
                alert('Erro ao logar.');//TODO: SWEET ALERT
            }
        }
    });
});