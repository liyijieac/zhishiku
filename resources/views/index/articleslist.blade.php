<!doctype html>
        <!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
        <!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
        <!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
        <!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
        <head>
                <!-- META TAGS -->
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">

                <title>Knowledge Base Theme</title>

                <link rel="shortcut icon" href="images/favicon.png" />


                

                <!-- Style Sheet-->
                <link rel="stylesheet" href="style.css"/>
                <link rel='stylesheet' id='bootstrap-css-css'  href='css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='responsive-css-css'  href='css/responsive5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='pretty-photo-css-css'  href='js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
                <link rel='stylesheet' id='main-css-css'  href='css/main5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='custom-css-css'  href='css/custom5152.html?ver=1.0' type='text/css' media='all' />


                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                <script src="js/html5.js"></script></script>
                <![endif]-->


        </head>

        <body>

                <!-- Start of Header -->
                <div class="header-wrapper">
                        <header>
                                <div class="container">


                                        <div class="logo-container">
                                                <!-- Website Logo -->
                                                <a href="/"  title="知识库">
                                                        <img src="/images/logo.png" alt="知识库">
                                                </a>
                                                <span class="tag-line">知识库</span>
                                        </div>


                                        <!-- Start of Main Navigation -->
                                        <nav class="main-nav">
                                                <div class="menu-top-menu-container">
                                                        <ul id="menu-top-menu" class="clearfix">
                                                                <li class="current-menu-item"><a href="/">首页</a></li>
                                                                <li><a href="articlelist">文章列表</a></li>
                                                                <li><a href="faq">常见问题解答</a></li>
                                                                
                                                                @if(session('id'))
                                                                
                                                                <li><a href="contact">联系</a></li>
                                                                <li><a href="index_add">发表文章</a></li>
                                                                <li><a href="">{{ session('username') }}</a>

                                                                <ul class="sub-menu">
                                                                <li><a href="member">升级会员</a></li>
                                                                <li><a href="logout">退出登录</a></li>
                                                                </ul>
                                                                
                                                                </li>
                                                                
                                                                @else
                                                                <li><a href="login">登录</a></li>
                                                                @endif
                                                        </ul>
                                                </div>
                                        </nav>
                                        <!-- End of Main Navigation -->

                                </div>
                        </header>
                </div>
                <!-- End of Header -->

                <!-- Start of Search Wrapper -->
                <div class="search-area-wrapper">
                        <div class="search-area container">
                                <h3 class="search-header">有啥想问的哈?</h3>
                                <p class="search-tag-line">如果主页没有你想要的东西就把你想要的放在下面!</p>

                                <form id="search-form" class="search-form clearfix" method="get" action="#" autocomplete="off">
                                        <input class="search-term required" type="text" id="s" name="s" placeholder="只有你想不到的没有我们做不到的..." title="* Please enter a search term!" />
                                        <input class="search-btn" type="submit" value="搜索" />
                                        <div id="search-error-container"></div>
                                </form>
                        </div>
                </div>
                <!-- End of Search Wrapper -->
                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 main-listing">

                                                @foreach($article as $e)

                                                <article class="format-standard type-post hentry clearfix">

                                                        <header class="clearfix">

                                                                <h3 class="post-title">
                                                                        <a href="">{{ $e->article_title }}</a>
                                                                </h3>

                                                                <div class="post-meta clearfix">
                                                                        <span class="date">{{ $e->created_at }}</span>
                                                                        <span class="category"><a href="#" title="">{{ $e->article_sort }} </a></span>
                                                                </div><!-- end of post meta -->

                                                        </header>

                                                        <p> {{ $e->article_descri }} <a class="readmore-link" href="">Read more</a></p>

                                                </article>

                                                @endforeach




                                             

                                                <div id="pagination">
                                                        <a href="#" class="btn active">1</a>
                                                        <a href="#" class="btn">2</a>
                                                        <a href="#" class="btn">3</a>
                                                        <a href="#" class="btn">Next »</a>
                                                        <a href="#" class="btn">Last »</a>
                                                </div>

                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">

                                                <section class="widget">
                                                        <div class="support-widget">
                                                                <h3 class="title"> <a href="contact">支持</a> </h3>
                                                                <p class="intro">如果你需要更多的支持，那就联系我们</p>
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <h3 class="title">分类最新文章</h3>
                                                        <ul class="articles">
                                                                @foreach($iarticle as $i)
                                                                <li class="article-entry standard">
                                                                        <h4><a href="single.html">{{ $i->iarticle_title }}</a></h4>
                                                                        <span class="article-meta">{{ $i->created_at }} in <a href="#" title="">{{ $i->iarticle_sort }} &amp; {{ $i->user_id }}</a></span>
                                                                        
                                                                </li>
                                                                @endforeach
                                                        </ul>
                                                </section>



                                                <section class="widget"><h3 class="title">分类</h3>
                                                        <ul>
                                                                @foreach($asort as $a)
                                                                <li><a href="#" title="">{{ $a->asort_name }}</a> </li>
                                                                @endforeach
                                                        </ul>
                                                </section>

                                                <section class="widget">
                                                        <h3 class="title">近期留言</h3>
                                                        <ul id="recentcomments">
                                                                @foreach($contact as $c)
                                                                <li class="recentcomments">{{ $c->you_want }} --- {{ $c->user_id }}</li>
                                                                @endforeach
                                                        </ul>
                                                </section>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

                <!-- Start of Footer -->
                <footer id="footer-wrapper">
                        <div id="footer" class="container">
                                <div class="row">

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">运作流程</h3>
                                                        <div class="textwidget">
                                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                                                                <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                                        </div>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget"><h3 class="title">分类</h3>
                                                        <ul>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Advanced Techniques</a> </li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Designing in WordPress</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Server &amp; Database</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet, ">Theme Development</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">Website Dev</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet,">WordPress for Beginners</a></li>
                                                                <li><a href="#" title="Lorem ipsum dolor sit amet, ">WordPress Plugins</a></li>
                                                        </ul>
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">最新推荐</h3>
                                                        <div id="twitter_update_list">
                                                                <ul>
                                                                        <li>No Tweets loaded !</li>
                                                                </ul>
                                                        </div>
                                                       
                                                </section>
                                        </div>

                                        <div class="span3">
                                                <section class="widget">
                                                        <h3 class="title">我们的相册</h3>
                                                        <div class="flickr-photos" id="basicuse">
                                                        </div>
                                                </section>
                                        </div>

                                </div>
                        </div>
                        <!-- end of #footer -->

                        <!-- Footer Bottom -->
                        <div id="footer-bottom-wrapper">
                                <div id="footer-bottom" class="container">
                                        <div class="row">
                                                <div class="span6">
                                                        <p class="copyright">
                                                                Copyright © 2013. All Rights Reserved by KnowledgeBase.Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
                                                        </p>
                                                </div>
                                                <div class="span6">
                                                        <!-- Social Navigation -->
                                                        
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- End of Footer Bottom -->

                </footer>
                <!-- End of Footer -->

                <a href="#top" id="scroll-top"></a>

                <!-- script -->
                <script type='text/javascript' src='js/jquery-1.8.3.min.js'></script>
                <script type='text/javascript' src='js/jquery.easing.1.34e44.js?ver=1.3'></script>
                <script type='text/javascript' src='js/prettyphoto/jquery.prettyPhotoaeb9.js?ver=3.1.4'></script>
                <script type='text/javascript' src='js/jquery.liveSearchd5f7.js?ver=2.0'></script>
				<script type='text/javascript' src='js/jflickrfeed.js'></script>
                <script type='text/javascript' src='js/jquery.formd471.js?ver=3.18'></script>
                <script type='text/javascript' src='js/jquery.validate.minfc6b.js?ver=1.10.0'></script>
                <script type='text/javascript' src='js/custom5152.js?ver=1.0'></script>

        </body>
</html>
