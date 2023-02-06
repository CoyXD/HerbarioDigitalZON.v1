<!-- Header  -->
<?php 

require('../controller/session_header.php');

require('../controller/usuariolog.php');



?>

<div class="perfil">
<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="../resource/img/ic_launcher_round.png" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">ADMINISTRADOR</span>
                    <h5 class="mt-2 mb-0"><?php echo $usuarioingresado ?></h5>
                    <span>CORREO</span>
                    
                    <div class="px-4 mt-1">
                        <p class="fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    
                    </div>
                    <form method="POST" action="config/close_user.php">
                        <div class="buttons">
                            <button class="btn btn-primary px-4 ms-3" name="btncerrar">Cerrar sesión</button>
                        </div>
                    </form>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>



</div>



<!-- Footer -->
<?php require('../layout/footer.php'); ?>