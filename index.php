<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Projeto CRUD</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1> Sistema CRUD </h1>
                    <hr>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewUser">
                      +  Adicionar 
                    </button>
                </div> <!-- END COL-12 -->
            </div> <!-- END ROW -->
            <div class="row">
                <div class="col-12">
                    <div id="list"></div>
                </div> 
            </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
    </div> <!-- END CLASS MAIN-->

    <!-- BTN CHAMA MODAIS -->

    <!-- END BTN CHAMA MODAIS -->

    <!-- MODAIS -->
    <!-- MODAL CADASTRAR USUÁRIO -->
        <div class="modal fade" id="addNewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <input type="hidden" class="id" name="id">
                        <span> Nome:</span>
                        <input type="text" class="firstName form-control">
                        <span> Sobrenome:</span>
                        <input type="text" class="lastName form-control">
                        <span> Telefone:</span>
                        <input type="text" class="phone form-control">
                        <span> E-mail:</span>
                        <input type="email" class="email form-control">
                        <br> 
                        <div class="msg"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-enviar"> 
                        <span> Inserir </span>
                    </button>

                    <button id='btn-loader' class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span class="sr-only">Loading...</span>
                    </button>
                </div>
                </div>
            </div>
        </div>
    <!-- END MODAL CADASTRAR USUÁRIO -->

    <!-- MODAL EXIBE USUÁRIO -->
    
    <div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exibir </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
    <!-- END MODAL EXIBE USUÁRIO -->

    <!-- MODAL EDITA USUÁRIO -->
    
    <div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Exibir </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post">
                    a
                </form>
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
    </div>
    <!-- END MODAL EDITA USUÁRIO -->

    <!-- END MODAIS -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery.mask.js"> </script>
    <script src="js/script.js"> </script>
</body>
</html>