<!DOCTYPE html>
<html lang="{{ language:language_alias }}">
  <head>
    <meta charset="utf-8">
    <title><?php echo $template['title'];?></title>
    <?php echo $template['metadata'];?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{ site_favicon }}">

    <!-- Le styles -->
    <?php
	    $asset = new CMS_Asset();
	    $asset->add_themes_css('style.css', 'neutral', 'default');
	    $asset->add_cms_css('bootstrap/css/bootstrap.min.css');
	    echo $asset->compile_css();

	    $asset->add_cms_js("bootstrap/js/bootstrap.min.js");
	    $asset->add_themes_js('script.js', 'neutral', 'default');
	    echo $asset->compile_js();
	?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{ site_favicon }}">
  </head>
  <body>
    {{ widget_name:top_navigation }}

    <div class="container">
      <div class="row-fluid">
    	<div id="layout-banner" class="well hidden-phone span12">
        	<div class="span2">
        		<img src ="{{ site_logo }}" />
        	</div>
            <div class="span10">
	            <h1>{{ site_name }}</h1>
	            <p>{{ site_slogan }}</p>
            </div>
        </div>        
    	<div id="layout-content" class="span9">
    		<div class="span11">{{ navigation_path }}</div><hr />
    		<div class="span3">{{ widget_name:left_navigation }}</div>
    		<div class="span9"><?php echo $template['body'];?></div>
        </div><!--/#layout-content-->
        <div id="layout-widget" class="span3">
            {{ widget_slug:sidebar }}
            <hr />{{ widget_slug:advertisement }}
        </div><!--/#layout-widget-->
      </div><!--/row-->
      <hr>
      <footer>{{ site_footer }}</footer>
    </div><!--/.fluid-container-->

  </body>
</html>