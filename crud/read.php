<?php 

header('Content-Type: application/json');
require "../conn.php";

echo '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"> Nome </th>
      <th scope="col"> Sobrenome </th>
      <th scope="col"> Telefone </th>
      <th scope="col"> E-mail </th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>';

    $sqlResults  = "SELECT *FROM peoples";
    $execResults = $pdo->query($sqlResults);
    
    $totRegisters = $pdo->query($sqlResults);

    echo "<p class='tot-registers'>Total de Registros: ". "<strong>". $totRegisters->rowCount(). "</strong>";

    if($totRegisters->rowCount() >= 1) // SE TIVER MAIS QUE UMA LINHA DE REGISTRO APARECE O BTN EXCLUIR TODOS
    {
        echo " <a href='crud/deleteAll.php' alt='Deletar todos' title='Deletar Todos'>
                    <img src='icons/lixeira-media.png' class='img-tot-registers'>  
                </a>
             </p>";
    }   else 
    {

    }

    if($totRegisters->rowCount() == 0)
    {
        echo 
        "<tr>
            <td colspan='7' class='center'> Não existem usuários cadastrados para serem exibidos. </td>
        </tr>";
    }   else 
    {
        
        while( $results = $execResults->fetch(PDO::FETCH_ASSOC) )
        {
            echo 
            "<tr>
                <td>".$results['firstName']. "</td>
                <td>".$results['lastName']. "</td>
                <td>".$results['phone']. "</td>
                <td>".$results['email']. "</td>
                
                <td> 
                    <a href='' alt='Visualizar' title='Visualizar'>
                        <img src='icons/visualizar-grande.png'>
                    </a>
                    
                </td> 
                    
                <td>

                    <a href='' alt='Editar' title='Editar'>
                        <img src='icons/editar-media.png'>  
                    </a>
                </td>

                <td> 
                    <a href='crud/delete.php?id=$results[id]' alt='Deletar' title='Deletar'>
                        <img src='icons/lixeira-media.png'>  
                    </a>
                <td>
                
            </tr>";
        }

    } // END CONDIÇÃO 

    /*<button id='$results[id]' onclick='viewUser({$results['id']})' class='btn btn-sm btn-dark'> 
                        Visualizar
                    </button> */