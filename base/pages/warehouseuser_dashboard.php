<?php include('../__php__/securepage.php') ; ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">


<head>

  <title>Stock Management</title>

  <link rel="apple-touch-icon" href="../assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="../assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../../global/css/bootstrap.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/css/bootstrap-extend.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../assets/css/site.min3f0d.css?v2.2.0">

  <!-- Plugins -->
  <link rel="stylesheet" href="../../global/vendor/animsition/animsition.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/vendor/asscrollable/asScrollable.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/vendor/switchery/switchery.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/vendor/intro-js/introjs.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/vendor/slidepanel/slidePanel.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/vendor/flag-icon-css/flag-icon.min3f0d.css?v2.2.0">

  <!-- Fonts -->
  <link rel="stylesheet" href="../../global/fonts/web-icons/web-icons.min3f0d.css?v2.2.0">
  <link rel="stylesheet" href="../../global/fonts/brand-icons/brand-icons.min3f0d.css?v2.2.0">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Scripts -->
  <script src="../../global/vendor/modernizr/modernizr.min.js"></script>
  <script src="../../global/vendor/breakpoints/breakpoints.min.js"></script>
  <script>
    Breakpoints();
  </script>
 <!-- <script language = "javascript"> 
var XMLHttpRequestObject = false; 
if(window.XMLHttpRequest) { 
  XMLHttpRequestObject = new XMLHttpRequest(); 
  } 
