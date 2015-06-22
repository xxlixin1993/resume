<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html class="no-js"> 
    <head>
        <title>Lixin Personal Website</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <meta name="description" content="FlexyCodes - FlexyCard vCard Template. Creating my personal page!"/>

        <!-- CSS | bootstrap 引导辅助程序-->
        <link  rel="stylesheet" type="text/css" href="/Public/Home/css/bootstrap.min.css" />

        <!-- CSS | font-awesome 字体-->
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/font-awesome.min.css" />

        <!-- CSS | animate -->
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/animate.min.css" />

        <!-- CSS | Normalize -->
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/jquery.mCustomScrollbar.css" />
       	
        <!-- CSS | Colors -->
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/colors/DarkBlue.css" id="colors-style" />
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/switcher.css" />
        
        <!-- CSS | Style -->
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/main.css" />

        <!-- CSS | prettyPhoto -->
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/prettyPhoto.css"/> 

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="/Public/Home/images/favicon/favicon.ico">

        <style>
            @media only screen and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
                }
            }
			
			@media only screen and (min-width : 800px) and (max-width : 991px){
                .resp-vtabs .resp-tabs-container {
                    margin-left: 13px;
					width:89%;
                }
            }		

        </style>

    </head>

    <body>

        <!-- Laoding page -->
        <div id="preloader"><div id="spinner"></div></div> 

        <!-- .wrapper --> 
        <div class="wrapper">

            <!--- .Content --> 
            <section class="tab-content">
                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="row">   

                                <div class="col-md-3 widget-profil">
                                    <div class="row">

    <!-- Profile Image -->
    <div class="col-lg-12 col-md-12 col-sm-3 col-xs-12 ">
    	 
		 
                                
         <div class="image-holder one" id="pic_prof_1" style="display:block">
        
                <img class="head-image up circle" src="/Public/Home/images/img/up.png" width="150" height="150" alt="" />
                <img class="head-image up-left circle" src="/Public/Home/images/img/upleft.png" width="150" height="150" alt="" />
                <img class="head-image left circle" src="/Public/Home/images/img/left.png" width="150" height="150" alt="" />
                <img class="head-image down-left circle" src="/Public/Home/images/img/downleft.png" width="150" height="150" alt="" />
                <img class="head-image down circle" src="/Public/Home/images/img/down.png" width="150" height="150" alt="" />
                <img class="head-image down-right circle" src="/Public/Home/images/img/downright.png" width="150" height="150" alt="" />
                <img class="head-image right circle" src="/Public/Home/images/img/right.png" width="150" height="150" alt="" />
                <img class="head-image up-right circle" src="/Public/Home/images/img/upright.png" width="150" height="150" alt="" />
                <img class="head-image front circle" src="/Public/Home/images/img/front.png" width="150" height="150" alt="" />       
         </div>
        
        <!-- style for simple image profile -->		
   		<div class="circle-img" id="pic_prof_2" style="display:none"></div>
       
    
    </div>
    <!-- End Profile Image -->
  
    <div class="col-lg-12 col-md-12 col-sm-9 col-xs-12">
    
    
        <!-- Profile info -->
        <div id="profile_info">
            <h1 id="name" class="transition-02">李鑫</h1>
            <h4 class="line">PHP程序员</h4>
            <h6><span class="fa fa-map-marker"></span> 陕西,西安</h6>
        </div>
        <!-- End Profile info -->  
    	
        
        <!-- 个人描述 my_info-->
        <div id="profile_desc">
            <p>
                <?php echo ($profiledata["my_desc"]); ?>
            </p>
            
        </div>
        <!-- End Profile Description -->  
    	
        
        <!-- 简介 -->
         <div id="profile_social">
            <h6><B><?php echo ($profiledata["my_social"]); ?></B></h6>
        </div>
        <!-- 简介 -->  
      
    
    
    </div>
  
</div>                                </div>

                                <div class="col-md-9 flexy_content" style="padding-left: 0;padding-right: 0;">

                                    <!-- verticalTab menu -->
                                    <div id="verticalTab">

                                        <ul class="resp-tabs-list">
                                            <li class="tabs-profile hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a profile" data-tab-name="profile">			
                                                <span class="tite-list">profile</span>
                                                <i class="fa fa-user icon_menu icon_menu_active"></i>
                                            </li>

                                            <li class="tabs-portfolio hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="portfolio"> 
                                                <span class="tite-list">portfolio</span>
                                                <i class="fa fa-briefcase icon_menu"></i>
                                            </li>
											

											<!--blog按钮li-->
                                            <li class="tabs-blog hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" data-tab-name="blog">
                                                <span class="tite-list">blog</span>
                                                <i class="fa fa-bullhorn icon_menu"></i>
                                            </li>
                                        </ul>
                                        <!-- /resp-tabs-list -->



                                        <!-- resp-tabs-container --> 
                                        <div class="resp-tabs-container">

                                            <!-- profile -->
                                            <div id="profile" class="content_2">
                                                <!-- .title -->
