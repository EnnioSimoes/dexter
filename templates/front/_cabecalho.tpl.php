<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dexter Logística™</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="<?php echo PATH?>css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo PATH?>css/bootstrap-responsive.css" rel="stylesheet">
        <script src="<?php echo PATH?>js/jquery.js"></script>
        <script src="<?php echo PATH?>js/bootstrap.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
                <!-- Barra menus -->
                <div class="navbar">
                    <div class="navbar-inner">
                        <a class="brand" href="admin.php">
                            Dexter-SA
                        </a>
                        <ul class="nav">
                            <?php foreach($itens_menu as $item): ?>
                              <li>
                                  <a href="<?php echo $item->getLink(); ?>"><?php echo $item->getDescricao(); ?></a>
                              </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="btn-group pull-right">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="icon-user"></i> <?php echo ( isset( $_SESSION['funcionarios']['nome'] ) ) ? $_SESSION['funcionarios']['nome'] : '' ; ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="admin.php?modulo=Funcionarios&acao=deslogar"><i class="icon-share"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- navbar -->
        
	        
            <?php echo Lib\Mensagem::get(); ?>
	        
            
