<?php
/**
 * Chronolabs REST API File
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       Chronolabs Cooperative http://labs.coop
 * @license         General Public License version 3 (http://labs.coop/briefs/legal/general-public-licence/13,3.html)
 * @package         whois
 * @since           1.1.2
 * @author          Simon Roberts <wishcraft@users.sourceforge.net>
 * @version         $Id: help.php 1000 2013-06-07 01:20:22Z mynamesnot $
 * @subpackage		api
 * @description		Whois API Service REST
 */
	$pu = parse_url($_SERVER['REQUEST_URI']);
	$source = (isset($_SERVER['HTTPS'])?'https://':'http://').strtolower($_SERVER['HTTP_HOST']).$pu['path'];
	$ua = substr(sha1($_SERVER['HTTP_USER_AGENT']), mt_rand(0,32), 9);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php 	$servicename = "Optical Character Recognition"; 
		$servicecode = "OCR"; ?>
	<meta property="og:url" content="<?php echo (isset($_SERVER["HTTPS"])?"https://":"http://").$_SERVER["HTTP_HOST"]; ?>" />
	<meta property="og:site_name" content="<?php echo $servicename; ?> Open Services API's (With Source-code)"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="rating" content="general" />
	<meta http-equiv="author" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="copyright" content="Chronolabs Cooperative &copy; <?php echo date("Y")-1; ?>-<?php echo date("Y")+1; ?>" />
	<meta http-equiv="generator" content="wishcraft@users.sourceforge.net" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<link rel="apple-touch-icon" href="//labs.partnerconsole.net/execute2/external/reseller-logo">
	<meta property="og:image" content="//labs.partnerconsole.net/execute2/external/reseller-logo"/>
	<link rel="stylesheet" href="/style.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/gradientee/stylesheet.css" type="text/css" />
	<link rel="stylesheet" href="//css.ringwould.com.au/3/shadowing/styleheet.css" type="text/css" />
	<title><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</title>
	<meta property="og:title" content="<?php echo $servicecode; ?> API"/>
	<meta property="og:type" content="<?php echo strtolower($servicecode); ?>-api"/>
	<!-- AddThis Smart Layers BEGIN -->
	<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50f9a1c208996c1d"></script>
	<script type="text/javascript">
	  addthis.layers({
		'theme' : 'transparent',
		'share' : {
		  'position' : 'right',
		  'numPreferredServices' : 6
		}, 
		'follow' : {
		  'services' : [
			{'service': 'twitter', 'id': 'ChronolabsCoop'},
			{'service': 'twitter', 'id': 'Cipherhouse'},
			{'service': 'twitter', 'id': 'OpenRend'},
			{'service': 'facebook', 'id': 'Chronolabs'},
			{'service': 'linkedin', 'id': 'founderandprinciple'},
			{'service': 'google_follow', 'id': '105256588269767640343'},
			{'service': 'google_follow', 'id': '116789643858806436996'}
		  ]
		},  
		'whatsnext' : {},  
		'recommended' : {
		  'title': 'Recommended for you:'
		} 
	  });
	</script>
	<!-- AddThis Smart Layers END -->
</head>
<body>
<div class="main">
    <h1><?php echo $servicename; ?> (<?php echo $servicecode; ?>) Open API || Chronolabs Cooperative (Sydney, Australia)</h1>
    <p>This is an API Service for conducting a query on a Optical Character Recognition to find out text inside an image.</p>
    <h2>Code API Documentation</h2>
    <p>You can find the phpDocumentor code API documentation at the following path :: <a target="_blank" href="<?php echo $source; ?>docs/" target="_blank"><?php echo $source; ?>docs/</a>. These should outline the source code core functions and classes for the API to function!</p>
    <h2>RAW Document Output</h2>
    <p>This is done with the <em>raw.api</em> extension at the end of the url, you replace the example address with the Optical Character Recognition you are testing the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">You need too submit a form to the following URL for the field name of <em>'<?php echo $ua; ?>'</em> containing the image to be OCR'd</font><br/><br/>
        <em>Form action path: <strong><?php echo $source; ?>v1/<?php echo $ua; ?>/raw.api</strong></em>
        <form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/raw.api">
    			Select image to upload:
    		     <input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>">
   				 <input type="submit" value="Upload Image" name="submit">
		</form>
		<h3>Code Example:</h3>
		<pre style="margin: 14px; padding: 12px; border: 2px solid #ee43a4;">
&lt;form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/raw.api"&gt;
	Select image to upload:
	&lt;input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>"&gt;
	&lt;input type="submit" value="Upload Image" name="submit"&gt;
