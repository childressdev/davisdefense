<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <meta http-equiv="cache-control" content="public">
    <meta http-equiv="cache-control" content="private">
    <title>Davis Defense Group</title>

    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar-fixed">
      <a href="<?php echo home_url('employee-login'); ?>" class="login-out pull-left hidden-xs">EMPLOYEE LOGIN</a>
      <a href="<?php echo home_url('apply-now'); ?>" class="apply-now pull-right hidden-xs">APPLY NOW</a>
      <div class="header-social pull-right hidden-xs">
        <?php if(get_field('facebook', 'option')): ?>
          <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
        <?php endif; 
        if(get_field('twitter', 'option')): ?>
          <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
        <?php endif; 
        if(get_field('linkedin', 'option')): ?>
          <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
        <?php endif; ?>
      </div>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li<?php if(is_front_page()){ echo ' class="active"'; } ?>><a href="<?php echo home_url(); ?>">Home</a></li>
          <li<?php if(is_page('capabilities')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('capabilities'); ?>">Capabilities</a></li>
          <li<?php if(is_page('about-us')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about-us'); ?>">About Us</a></li>
          <li<?php if(is_page('contracts')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contracts'); ?>">Contracts</a></li>
          <li<?php if(is_page('contact-us')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact-us'); ?>">Contact Us</a></li>
          <li class="visible-xs-block">
            <div class="header-menu-social">
              <?php if(get_field('facebook', 'option')): ?>
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook-official"></i></a>
              <?php endif; 
              if(get_field('twitter', 'option')): ?>
                <a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
              <?php endif; 
              if(get_field('linkedin', 'option')): ?>
                <a href="<?php the_field('linkedin', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
              <?php endif; ?>
            </div>
          </li>
          <li class="visible-xs-block menu-login-out">
            <a href="<?php echo home_url('employee-login'); ?>">EMPLOYEE LOGIN</a>
          </li>
          <li class="visible-xs-block menu-apply-now">
            <a href="<?php echo home_url('apply-now'); ?>">APPLY NOW</a>
          </li>
        </ul>
      </div>
    </nav>
