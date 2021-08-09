var Login = function() {
    var initValidationLogin = function(){
        jQuery('.form-signin').validate({           
            rules: {
                'txtUser': {
                    required: true
                },
                'txtPass': {
                    required: true
                }
            },
            messages: {
                'txtUser': {
                    required: 'Usuário requerido'
                    
                },
                'txtPass': {
                    required: 'Senha requerida'
                }
            },
            submitHandler : function() {

                var user = $("#txtUser").val(); 
                var pass = $("#txtPass").val();
                $.ajax({
                    method : 'POST',
                    url : base_url + 'login/do',
                    data : {
                        user : user,
                        pass : pass
                    },
                    success : function(res) {
                        res = JSON.parse(res);
                        if (res.msg == "error") {
                            message("Não foi possível realizar o login, verifique seu usuário e senha!");
                        } else {
                            window.location.href = 'painel/';
                        }                        
                    },
                    error : function (request, status, error) {
                        console.log(error);
                    }   
                });
            }

        });
    };

return {
    init: function () {
        // Init Login Form Validation
        initValidationLogin();
    }
};
}();



$(document).ready(function(){
    $("#txtEmail").focus();
    Login.init(); 
});