<h1 class="h-bloc">个人信息</h1>

<div class="row top-p">
    <div class="col-md-6 profile-l">
 		
        <!--About me-->
        <div class="title_content">
            <div class="text_content">李鑫</div>
            <div class="clear"></div>
        </div>

		   <ul class="about">

            <li>
                <i class="glyphicon glyphicon-user"></i>
                <label>姓名</label>
                <span class="value">李鑫</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-calendar"></i>
                <label>生日</label>
                <span class="value">1993年8月17日</span>
                <div class="clear"></div>
            </li>

            <li> 
                <i class="glyphicon glyphicon-map-marker"></i>
                <label>地址</label>
                <span class="value">陕西,西安</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-envelope"></i>
                <label>Email</label>
                <span class="value">403136170@qq.com</span>
                <div class="clear"></div>
            </li>

           <!-- 电话
           <li>
                <i class="glyphicon glyphicon-phone"></i>
                <label>Phone</label>
                <span class="value">132......</span>
                <div class="clear"></div>
            </li>
            !-->
            <li>
                <i class="glyphicon glyphicon-globe"></i>
                <label>博客</label>
                <span class="value"><a href="http://xxlixin1993.blog.51cto.com/" target="_blank">技术博客地址</a></span>
                <div class="clear"></div>
            </li>

        </ul>


        <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i> 
            <!--简历-->      
           <?php echo ($profiledata["short_info"]); ?>
        </p>
        
        <!-- 
        <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nec nulla sagittis, scelerisque mi vitae, congue turpis. 

        </p>
        -->
    </div>
    <!-- End left-wrap -->

    <div class="col-md-6 profile-r">

        <div class="cycle-slideshow">
            
            <img src="/Public/Home/images/img-profile/young.jpg" alt="young" />
           <!-- <img src="/Public/Home/images/img-profile/picture01.jpg" alt="picture" />  -->
            <img src="/Public/Home/images/img-profile/picture02.jpg" alt="picture" />
            <img src="/Public/Home/images/img-profile/picture03.jpg" alt="picture" />
            <img src="/Public/Home/images/img-profile/celtics.jpg" alt="celtics" />
        </div>

    </div>

</div>

    <div class="clear"></div>

  
<!-- client reference -->
<div class="row">
    <div class="col-md-12">   
    
<div class="reference clearfix"> 
            
        

        
</div>
 </div>
     
 
</div>

                                            </div>




<!-- photo -->
<div id="portfolio" class="content_2">
                                                
                                                <!-- .title -->
                                                <h1 class="h-bloc">Work And Life Photo</h1>

                                                <!-- .container-portfolio -->
                                                <div class="container-portfolio">

                                                    <!-- #filters -->
                                                    <ul id="filters" class="clearfix">
                                                        <li><span class="filter active" data-filter="catWeb catGraphic catMotion logo">所有</span></li>
                                                        <li><span class="filter" data-filter="catWeb">生活</span></li>
                                                        <li><span class="filter" data-filter="catGraphic">工作</span></li>
                                                        <li><span class="filter" data-filter="catMotion">图片</span></li>
                                                        <!--<li><span class="filter" data-filter="logo">Logo</span></li>-->
                                                    </ul>
                                                    <!-- /#filters -->
                                    
                                                    <!-- #portfoliolist -->
                                                    <div id="portfoliolist">

                                                    <?php if(is_array($photodata)): $i = 0; $__LIST__ = $photodata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- .portfolio -->
                                                        <div class="portfolio <?php echo ($vo["classes"]); ?>" data-cat="<?php echo ($vo["classes"]); ?>">
                                                            <!-- .portfolio-wrapper -->
                                                            <div class="portfolio-wrapper">         
                                                                <a href="<?php echo ($vo["pname"]); ?>" rel="portfolio">
                                                                    <img src="<?php echo ($vo["pname"]); ?>" alt="Sonor's Design" />
                                                                    <div class="label">
                                                                        <div class="label-text">
                                                                            <a class="text-title"><?php echo ($vo["ptitle"]); ?></a>
                                                                            <span class="text-category"><?php echo ($vo["pinfo"]); ?></span>
                                                                        </div>
                                                                        <div class="label-bg"></div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.portfolio-wrapper -->
                                                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                                                        <!-- /.portfolio -->

                                                        

                                    
                                                        <div class="clear"></div>

                                                    </div>
                                                    <!-- #portfoliolist -->
                                                </div>
                                                <!-- /.container-portfolio -->
                                                                                       </div>
                                            <!-- End .portfolio -->




<!-- .blog -->
<!-- .blog -->
            <div id="blog" class="content_2">
                <!--blog-->
                <h1 class="h-bloc">随笔</h1><br> 