else if(window.ActiveXObject) { 
  XMLHttpRequestObject = new ActiveXObject("Microsoft.XMLHTTP"); 
}
function getData(dataSource, divID) { 
  if(XMLHttpRequestObject) { 
    var obj = document.getElementById(divID); 
    XMLHttpRequestObject.open("POST", dataSource); 
    XMLHttpRequestObject.onreadystatechange = function() { 
      if(XMLHttpRequestObject.readyState == 4 && XMLHttpRequestObject.status == 200) { obj.innerHTML = XMLHttpRequestObject.responseText; 
      } 
    } 
      XMLHttpRequestObject.send(null); 
}
} 
</script>-->
</head>
<body>
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <span class="navbar-brand-text hidden-xs">Stock Management</span>
      </div>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
            role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          <li class="dropdown dropdown-fw dropdown-mega">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="fade" role="button">Mega <i class="icon wb-chevron-down-mini" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <div class="mega-content">
                  <div class="row">
                    <div class="col-sm-4">
                      <h5>UI Kit</h5>
                      <ul class="blocks-2">
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/animation.html">Animation</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/buttons.html">Buttons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/colors.html">Colors</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/dropdowns.html">Dropdowns</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/icons.html">Icons</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/lightbox.html">Lightbox</a>
                            </li>
                          </ul>
                        </li>
                        <li class="mega-menu margin-0">
                          <ul class="list-icons">
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/modals.html">Modals</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/panel-structure.html">Panels</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../structure/overlay.html">Overlay</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/tooltip-popover.html">Tooltips</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../advanced/scrollable.html">Scrollable</a>
                            </li>
                            <li><i class="wb-chevron-right-mini" aria-hidden="true"></i>
                              <a
                              href="../uikit/typography.html">Typography</a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5>Media
                        <span class="badge badge-success">4</span>
                      </h5>
                      <ul class="blocks-3">
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../global/photos/view-1-150x100.jpg" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../global/photos/view-2-150x100.jpg" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../global/photos/view-3-150x100.jpg" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../global/photos/view-4-150x100.jpg" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../global/photos/view-5-150x100.jpg" alt="..."
                            />
                          </a>
                        </li>
                        <li>
                          <a class="thumbnail margin-0" href="javascript:void(0)">
                            <img class="width-full" src="../../global/photos/view-6-150x100.jpg" alt="..."
                            />
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <h5 class="margin-bottom-0">Accordion</h5>
                      <!-- Accordion -->
                      <div class="panel-group panel-group-simple" id="siteMegaAccordion" aria-multiselectable="true"
                      role="tablist">
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingOne" role="tab">
                            <a class="panel-title" data-toggle="collapse" href="#siteMegaCollapseOne" data-parent="#siteMegaAccordion"
                            aria-expanded="false" aria-controls="siteMegaCollapseOne">
                                Collapsible Group Item #1
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseOne" aria-labelledby="siteMegaAccordionHeadingOne"
                          role="tabpanel">
                            <div class="panel-body">
                              De moveat laudatur vestra parum doloribus labitur sentire partes, eripuit praesenti
                              congressus ostendit alienae, voluptati ornateque
                              accusamus clamat reperietur convicia albucius.
                            </div>
                          </div>
                        </div>
                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingTwo" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseTwo"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseTwo">
                                Collapsible Group Item #2
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseTwo" aria-labelledby="siteMegaAccordionHeadingTwo"
                          role="tabpanel">
                            <div class="panel-body">
                              Praestabiliorem. Pellat excruciant legantur ullum leniter vacare foris voluptate
                              loco ignavi, credo videretur multoque choro fatemur
                              mortis animus adoptionem, bello statuat expediunt
                              naturales.
                            </div>
                          </div>
                        </div>

                        <div class="panel">
                          <div class="panel-heading" id="siteMegaAccordionHeadingThree" role="tab">
                            <a class="panel-title collapsed" data-toggle="collapse" href="#siteMegaCollapseThree"
                            data-parent="#siteMegaAccordion" aria-expanded="false"
                            aria-controls="siteMegaCollapseThree">
                                Collapsible Group Item #3
                              </a>
                          </div>
                          <div class="panel-collapse collapse" id="siteMegaCollapseThree" aria-labelledby="siteMegaAccordionHeadingThree"
                          role="tabpanel">
                            <div class="panel-body">
                              Horum, antiquitate perciperet d conspectum locus obruamus animumque perspici probabis
                              suscipere. Desiderat magnum, contenta poena desiderant
                              concederetur menandri damna disputandum corporum.
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Accordion -->
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          
          <li><a><?php echo $_SESSION["_user_name_"]; ?></a></li>
          
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="../../global/portraits/5.jpg" alt="...">
                <i></i>
              </span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i> Billing</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="../__php__/logout.php" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
              <span class="badge badge-danger up">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>NOTIFICATIONS</h5>
                <span class="label label-round label-danger">New 5</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">A new order has been placed</h6>
                          <time class="media-meta" datetime="2016-06-12T20:50:48+08:00">5 hours ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Completed the task</h6>
                          <time class="media-meta" datetime="2016-06-11T18:29:20+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Settings updated</h6>
                          <time class="media-meta" datetime="2016-06-11T14:05:00+08:00">2 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Event started</h6>
                          <time class="media-meta" datetime="2016-06-10T13:50:18+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Message received</h6>
                          <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days ago</time>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
            data-animation="scale-up" role="button">
              <i class="icon wb-envelope" aria-hidden="true"></i>
              <span class="badge badge-info up">3</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <li class="dropdown-menu-header" role="presentation">
                <h5>MESSAGES</h5>
                <span class="label label-round label-info">New 3</span>
              </li>

              <li class="list-group" role="presentation">
                <div data-role="container">
                  <div data-role="content">
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="../../global/portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Mary Adams</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T20:22:05+08:00">30 minutes ago</time>
                          </div>
                          <div class="media-detail">Anyways, i would like just do it</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="../../global/portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Caleb Richards</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-17T12:30:30+08:00">12 hours ago</time>
                          </div>
                          <div class="media-detail">I checheck the document. But there seems</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="../../global/portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">June Lane</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-16T18:38:40+08:00">2 days ago</time>
                          </div>
                          <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                      <div class="media">
                        <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="../../global/portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading">Edward Fletcher</h6>
                          <div class="media-meta">
                            <time datetime="2016-06-15T20:34:48+08:00">3 days ago</time>
                          </div>
                          <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li class="dropdown-menu-footer" role="presentation">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a href="javascript:void(0)" role="menuitem">
                    See all messages
                  </a>
              </li>
            </ul>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="../site-sidebar.tpl">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
        
      </div>
      <!-- End Navbar Collapse -->
      
      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>

      </div>
      <!-- End Site Navbar Seach -->
      
    </div>
    
  </nav>
  <div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">3</span>
                </div>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../index.html">
                    <span class="site-menu-title">Dashboard v1</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../dashboard/v2.html">
                    <span class="site-menu-title">Dashboard v2</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../dashboard/ecommerce.html">
                    <span class="site-menu-title">Ecommerce</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../dashboard/analytics.html">
                    <span class="site-menu-title">Analytics</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../dashboard/team.html">
                    <span class="site-menu-title">Team</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Layouts</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menu-collapsed.html">
                    <span class="site-menu-title">Menu Collapsed</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menu-collapsed-alt.html">
                    <span class="site-menu-title">Menu Collapsed Alt</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menu-expended.html">
                    <span class="site-menu-title">Menu Expended</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/grids.html">
                    <span class="site-menu-title">Grid Scaffolding</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/layout-grid.html">
                    <span class="site-menu-title">Layout Grid</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/headers.html">
                    <span class="site-menu-title">Different Headers</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/panel-transition.html">
                    <span class="site-menu-title">Panel Transition</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/boxed.html">
                    <span class="site-menu-title">Boxed Layout</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/two-columns.html">
                    <span class="site-menu-title">Two Columns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menubar-flipped.html">
                    <span class="site-menu-title">Menubar Flipped</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/menubar-native-scrolling.html">
                    <span class="site-menu-title">Menubar Native Scrolling</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/bordered-header.html">
                    <span class="site-menu-title">Bordered Header</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/page-aside-fixed.html">
                    <span class="site-menu-title">Page Aside Fixed</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-category">Elements</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
                <span class="site-menu-title">Basic UI</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Panel</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../uikit/panel-structure.html">
                        <span class="site-menu-title">Panel Structure</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../uikit/panel-actions.html">
                        <span class="site-menu-title">Panel Actions</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../uikit/panel-portlets.html">
                        <span class="site-menu-title">Panel Portlets</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/buttons.html">
                    <span class="site-menu-title">Buttons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/dropdowns.html">
                    <span class="site-menu-title">Dropdowns</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/icons.html">
                    <span class="site-menu-title">Icons</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/list.html">
                    <span class="site-menu-title">List</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/tooltip-popover.html">
                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/modals.html">
                    <span class="site-menu-title">Modals</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/tabs-accordions.html">
                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/images.html">
                    <span class="site-menu-title">Images</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/badges-labels.html">
                    <span class="site-menu-title">Badges &amp; Labels</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/progress-bars.html">
                    <span class="site-menu-title">Progress Bars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/carousel.html">
                    <span class="site-menu-title">Carousel</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/typography.html">
                    <span class="site-menu-title">Typography</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/colors.html">
                    <span class="site-menu-title">Colors</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../uikit/utilities.html">
                    <span class="site-menu-title">Utilties</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-plugin" aria-hidden="true"></i>
                <span class="site-menu-title">Structure</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/alerts.html">
                    <span class="site-menu-title">Alerts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/ribbon.html">
                    <span class="site-menu-title">Ribbon</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/pricing-tables.html">
                    <span class="site-menu-title">Pricing Tables</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/overlay.html">
                    <span class="site-menu-title">Overlay</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/cover.html">
                    <span class="site-menu-title">Cover</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/timeline-simple.html">
                    <span class="site-menu-title">Simple Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/timeline.html">
                    <span class="site-menu-title">Timeline</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/step.html">
                    <span class="site-menu-title">Step</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/comments.html">
                    <span class="site-menu-title">Comments</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/media.html">
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/chat.html">
                    <span class="site-menu-title">Chat</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/testimonials.html">
                    <span class="site-menu-title">Testimonials</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/nav.html">
                    <span class="site-menu-title">Nav</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/navbars.html">
                    <span class="site-menu-title">Navbars</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/blockquotes.html">
                    <span class="site-menu-title">Blockquotes</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/pagination.html">
                    <span class="site-menu-title">Pagination</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../structure/breadcrumbs.html">
                    <span class="site-menu-title">Breadcrumbs</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-library" aria-hidden="true"></i>
                <span class="site-menu-title">Forms</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/general.html">
                    <span class="site-menu-title">General Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/material.html">
                    <span class="site-menu-title">Material Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/advanced.html">
                    <span class="site-menu-title">Advanced Elements</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/layouts.html">
                    <span class="site-menu-title">Form Layouts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/wizard.html">
                    <span class="site-menu-title">Form Wizard</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/validation.html">
                    <span class="site-menu-title">Form Validation</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/masks.html">
                    <span class="site-menu-title">Form Masks</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/editable.html">
                    <span class="site-menu-title">Form Editable</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Editors</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../forms/editor-summernote.html">
                        <span class="site-menu-title">Summernote</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../forms/editor-markdown.html">
                        <span class="site-menu-title">Markdown</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../forms/editor-ace.html">
                        <span class="site-menu-title">Ace Editor</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/image-cropping.html">
                    <span class="site-menu-title">Image Cropping</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../forms/file-uploads.html">
                    <span class="site-menu-title">File Uploads</span>
                  </a>
                </li>
              </ul>
            </li>
            
            
            <li class="site-menu-category">Apps</li>
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                <span class="site-menu-title">Apps</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/contacts/contacts.html">
                    <span class="site-menu-title">Contacts</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/calendar/calendar.html">
                    <span class="site-menu-title">Calendar</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/notebook/notebook.html">
                    <span class="site-menu-title">Notebook</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/taskboard/taskboard.html">
                    <span class="site-menu-title">Taskboard</span>
                  </a>
                </li>
                <li class="site-menu-item has-sub">
                  <a href="javascript:void(0)">
                    <span class="site-menu-title">Documents</span>
                    <span class="site-menu-arrow"></span>
                  </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../apps/documents/articles.html">
                        <span class="site-menu-title">Articles</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../apps/documents/categories.html">
                        <span class="site-menu-title">Categories</span>
                      </a>
                    </li>
                    <li class="site-menu-item">
                      <a class="animsition-link" href="../apps/documents/article.html">
                        <span class="site-menu-title">Article</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/forum/forum.html">
                    <span class="site-menu-title">Forum</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/message/message.html">
                    <span class="site-menu-title">Message</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/projects/projects.html">
                    <span class="site-menu-title">Projects</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/mailbox/mailbox.html">
                    <span class="site-menu-title">Mailbox</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/media/overview.html">
                    <span class="site-menu-title">Media</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/work/work.html">
                    <span class="site-menu-title">Work</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../apps/location/location.html">
                    <span class="site-menu-title">Location</span>
                  </a>
                </li>
              </ul>
            </li>
            
            
          </ul>
        </div>
      </div>
    </div>

    
  </div>
  


  <!-- Page -->
  <div class="page animsition">
    <div>
      <h1>Warehouse User Dashboard</h1>
    </div>
    <div class="page-content">
      <h2>Data Goes here</h2>
      <div class="example-wrap">
                <div class="nav-tabs-horizontal">
                  <ul class="nav nav-tabs" data-plugin="nav-tabs" role="tablist">
                    <li class="active" role="presentation"><a data-toggle="tab" href="#exampleTabsOne" aria-controls="exampleTabsOne"
                      role="tab">Add Product</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsTwo" aria-controls="exampleTabsTwo"
                      role="tab">Edit Product</a></li>
                    <li role="presentation"><a data-toggle="tab" href="#exampleTabsThree" aria-controls="exampleTabsThree"
                      role="tab">Update Product Stock</a></li>
                  </ul>
                  <div class="tab-content padding-top-20">
                    <div class="tab-pane active" id="exampleTabsOne" role="tabpanel">
                      <div class="form-group row">
                      <form method="POST" action="../__php__/addproductitem.php">
  <label for="example-text-input" class="col-2 col-form-label">Product Name</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Product Name" id="example-text-input" name="product_name">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Item Name</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Item name" id="example-text-input" name="productitem_name">
  </div>
