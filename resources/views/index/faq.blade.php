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
                                        <div class="span8 page-content">

                                                <article class=" page type-page hentry clearfix">
                                                        <h1 class="post-title"><a href="#">常见问题</a></h1>
                                                        <hr>
                                                        <p>WordPress is open source web software that you can install on your web server to create your website, blog, community or network. WordPress started out as a tool for blogging, but has evolved into a full-fledged Content Management System (CMS), capable of powering websites, networks and communities.</p>
                                                </article>

                                                <div class="faqs clearfix">

                                                        <article class="faq-item active">
                                                                <span class="faq-icon"></span>
                                                                <h3 class="faq-question">
                                                                        <a href="#">How Is WordPress related to other blogging applications?</a>
                                                                </h3>
                                                                <div class="faq-answer">
                                                                        <p>WordPress was primarily inspired by&nbsp;<a title="http://www.noahgrey.com/" href="http://www.noahgrey.com/">Noah Grey</a>‘s&nbsp;<a title="http://www.noahgrey.com/greysoft/" href="http://www.noahgrey.com/greysoft/">Greymatter</a>&nbsp;open-source web log and journal software. It is related to&nbsp;<a title="http://cafelog.com/" href="http://cafelog.com/">b2</a>, sort of a second cousin twice removed. You can use WordPress to post your own stories, ideas, rants, reviews, links, and pictures of your toothless Uncle Ernie at the wedding reception, if you choose. In addition, you can customize the look and feel of your site. Numerous themes are available and may be modified in many different ways. Through the use of&nbsp;<a title="Using Themes" href="http://codex.wordpress.org/Using_Themes">WordPress Themes</a>, you can quickly change the look and style of your site. You can also extend WordPress’ functionality through the use of&nbsp;<a title="Plugins" href="http://codex.wordpress.org/Plugins">Plugins</a>. Plugins let you create the website or blog that suits your needs. As you can see, its functionality exceeds or at least is similar to what is available in most blogging tools today.</p>
                                                                        <p>For more information:</p>
                                                                        <ul>
                                                                                <li><a title="WordPress" href="http://codex.wordpress.org/WordPress">WordPress</a></li>
                                                                                <li><a title="WordPress Semantics" href="http://codex.wordpress.org/WordPress_Semantics">WordPress Semantics</a></li>
                                                                                <li><a title="About WordPress" href="http://codex.wordpress.org/About_WordPress">About WordPress</a></li>
                                                                        </ul>
                                                                </div>
                                                        </article>

                                                        <article class="faq-item">
                                                                <span class="faq-icon"></span>
                                                                <h3 class="faq-question">
                                                                        <a href="#">What’s the difference between WordPress.org and WordPress.com?</a>
                                                                </h3>
                                                                <div class="faq-answer">
                                                                        <p>WordPress.com is a blog network run by Automattic. It uses WordPress software, but individual blogs are hosted and managed by WordPress.com. This is a free service with premium addons and upgrades.</p>
                                                                        <p>Here at WordPress.org, you can download WordPress, the web software that WordPress.com runs on. Once you’ve downloaded it, you can upload it to a web server and run your own WordPress website.</p>
                                                                        <p>There is useful information about this distinction on the&nbsp;<a title="http://en.support.wordpress.com/com-vs-org/" href="http://en.support.wordpress.com/com-vs-org/">WordPress.com website</a>.</p>
                                                                </div>
                                                        </article>

                                                        <article class="faq-item">
                                                                <span class="faq-icon"></span>
                                                                <h3 class="faq-question">
                                                                        <a href="#">How is WordPress licensed?</a>
                                                                </h3>
                                                                <div class="faq-answer" style="display: none;">
                                                                        <p>WordPress is licensed under the&nbsp;<a title="http://www.gnu.org/licenses/gpl.html" href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>&nbsp;(GPL).</p>
                                                                        <p>The GPL is an open source license. This means you are free to modify and redistribute the source code under certain conditions. You can read more about why we chose the GPL on&nbsp;<a title="http://codex.wordpress.org/License" href="http://codex.wordpress.org/License">the License Page.</a></p>
                                                                </div>
                                                        </article>

                                                        <article class="faq-item">
                                                                <span class="faq-icon"></span>
                                                                <h3 class="faq-question">
                                                                        <a href="#"> When was WordPress first released?</a>
                                                                </h3>
                                                                <div class="faq-answer">
                                                                        <p>WordPress started out life as a fork of b2/cafelog by Matt Mullenweg and Mike Little. The first version was&nbsp;<a title="http://wordpress.org/news/2003/05/wordpress-now-available/" href="http://wordpress.org/news/2003/05/wordpress-now-available/">released in 2003</a></p>
                                                                </div>
                                                        </article>

                                                        <article class="faq-item">
                                                                <span class="faq-icon"></span>
                                                                <h3 class="faq-question">
                                                                        <a href="#">What are WordPress’ features?</a>
                                                                </h3>
                                                                <div class="faq-answer">
                                                                        <p>WordPress has an extensive list of features and, as it is constantly evolving, this list of features is constantly growing.&nbsp;<a title="http://codex.wordpress.org/WordPress_Features" href="http://codex.wordpress.org/WordPress_Features">Check out the up-to-date list of features.</a></p>
                                                                </div>
                                                        </article>

                                                        <article class="faq-item">
                                                                <span class="faq-icon"></span>
                                                                <h3 class="faq-question">
                                                                        <a href="#">Why Choose WordPress?</a>
                                                                </h3>
                                                                <div class="faq-answer">
                                                                        <p>One of the principle advantages of WordPress is that you are in control. Unlike remote-hosted scripts such as&nbsp;<a title="http://www.blogger.com" href="http://www.blogger.com/">Blogger</a>&nbsp;and&nbsp;<a title="http://www.livejournal.com" href="http://www.livejournal.com/">LiveJournal</a>, you host WordPress on your own server. Installation is very simple, as is the configuration. Unlike other software programs, there are not a million files to&nbsp;<a title="Changing File Permissions" href="http://codex.wordpress.org/Changing_File_Permissions">chmod</a>&nbsp;nor are there dozens of&nbsp;<a title="Templates" href="http://codex.wordpress.org/Templates">templates</a>&nbsp;to edit just to get your site set up and looking the way you want.</p>
                                                                        <p>Also,&nbsp;<a title="Glossary" href="http://codex.wordpress.org/Glossary#Blogging">Blog</a>&nbsp;pages in WordPress are generated on the fly whenever a page is requested, so you do not have multiple archive pages clogging up your web space. Waiting for pages to rebuild is a thing of the past because template changes are made in scant seconds.</p>
                                                                        <p>WordPress is built following&nbsp;<a title="http://www.w3.org/" href="http://www.w3.org/">W3C</a>&nbsp;standards for&nbsp;<a title="Glossary" href="http://codex.wordpress.org/Glossary#XHTML">XHTML</a>&nbsp;and&nbsp;<a title="Glossary" href="http://codex.wordpress.org/Glossary#CSS">CSS</a>, ensuring that your site is more easily rendered across standards-compliant browsers. Other browsers are supported with a few hacks; it’s a reality of the web that hacks are necessary.</p>
                                                                        <p><a title="Glossary" href="http://codex.wordpress.org/Glossary#News_reader">Aggregator</a>&nbsp;support is built-in with a number of standard&nbsp;<a title="Glossary" href="http://codex.wordpress.org/Glossary#RSS">RSS</a>&nbsp;configurations already done for you, as well as&nbsp;<a title="Glossary" href="http://codex.wordpress.org/Glossary#Atom">Atom</a>. Following standards makes your WordPress site easier to manage, increases its longevity for future Internet technology adoption, and helps give your site the widest audience possible.</p>
                                                                </div>
                                                        </article>
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
                                                        <h3 class="title">最新文章</h3>
                                                        <ul class="articles">
                                                                @foreach($iarticle as $i)
                                                                <li class="article-entry standard">
                                                                        <h4><a href="single.html">{{ $i->iarticle_title }}</a></h4>
                                                                        <span class="article-meta">{{ $i->created_at }} in <a href="#" title="">{{ $i->iarticle_sort }} &amp; {{ $i->user_id }}</a></span>
                                                                        
                                                                </li>
                                                                @endforeach
                                                        </ul>
                                                </section>



                                                <section class="widget"><h3 class="title">标签</h3>
                                                        <ul>
                                                                @foreach($qian as $q)
                                                                <li><a href="#" title="">{{ $q->admin_qian }}</a> </li>
                                                                @endforeach
                                                        </ul>
                                                </section>


                                                <section class="widget">
                                                        <h3 class="title">分类</h3>
                                                        <div class="tagcloud">
                                                                @foreach($asort as $a)
                                                                <a href="#" class="btn btn-mini">{{ $a->asort_name }}</a>
                                                                @endforeach
                                                        </div>
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
                <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
                <script type='text/javascript' src='js/prettyphoto/jquery.prettyPhoto.js'></script>
                <script type='text/javascript' src='js/jflickrfeed.js'></script>
                <script type='text/javascript' src='js/jquery.liveSearch.js'></script>
                <script type='text/javascript' src='js/jquery.form.js'></script>
                <script type='text/javascript' src='js/jquery.validate.min.js'></script>
                <script type='text/javascript' src='js/custom.js'></script>

        </body>
</html>