<div class="col-md-12">
    <div class="row">

        <!-- Page Blog -->
        <div class="col-md-12" id="blog_page">
            <!-- start Page Blog -->
            <section id="blog-page">


            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- Post 2 -->
                <article id="post-2" class="blog-article">                    

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="#post-2" class="read_more"><?php echo ($vo["title"]); ?></a></div>
                                            <div class="clear"></div>
                                        </div>



                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> <?php echo ($vo["short_info"]); ?>...</p></div>
                                    </div>
                                </div>	

                                <a href="#post-<?php echo ($vo["id"]); ?>" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>
                <!-- End Post 2 -->

                <div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>


            </section>

            <!-- End Page Blog -->




        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- Page Blog - Post 2 -->
            <section id="post-<?php echo ($vo["id"]); ?>-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">

                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                </div>

                            </div>

                            <div class="title_content">
                                <!--blog详细页面头部-->
                                <div class="text_content"></div>
                                <div class="clear"></div>
                            </div>


                            <p  class="caps"><?php echo ($vo["content"]); ?></p>

                            

                            <div class="col-md-12 first">
                                
                                <div class="col-md-12"  style="margin-top: 20px;">
                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 2 --><?php endforeach; endif; else: echo "" ;endif; ?>



        </div>

        

    </div>
</div>
                                            </div>
                                            <!-- End .blog -->



<!-- End .blog -->


                                            



                                                    </div>
                                                </div>
                                            </div>  



                                        </div>                                            </div>
                                            <!-- End .contact -->

                                        </div>
                                        <!-- End #resp-tabs-container --> 

                                    </div><!-- End verticalTab -->

                                </div><!-- End flexy_content -->


                            </div><!-- End row -->

                        </div><!-- End col-md-12 -->

                    </div><!-- End row -->

                </div><!-- End container -->

            </section>
            <!-- End Content -->

        </div>
        <!-- End wrapper -->

        
        <!-- End Switcher -->



        <!-- jquery | jQuery 1.11.0 -->
 
        <script type="text/javascript" src="/Public/Home/js/jquery.min.js"></script>
 		
        <!-- Js | bootstrap引导辅助程序 -->
        <script type="text/javascript" src="/Public/Home/js/bootstrap.min.js"></script> 
        
        <!-- Js | jquery.cycle 循环-->
        <script type="text/javascript" src="/Public/Home/js/jquery.cycle2.min.js"></script>
        
        <!-- jquery | rotate and portfolio 循环和公文包-->
        <script type="text/javascript" src="/Public/Home/js/jquery.mixitup.min.js"></script> 
        <script type="text/javascript" src="/Public/Home/js/HeadImage.js"></script>

        <!-- Js | easyResponsiveTabs 简单响应-->
        <script type="text/javascript" src="/Public/Home/js/easyResponsiveTabs.min.js"></script> 

        <!-- Js | jquery.cookie -->
        <script type="text/javascript" src="/Public/Home/js/jsSwitcher/jquery.cookie.js"></script>	

        <!-- Js | switcher -->
        <script type="text/javascript" src="/Public/Home/js/jsSwitcher/switcher.js"></script>	

        <!-- Js | mCustomScrollbar -->
        <script type="text/javascript" src="/Public/Home/js/jquery.mCustomScrollbar.concat.min.js"></script>		

        <!-- jquery | prettyPhoto -->
        <script type="text/javascript" src="/Public/Home/js/jquery.prettyPhoto.js"></script>
        
        <!-- Js | gmaps -->
        <script type="text/javascript" src="/Public/Home/js/gmaps.min.js"></script>

 		<!-- Js | Js -->
        <script type="text/javascript" src="/Public/Home/js/main.js"></script>
        
        <!-- code js for image rotate 图片循环-->
        <script type="text/javascript">

            var mouseX;
            var mouseY;
            var imageOne;

            /* Calling the initialization function */
            $(init);

            /* The images need to re-initialize on load and on resize, or else the areas
             * where each image is displayed will be wrong. */
            $(window).load(init);
            $(window).resize(init);

            /* Setting the mousemove event caller */
            $(window).mousemove(getMousePosition);

            /* This function is called on document ready, on load and on resize
             * and initiallizes all the images */
            function init() {

                /* Instanciate the mouse position variables */
                mouseX = 0;
                mouseY = 0;

                /* Instanciate a HeadImage class for every image */
                imageOne = new HeadImage("one");

            }

            /* This function is called on mouse move and gets the mouse position. 
             * It also calls the HeadImage function to display the correct image*/
            function getMousePosition(event) {

                /* Setting the mouse position variables */
                mouseX = event.pageX;
                mouseY = event.pageY;

                /*Calling the setImageDirection function of the HeadImage class
                 * to display the correct image*/
                imageOne.setImageDirection();

            }

        </script>


        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </body>
</html>