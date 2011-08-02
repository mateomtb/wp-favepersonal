<?php
// Navigate to asset root using realpath.
$abspath = realpath(dirname(__FILE__));
require_once($abspath . '/build/lib/Bundler.php');

$bundler = Bundler::create($abspath);

$bundle_css = new Bundle('css/build.css');
$bundle_css
	->set_bundle_key('bundle-personal')
	->set_language('css')
	->add('base', 'css/base.css')
	->add('utility', 'css/utility.css')
	->add('content', 'css/content.css')
	->add('masthead', 'css/masthead.css')
	->add('social', 'css/social.css')
	->add('structure', 'css/structure.css');
$bundler->push($bundle_css);

$bundle_js = new Bundle('js/build.js');
$bundle_js
	->set_bundle_key('bundle-personal')
	->set_language('javascript')
	->set_meta('dependencies', array('jquery'))
	->add('modernizr', 'js/modernizr.custom.js')
	->add('base', 'js/cfgallery/jquery.cfgallery.js')
	->add('utility', 'js/global.js')
	->add('content', 'js/o-type-ahead.js');
$bundler->push($bundle_js);

/* END EXAMPLE */

?>