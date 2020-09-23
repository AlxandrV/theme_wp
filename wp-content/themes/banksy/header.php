<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('site'); ?>>
    <?php wp_body_open(); ?>

    <header class="header d-flex jc-between align-center">
        <a class="logo" href="<?php echo home_url( '/' ); ?>"><img src="/img/logo.png" alt="Logo CONTROVERSE"></a>

        <div class="link d-flex">
            <?php 
            if(has_nav_menu('location: header-menu')){
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar',
                    )
                );
            }

            if(is_user_logged_in()): get_currentuserinfo();
            ?>
                <p class="deconnexion">
                    <?php echo $current_user->user_firstname; ?>
                    <a href="<?php echo wp_logout_url(); ?>"> Déconnexion </a>
                </p>
                
            <?php else: ?>
                <p class="deconnexion">
                    <?php echo $current_user->user_firstname; ?>
                    <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
                </p>
            <?php endif ?>
        </div>
  
    </header>