&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>HTML Document Output</h2>
    <p>This is done with the <em>html.api</em> extension at the end of the url, you replace the address with the Optical Character Recognition you are testing the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">You need too submit a form to the following URL for the field name of <em>'<?php echo $ua; ?>'</em> containing the image to be OCR'd</font><br/><br/>
         <em>Form action path: <strong><?php echo $source; ?>v1/<?php echo $ua; ?>/html.api</strong></em>
        <form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/html.api">
    			Select image to upload:
    		     <input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>">
   				 <input type="submit" value="Upload Image" name="submit">
		</form>
		<h3>Code Example:</h3>
		<pre style="margin: 14px; padding: 12px; border: 2px solid #ee43a4;">
&lt;form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/html.api"&gt;
	Select image to upload:
	&lt;input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>"&gt;
	&lt;input type="submit" value="Upload Image" name="submit"&gt;
&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>Serialisation Document Output</h2>
    <p>This is done with the <em>serial.api</em> extension at the end of the url, you replace the address with the Optical Character Recognition you are testing the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">You need too submit a form to the following URL for the field name of <em>'<?php echo $ua; ?>'</em> containing the image to be OCR'd</font><br/><br/>
         <em>Form action path: <strong><?php echo $source; ?>v1/<?php echo $ua; ?>/serial.api</strong></em>
        <form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/serial.api">
    			Select image to upload:
    		     <input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>">
   				 <input type="submit" value="Upload Image" name="submit">
		</form>
		<h3>Code Example:</h3>
		<pre style="margin: 14px; padding: 12px; border: 2px solid #ee43a4;">
&lt;form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/serial.api"&gt;
	Select image to upload:
	&lt;input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>"&gt;
	&lt;input type="submit" value="Upload Image" name="submit"&gt;
&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>JSON Document Output</h2>
    <p>This is done with the <em>json.api</em> extension at the end of the url, you replace the address with the Optical Character Recognition you are testing the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">You need too submit a form to the following URL for the field name of <em>'<?php echo $ua; ?>'</em> containing the image to be OCR'd</font><br/><br/>
         <em>Form action path: <strong><?php echo $source; ?>v1/<?php echo $ua; ?>/json.api</strong></em>
        <form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/json.api">
    			Select image to upload:
    		     <input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>">
   				 <input type="submit" value="Upload Image" name="submit">
		</form>
		<h3>Code Example:</h3>
		<pre style="margin: 14px; padding: 12px; border: 2px solid #ee43a4;">
&lt;form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/json.api"&gt;
	Select image to upload:
	&lt;input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>"&gt;
	&lt;input type="submit" value="Upload Image" name="submit"&gt;
&lt;/form&gt;
		</pre>
    </blockquote>
    <h2>XML Document Output</h2>
    <p>This is done with the <em>xml.api</em> extension at the end of the url, you replace the address with the Optical Character Recognition you are testing the following example is of calls to the api</p>
    <blockquote>
        <font color="#009900">You need too submit a form to the following URL for the field name of <em>'<?php echo $ua; ?>'</em> containing the image to be OCR'd</font><br/><br/>
        <em>Form action path: <strong><?php echo $source; ?>v1/<?php echo $ua; ?>/xml.api</strong></em>
        <form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/xml.api">
    			Select image to upload:
    		     <input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>">
   				 <input type="submit" value="Upload Image" name="submit">
		</form>
		<h3>Code Example:</h3>
		<pre style="margin: 14px; padding: 12px; border: 2px solid #ee43a4;">
&lt;form name="<?php echo $ua; ?>" method="POST" enctype="multipart/form-data" action="<?php echo $source; ?>v1/<?php echo $ua; ?>/xml.api"&gt;
	Select image to upload:
	&lt;input type="file" name="<?php echo $ua; ?>" id="<?php echo $ua; ?>"&gt;
	&lt;input type="submit" value="Upload Image" name="submit"&gt;
&lt;/form&gt;
		</pre>
    </blockquote>
    <?php if (file_exists($fionf = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'apis-labs.coop.html')) {
    	readfile($fionf);
    }?>	
    <?php if (!in_array(whitelistGetIP(true), whitelistGetIPAddy())) { ?>
    <h2>Limits</h2>
    <p>There is a limit of <?php echo MAXIMUM_QUERIES; ?> queries per hour. You can add yourself to the whitelist by using the following form API <a href="https://whitelist.labs.coop/">Whitelisting form</a>. This is only so this service isn't abused!!</p>
    <?php } ?>
    <h2>The Author</h2>
    <p>This was developed by Simon Roberts in 2012 and is part of the Chronolabs System and Xortify. if you need to contact simon you can do so at the following address <a href="mailto:wishcraft@users.sourceforge.net">wishcraft@users.sourceforge.net</a></p></body>
</div>
</html>
<?php 
