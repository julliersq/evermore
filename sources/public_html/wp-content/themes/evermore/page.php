<?php
/*
  Template Name: Default Page
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
                <h2><?php echo $currentPage->post_title; ?></h2>
                <p>We are only a click away</p>
            </div>
            <div class="main">
                <!-- start grids_1_of_3  -->
                <div class="map">
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#202227;text-align:left;font-size:1em">View Larger Map</a></small>
                </div>
                <!-- start main_btm -->
                <div class="contact">
                    <div class="company_address">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                        <h3>Company Name</h3>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                        <p>22-56-2-9 Sit Amet, Lorem,</p>
                        <p>USA</p>
                        <p>Phone :(00) 222 666 444</p>
                        <p>Fax : (000) 000 00 00 0</p>
                        <p>Email : <a href="#">info(at)mycompany.com</a></p>
                    </div>
                    <div class="contact-form">
                        <form method="post" action="contact-post.html">
                            <div>
                                <span><input name="userName" type="text" class="textbox right" placeholder="first Name"></span>
                            </div>
                            <div>
                                <span><input name="userName" type="text" class="active textbox" placeholder="last Name"></span>
                            </div>
                            <div class="clear"></div>
                            <div>
                                <span><input name="userName" type="text" class="textbox right" placeholder="Email Address"></span>
                            </div>
                            <div>
                                <span><input name="userName" type="text" class="textbox" placeholder="url"></span>
                            </div>
                            <div class="clear"></div>
                            <div>
                                <span><textarea rows="2" cols="70" onfocus="if (this.value == 'Your Message')
                                            this.value = '';" onblur="if (this.value == '')
                                                        this.value = 'Your Message';">Your Message</textarea></span>
                            </div>
                            <div>
                                <span><input type="submit" class="" value="Submit"></span>
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
<?php
get_footer();
?>