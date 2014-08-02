                <!-- start sidebar -->
                <div class="sidebar">
                    <div class="sidebar_txt">
                        <?php 
                        if( get_field( 'page_excerpt', 40 ) ){
                        ?>                           
                        <h2>About <?php echo get_bloginfo( 'name' ); ?></h2>
                        <?php
                            echo get_field( 'page_excerpt', 40 );
                        }
                        ?>  
                    </div>
                    <?php 
                    $categoryList = get_categories('child_of=2');                        
                    if( count($categoryList) > 0 ){
                    ?>                    
                    <div class="sidebar_txt">
                        <h2>Categories</h2>
                        <ul class="blog_nav">
                            <?php
                            foreach($categoryList as $currentCat){
                            ?>
                            <li><a href="/categories/<?php echo $currentCat->slug; ?>"><?php echo $currentCat->name.' ('.$currentCat->count.')'; ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>                       
                    </div>
                    <?php
                    }
                    /*
                    ?>                        
                    <div class="sidebar_txt">
                        <h2>Advertisements</h2>
                        <ul class="blog_list">
                            <li class="right"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/advertise1.jpg" alt=""/> </a></li>
                            <li class="right"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/advertise2.jpg" alt=""/> </a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/advertise3.jpg" alt=""/> </a></li>
                            <li class="right"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/advertise3.jpg" alt=""/> </a></li>
                            <li class="right"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/advertise2.jpg" alt=""/> </a></li>
                            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/advertise1.jpg" alt=""/> </a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                     * 
                     */
                    ?>
                </div>