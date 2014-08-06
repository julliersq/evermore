<?php

//$_SERVER['REMOTE_ADDR'] != '50.71.138.105' && 
//$_SERVER['REMOTE_ADDR'] != '50.72.80.54'
/*
if ( !is_user_logged_in() ) {
    ?>

    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">   
        <!-- 
             'Plain Jane' Mini-Theme running on Easy Pie Maintenance Mode Plugin
             easypiewp.com
        -->
        <head>	
            <title></title>
            <script type="text/javascript">
    //<![CDATA[
                try {
                    if (!window.CloudFlare) {
                        var CloudFlare = [{verbose: 0, p: 0, byc: 0, owlid: "cf", bag2: 1, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/dokv=88e434a982/"}, atok: "d8574813e4fb8f4ea03dbba43fe62292", petok: "03f08af9a7a1f3c5b08c3084c2d6640f8b0c8be6-1405479187-1800", zone: "evermoreweddings.ca", rocket: "0", apps: {"cdnjs": {"__h": "1", "cdnjs": "MO,GF,FX,CS,JS"}, "abetterbrowser": {"ie": "8"}}}];
                        CloudFlare.push({"apps": {"ape": "b6ab91fcd91fbbb1aebb0a9284573b40"}});
                        !function(a, b) {
                            a = document.createElement("script"), b = document.getElementsByTagName("script")[0], a.async = !0, a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/dokv=97fb4d042e/cloudflare.min.js", b.parentNode.insertBefore(a, b)
                        }()
                    }
                } catch (e) {
                }
                ;
    //]]>
            </script>
            <script type="text/javascript">
            //<![CDATA[
                window.__CF = window.__CF || {};
                window.__CF.AJS = {"cdnjs": {"__h": "1", "cdnjs": "MO,GF,FX,CS,JS"}, "abetterbrowser": {"ie": "8"}};
            //]]>
            </script><script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dokv=dccf16c0cc/appsh.min.js"></script><script type="text/javascript">__CF.AJS.inith();</script><link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald|Droid+Serif"></link>
            <link rel="stylesheet" type="text/css" href="http://evermoreweddings.ca/wp-content/plugins/easy-pie-maintenance-mode/mini-themes/plain/css/style.css" />

            <style type="text/css">

            </style>
        </head>
        <body>
            <div id="header">            
                <p>Evermore Weddings</p>            
            </div>

            <div id="content">
                <img id="logo-img" src="http://evermoreweddings.ca/wp-content/uploads/2014/07/logo-e1404763352372.png" />
                <h1 id="headline">Under Construction</h1>
                <p id="message">We are working on our site at the moment. Please come back later.</p>
            </div>

            <!-- Removes the image when not defined -->
            <script type="text/javascript">

                var image = document.getElementById("logo-img");

                function ezp_hideImage() {
                    image.style.display = "none";
                }

                if (image.getAttribute('src') == '') {

                    ezp_hideImage();
                }

                image.addEventListener('error', ezp_hideImage, true);

            </script>
            <script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dokv=73806ac11c/apps1.min.js"></script><script type="text/javascript">__CF.AJS.init1();</script></body>
    </html>


    <?php
    exit;
}
else{
    header ('location: /home');
}
 * 
 */
  header ('location: /home');
?>