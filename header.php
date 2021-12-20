<?php 

$show_menu = get_theme_mod('bit_tema_show_menu_header');
$show_title = get_theme_mod('bit_tema_show_title_header');
?>

<style>
body {
  margin: 0;
  font-family: Helvetica, sans-serif;
  background-color: #f4f4f4;
}

a {
  color: #000;
}

/* header */

.header {
  /* background-color: #fff; */
  box-shadow: 1px 1px 4px 0 rgba(0,0,0,.1);
  /* float: left; */
  width: 100%;
  z-index: 3;
}



.header ul {
  margin-top: -70px;
  /* padding: 0; */
  list-style: none;
  overflow: hidden;
  /* background-color: #fff; */
}

.header li a {
  display: block;
  padding-top: 15px;
  /* border-right: 1px solid #f4f4f4; */
  text-decoration: none;
  font-family: Open Sans,sans-serif;
}

/* .header li a:hover,
.header .menu-btn:hover {
  background-color: #f4f4f4;
} */


/* menu */

.header .menu {
  clear: both;
  max-height: 0;
  transition: max-ight .2s ease-out;
}

/* menu icon */

.header .menu-icon {
  cursor: pointer;
  display: inline-block;
  float: right;
  padding: 30px 20px;
  position: relative;
  user-select: none;
}

.header .menu-icon .navicon {
  background: #333;
  display: block;
  height: 2px;
  position: relative;
  transition: background .2s ease-out;
  width: 18px;
}

.header .menu-icon .navicon:before,
.header .menu-icon .navicon:after {
  background: #333;
  content: '';
  display: block;
  height: 100%;
  position: absolute;
  transition: all .2s ease-out;
  width: 100%;
}

.header .menu-icon .navicon:before {
  top: 5px;
}

.header .menu-icon .navicon:after {
  top: -5px;
}

/* menu btn */

.header .menu-btn {
  display: none;
}

.header .menu-btn:checked ~ .menu {
  max-height: 240px;
}

.header .menu-btn:checked ~ .menu-icon .navicon {
  background: transparent;
}

.header .menu-btn:checked ~ .menu-icon .navicon:before {
  transform: rotate(-45deg);
}

.header .menu-btn:checked ~ .menu-icon .navicon:after {
  transform: rotate(45deg);
}

.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:before,
.header .menu-btn:checked ~ .menu-icon:not(.steps) .navicon:after {
  top: 0;
}

/* 48em = 768px */

@media (min-width: 48em) {
  .header li {
    float: left;
  }
  .header  li a {
    padding: 5px 15px;
  }

  .header  li a:hover {
    color: #d63b42;
  }

  .header .menu {
    clear: none;
    float: right;
    max-height: none;
  }


  .header .menu-icon {
    display: none;
  }
}



</style>
<header class="header">
    
    <?php if(get_site_icon_url()) : ?>
        <div class="site-logo">
            <img src="<?php echo get_site_icon_url(); ?>" />
        </div>
    <?php endif; ?>

    <?php if($show_title): ?>
    <p class="site-title">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
    <?php endif; ?>
        </a>
    </p>


    <p class="site-description">
        <?php bloginfo('description'); ?> 
    </p>

    <?php if($show_menu): ?>

        <?php 
            echo '<input class="menu-btn" type="checkbox" id="menu-btn" />';
            echo '<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>';

            wp_nav_menu(array(
                'theme_location'=> 'menu-1',
                'container_class' => 'menu',
                'container' => '',
                'menu_class' => 'menu'
            ));

        ?>
        
    <?php endif; ?>
</header>