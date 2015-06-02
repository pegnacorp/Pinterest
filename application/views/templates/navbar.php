<div class="navbar navbar-blue navbar-static-top">  
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
      </button>
      <a href="index.php" class="navbar-brand logo">P</a>
    </div>
    <nav class="navbar-collapse collapse" role="navigation" style="height: 1px;">

    <?= form_open('auth/search', 'class="navbar-form navbar-left"');?>
    <div class="input-group input-group-sm" style="max-width:360px;">
    <?php $search = array(
                          'name'=>'search',
                          'class' => "form-control",
                          'placeholder'=> "Buscar"
                          );?>

    <?=form_input($search);?>

    <div class="input-group-btn">    
    <button class="btn btn-default" type="submit" ><i class="glyphicon glyphicon-search"></i></button>
    </input>
    </p>
     </div>
    </div>
    <?=form_close();?>                
         
        
    

    <ul class="nav navbar-nav">
      <li>
        <a href="index.php"><i class="glyphicon glyphicon-home"></i> Inicio</a>
      </li>     
    </ul>
    <ul class="nav navbar-nav">
      <li>
        <?php echo anchor('lista', "Mis Listas", 'class="glyphicon glyphicon-list-alt"');?>
      </li>     
    </ul>
    

    <ul class="nav navbar-nav navbar-right">
      <?php if (isset($logged_in)) {
            if ($logged_in) {             
            
        echo '
             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>'.$user->username.'</a>
                <ul class="dropdown-menu">
                  <li>'. anchor('auth/change_password', 'Cambiar contraseña').'</li> 
                  <li>'. anchor('auth/edit_user/'.$user->id, 'Editar mi perfil').'</li>
                  <li>'. anchor('auth/show/'.$user->id, 'Ver mi perfil').'</li>  
                  <li>'. anchor('auth/logout', 'Cerrar sesión').'</li>                                  
                </ul>
              </li>
        ';
        }else{
          echo '
              <li>
                <a href="index.php/auth/create_user"><i class="glyphicon glyphicon-pencil"></i> Registrarse</a>
              </li>
              <li>
                <a href="index.php/auth/login"><i class="glyphicon glyphicon-record"></i> Iniciar</a>
              </li>
          ';
        }}
      ?>
     

    </ul>
    </nav>
</div>
<br><br>
