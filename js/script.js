// FUNÇÕES DE BOTÕES
//  $("#btn-loader").addClass('d-none'); 

   // CRIA USUÁRIO
   $(".btn-enviar").on("click",function()
      {
          var id        = $(".id").val();
          var firstName = $(".firstName").val();
          var lastName = $(".lastName").val();
          var phone     = $(".phone").val();
          var email     = $(".email").val();

          $.ajax({
            //url:  'crud/create.php',
            type: 'post',
            dataType: 'json',
            data: 
            {
                id:id,
                firstName: firstName,
                lastName: lastName,
                phone:phone,
                email:email
            }, 
            beforesend: function()
            {
                $("#btn-loader").removeClass('d-none'); 
            }
          }).done(function(data)
          {
                
                $(".msg").html(data);
                getUsers();                             // CHAMA A FUNÇÃO LOGO APÓS A INSERÇÃO
          });
      }); // END CRIAR USUÁRIO

    //LISTAR USUÁRIOS
    function getUsers()
    {
        $.ajax({
            url: 'crud/read.php',
            dataType: 'html',
            success: function(result)
            {
                $("#list").html(result);
                
            }
        });
        
    }

    // QUANDO REINICIAR A PÁGINA EXECUTARÁ ESSA FUNÇÃO
    $(document).ready(function()
    {
        getUsers();
        $('.phone').mask('(99) 99999-9999');
    });    