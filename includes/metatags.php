<?php
$query_meta = sprintf("SELECT * FROM metatags WHERE seccion = %s",
GetSQLValueString($seccion, "text"));
$meta = mysql_query($query_meta, $conn) or die(mysql_error());
$metatags = mysql_fetch_assoc($meta);

// Visitas Update
$visitas = $metatags['visitas'];
$update_visitas = $visitas + 1;

$query_Update = sprintf("UPDATE metatags SET visitas = %s WHERE seccion = %s",
GetSQLValueString($update_visitas, "int"), GetSQLValueString($seccion, "text"));
$Update = mysql_query($query_Update, $conn) or die(mysql_error());
$visitasUpdate = mysql_fetch_assoc($Update);
?>
<!-- meta tags -->
<meta name="description" content="<?php echo $metatags['description'];?>"/>
<meta name="robots" content="INDEX/FOLLOW"/>
<link rel="canonical" href="<?php echo $url;?><?php echo $metatags['url'];?>" />
<meta property="og:locale" content="es_MX" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $metatags['title'];?> - <?php echo $title;?>" />
<meta property="og:description" content="<?php echo $metatags['description'];?>" />
<meta property="og:url" content="<?php echo $url;?><?php echo $metatags['url'];?>" />
<meta property="og:site_name" content="<?php echo $metatags['title'];?> - <?php echo $title;?>" />
<meta property="og:image" content="<?php echo $url;?><?php echo $metatags['image'];?>" />
<meta property="og:image:width" content="1080" />
<meta property="og:image:height" content="1080" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="<?php echo $metatags['description'];?>" />
<meta name="twitter:title" content="<?php echo $metatags['title'];?> - <?php echo $title;?>" />
<meta name="twitter:site" content="@MontseMorenaBC" />
<meta name="twitter:image" content="<?php echo $url;?><?php echo $metatags['url'];?>" />
<meta name="twitter:creator" content="@MontseMorenaBC" />
