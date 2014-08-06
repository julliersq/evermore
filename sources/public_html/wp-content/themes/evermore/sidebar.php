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
                    
                    $currentPage = get_queried_object();

                    $pageID = $currentPage->ID; 
                    $args = array( 
                            'post_type' => 'testimonial',
                            'post_status' => 'publish',
                        );
                    $testimonials = new WP_Query( $args );                    
                    $count_posts = $testimonials->post_count;
                    
                    if($pageID != 209 && $count_posts > 0){
                    ?>                        
                    <div class="sidebar_txt">
                        <h2>Testimonials</h2>
                        <?php
                        echo do_shortcode('[random-testimonial limit="1"]');  
                        ?>
                    </div>
                    <?php
                    }
                    
                    ?>
                </div>