</div>
<div class="form-group">
            <select name="product_category">
                <option selected>Choose Product category</option>
                <option value = "raw_material">Raw Material</option>
                <option value = "processed_materials">Processed Material</option>
                <option value = "equipment">Equipment</option>
                <option value = "basic_components">Basic Component</option>
                <option value = "advanced_component">Advanced Component</option>
                <option value = "product_component">Product Component</option>
                <option value = "MRO">MRO (Maintenance, Repair and Operating) Product</option>
                </select>
        </div>
<div class="form-group">
                  <label class="col-2 col-form-label">Product Discription
                    <span class="required">*</span>
                  </label>
                  <div class="col-10">
                    <textarea class="form-control" name="product_discription" rows="3" placeholder="Enter Product discription...."
                    required=""></textarea>
                  </div>
                </div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Cost peritem</label>
  <div class="col-10">
    <input class="form-control" type="number" value="" id="example-number-input" name="costperitem">
  </div>
</div>

<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Quantity</label>
  <div class="col-10">
    <input class="form-control" type="number" value="" id="example-number-input" name="quantity">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-10">
    <input class="form-control" type="text" value="10-02-2017" id="example-date-input" name="date">
  </div>
</div>


<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Time</label>
  <div class="col-10">
    <input class="form-control" type="text" value="13:45" id="example-time-input" name="time">
  </div>
