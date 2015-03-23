<!DOCTYPE html>
<html lang="en">
    @include('partials.htmlheader', ['html_title' => 'Login' , 'html_description' => 'Login page'])
<body class="no-skin">

    @include('partials.navbar')

    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try{ace.settings.check('main-container' , 'fixed')}catch(e){}
        </script>

        @include('partials.sidebar')

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">
                    <!-- #section:settings.box -->
                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <!-- #section:settings.skins -->
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>

                                <!-- /section:settings.skins -->

                                <!-- #section:settings.navbar -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                </div>

                                <!-- /section:settings.navbar -->

                                <!-- #section:settings.sidebar -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                </div>

                                <!-- /section:settings.sidebar -->

                                <!-- #section:settings.breadcrumbs -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                </div>

                                <!-- /section:settings.breadcrumbs -->

                                <!-- #section:settings.rtl -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                </div>

                                <!-- /section:settings.rtl -->

                                <!-- #section:settings.container -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                                    <label class="lbl" for="ace-settings-add-container">
                                        Inside
                                        <b>.container</b>
                                    </label>
                                </div>

                                <!-- /section:settings.container -->
                            </div><!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <!-- #section:basics/sidebar.options -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                </div>

                                <!-- /section:basics/sidebar.options -->
                            </div><!-- /.pull-left -->
                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->

                    <!-- /section:settings.box -->
            	    @yield('main-content')
                </div>
            </div>
        </div>
    </div>

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script type="text/javascript">
        window.jQuery || document.write("<script src='{{ asset('/js/jquery.js') }}'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='{{ asset('/js/jquery1x.js') }}'>"+"<"+"/script>");
    </script>
    <![endif]-->
    <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('/js/jquery.mobile.custom.js') }}'>"+"<"+"/script>");
    </script>

    <script src="{{ asset('/js/bootstrap.js') }}"></script>


    <!-- page specific plugin scripts: TODO -->

    <!-- ace scripts -->
    <script src="{{ asset('/js/ace/elements.scroller.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.colorpicker.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.fileinput.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.typeahead.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.wysiwyg.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.spinner.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.treeview.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.wizard.js) }}"></script>
    <script src="{{ asset('/js/ace/elements.aside.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.ajax-content.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.touch-drag.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.sidebar.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.sidebar-scroll-1.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.submenu-hover.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.widget-box.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.settings.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.settings-rtl.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.settings-skin.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.widget-on-reload.js) }}"></script>
    <script src="{{ asset('/js/ace/ace.searchbox-autocomplete.js) }}"></script>

    <!-- inline scripts related to this page: TODO -->

    <!-- the following scripts are used in demo only for onpage help and you don't need them -->
    {{-- <link rel="stylesheet" href="{{ asset('/js/css/ace.onpage-help.css" />
    <link rel="stylesheet" href="../docs/assets/js/themes/sunburst.css" />

    <script type="text/javascript"> ace.vars['base'] = '..'; </script>
    <script src="{{ asset('/js/js/ace/elements.onpage-help.js"></script>
    <script src="{{ asset('/js/js/ace/ace.onpage-help.js"></script>
    <script src="../docs/assets/js/rainbow.js"></script>
    <script src="../docs/assets/js/language/generic.js"></script>
    <script src="../docs/assets/js/language/html.js"></script>
    <script src="../docs/assets/js/language/css.js"></script>
    <script src="../docs/assets/js/language/javascript.js"></script> --}}
</body>
</html>
