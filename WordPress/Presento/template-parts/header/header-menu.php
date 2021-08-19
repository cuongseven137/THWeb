
    <?php 
        $presento_main_menu_args = array( 
            'menu' => 'MyMenu', 
            'container' => 'nav', 
            'container_class' => 'navbar order-last order-lg-0', 
            'container_id' => 'navbar', 
            'menu_class' => '', 
            'menu_id' => '',
            'echo' => true, 
            'fallback_cb' => 'wp_page_menu', 
            'before' => '', 
            'after' => '', 
            'link_before' => '', 
            'link_after' => '', 
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
            'item_spacing' => 'preserve', 
            'depth' => 0, 
            'walker' => '', 
            'theme_location' => 'MainMenu' 
        ); 
    ?>
    
    <?php wp_nav_menu( $presento_main_menu_args ); ?>
      
   <!-- 
<nav id="navbar" class="navbar order-last order-lg-0">
    <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <li><a class="nav-link scrollto" href="#services">Services</a></li>
        <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="#team">Team</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
            </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav> .navbar -->