</div>
 <div class="form-group col-lg-12 text-right padding-top-m">
                <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
                
              </div>
      </form>
      <div class="form-group col-lg-12 text-right padding-top-m">
                <button type="button" class="btn btn-primary" id="" onclick="warehouseuser_dashboard.php">Cancel</button>
              </div>
              <div id="targetDiv"> 
  <p>Data Reply....</p> 
</div> 
              
      </div>
        </div>
                    <div class="tab-pane" id="exampleTabsTwo" role="tabpanel">
                      <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Product Name</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Product Name" id="example-text-input">
  </div>
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Item Name</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Item name" id="example-text-input">
  </div>
</div>
<div class="form-group">
                  <label class="col-2 col-form-label">Product Discription
                    <span class="required">*</span>
                  </label>
                  <div class="col-10">
                    <textarea class="form-control" name="product_discription" rows="3" placeholder="Enter Product discription...."
                    required=""></textarea>
                  </div>
                </div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Cost peritem</label>
  <div class="col-10">
    <input class="form-control" type="number" value="" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Cost perUnit</label>
  <div class="col-10">
    <input class="form-control" type="number" value="" id="example-number-input">
  </div>
  </div>
              <div class="form-group col-lg-12 text-right padding-top-m">
              
                <button type="submit" class="btn btn-primary" id="validateButton1">Submit</button>
              </div>
              <div class="form-group col-lg-12 text-right padding-top-m">
                <button type="button" class="btn btn-primary" id="" onclick="warehouseuser_dashboard.php" >Cancel</button>
              </div>
              

                
              

