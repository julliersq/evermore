<?php
/*
  Template Name: Post Page
 */


$currentPage = get_queried_object();

$pageID = $currentPage->ID;

get_header();
?>
        <!-- start slider-->
        <div class="slider_bg">
            <div class="wrap">
            </div>
        </div>
        <!-- start main  -->
        <div class="wrap">
            <div class="blog_slider">
                <h2>Blog</h2>                
            </div>
            <div class="main">
                <div class="content_left">
                    
                    <div class="blog_main">                        
                        <h1><?php echo $currentPage->post_title; ?></h1>
                        <?php echo $currentPage->post_content; ?>
                    </div>
                    <div class="blog_main">
                        <div id="disqus_thread"></div>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                            var disqus_shortname = 'evemoreweddings'; // required: replace example with your forum shortname

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>                        
                    </div>
                </div>    
                <?php
                    get_sidebar(); 
                ?>
                <div class="clear"></div>                
            </div>
        </div>
<?php
get_footer();
?>