$("#register").on("click",function(){
    window.location.assign("Cadastro.php");
});

$("#formLogin").on("submit",function(e){
    var login=$('#email').val();
    var senha=$('#password').val();
    $.ajax({
        url:"doLogin.php",
        type:"post",
        data: "login="+login+"&senha="+senha,
        success: function (result){
            if(result){						
                $_SESSION['logado'] = "sim";
                header("location: dashboard.php");
            }else{
                alert("Erro ao logar. Verifique as credenciais."); //TODO: SWEET ALERT
            }
        }
    })
	e.preventDefault();
});