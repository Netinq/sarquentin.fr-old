<?php
$SITE_NAME = 'Quentin Sar';
$SITE_DESCRIPTION = 'J\'ai le plaisir de vous présenter mon site web vitrine. Retrouvez diverses informations sur moi ainsi qu\'un apperçu de ce que je peux produire.';
$SITE_AUTHOR = 'Quentin Sar';
$SITE_COLOR = '#ffffff';

$TWITTER = '@NetinqDev';
?>

<head prefix='my_namespace: http://ogp.me/ns/profile#'>

	<!-- Default meta -->
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>

	<meta name='keywords' content='quentin, sar'>
	<meta name='description' content='<?php echo $SITE_DESCRIPTION?>'>
	<meta name='author' content='<?php echo $SITE_AUTHOR?>, sarquentin.fr'>
	<meta name='reply-to' content='contact@sarquentin.fr'>
	<meta name='language' content='FR'>
	<meta name='target' content='all'>
	<meta name='theme-color' content='<?php echo $SITE_COLOR?>'>

	<link rel='shortcut icon' type='image/ico' href='images/logo.png'>
	<link rel='logo' type='image/svg' href='images/logo.png'>

	<!-- Twitter Card meta -->
	<meta name='twitter:card' content='summary'>
	<meta name='twitter:site' content='<?php echo $SITE_NAME?>'>
	<meta name='twitter:title' content='<?php echo $SITE_NAME?>'>
	<meta name='twitter:description' content='<?php echo $SITE_DESCRIPTION?>'>
	<meta name='twitter:creator' content='<?php echo $TWITTER?>'>
	<meta name='twitter:url' content='https://sarquentin.fr' />
	<meta name='twitter:domain' content='sarquentin.fr' />
	
	<!-- Open Graph meta -->
	<meta property='og:title' content='<?php echo $SITE_NAME?>' />
	<meta property='og:type' content='profile' />
	<meta property='og:url' content='https://sarquentin.fr' />
	<meta property='og:image' content='https://sarquentin.fr/images/logo.png' />
	<meta property='og:description' content='<?php echo $SITE_DESCRIPTION?>' />
	<meta property='og:site_name' content='<?php echo $SITE_NAME?>' />
	<meta property='author' content='<?php echo $SITE_AUTHOR?>' />
	<meta property='profile:first_name' content='Quentin' />
	<meta property='profile:last_name' content='Sar' />
	<meta property='profile:username' content='Netinq' />
	<meta property='profile:gender' content='male' />

	<title><?php echo $SITE_NAME?></title>

  <meta http-equiv='content-language' content='fr'>
  
  <link rel='stylesheet' href='css/master.css'>
</head>