</div>

                    </div>
                    <div class="tab-pane" id="exampleTabsThree" role="tabpanel">
                      Benivole horrent tantalo fuisset adamare fugiendam tractatos indicaverunt animis
                      chaere, brevi minuendas, ubi angoribus iisque deorsum audita
                      haec dedocendi utilitas. Panaetium erimus platonem varias
                      imperitos animum, iudiciorumque operis multa disputando.
                      <div id="showbaba">

                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
  </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© <?php echo date("Y"); ?> </div>
    <div class="site-footer-right">
      
    </div>
  </footer>
  <!-- Core  -->
  <script src="../../global/vendor/jquery/jquery.min.js"></script>
  <script src="../../global/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="../../global/vendor/animsition/animsition.min.js"></script>
  <script src="../../global/vendor/asscroll/jquery-asScroll.min.js"></script>
  <script src="../../global/vendor/mousewheel/jquery.mousewheel.min.js"></script>
  <script src="../../global/vendor/asscrollable/jquery.asScrollable.all.min.js"></script>
  <script src="../../global/vendor/ashoverscroll/jquery-asHoverScroll.min.js"></script>

  <!-- Plugins -->
  <script src="../../global/vendor/switchery/switchery.min.js"></script>
  <script src="../../global/vendor/intro-js/intro.min.js"></script>
  <script src="../../global/vendor/screenfull/screenfull.min.js"></script>
  <script src="../../global/vendor/slidepanel/jquery-slidePanel.min.js"></script>

  <!-- Scripts -->
  <script type="text/javascript" src="../../jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

        setInterval(function() {
          $('#showbaba').load('../__php__/stock_data_fetch/stock_data.php')
        }, 2000);



    });
  </script>
  <script src="../../global/js/core.min.js"></script>
  <script src="../assets/js/site.min.js"></script>

  <script src="../assets/js/sections/menu.min.js"></script>
  <script src="../assets/js/sections/menubar.min.js"></script>
  <script src="../assets/js/sections/gridmenu.min.js"></script>
  <script src="../assets/js/sections/sidebar.min.js"></script>

  <script src="../../global/js/configs/config-colors.min.js"></script>
  <script src="../assets/js/configs/config-tour.min.js"></script>

  <script src="../../global/js/components/asscrollable.min.js"></script>
  <script src="../../global/js/components/animsition.min.js"></script>
  <script src="../../global/js/components/slidepanel.min.js"></script>
  <script src="../../global/js/components/switchery.min.js"></script>


  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>


  <!-- Google Analytics -->
  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js',
      'ga');

    ga('create', 'UA-65522665-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>



</html>