<?php 

if ( $pub = $_GET["p"] )
{
	if  ( $pub[0]=='B' && $pub[1]=='C' ) { $cat = 'Book Chapters'; }
	elseif ( $pub[0]=='B' ) { $cat = 'Books and Monographs'; }
	elseif ( $pub[0]=='R' ) { $cat = 'Review Articles'; }
	elseif ( $pub[0]=='A' ) { $cat = 'Peer-Reviewed Articles'; }
	elseif ( $pub[0]=='C' ) { $cat = 'Conference Papers'; }
	elseif ( $pub[0]=='P' ) { $cat = 'Preprints'; }
	else { die( header("Location:../publications.php" ) ); }
  $page = $cat . '/' . $pub . '/' . $pub . '.php';
}
else 
{
	die( header("Location:../publications.php" ) );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="title" content="Michelle Rudolph-Lilith Research" />
<meta name="author" content="Michelle Rudolph-Lilith" />
<meta name="description" content="Michelle Rudolph-Lilith Research Page." />
<meta name="keywords" content="science, research, physics, theoretical physics, mathematical physics, mathematics, number theory, graph theory, neuroscience, theoretical neuroscience, CNRS, UNIC" />
<link rel="icon" type="image/png" href="../img/favicon.ico">

<title>Dr. Michelle Rudolph-Lilith - <?php echo $cat; ?></title>
 
<!-- ================================================================================================== -->
<!-- styles                                                                                             -->
<!-- ================================================================================================== -->

<link rel="stylesheet" href="../css/main.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Varela+Round:normal,400"/>

<!-- ================================================================================================== -->
<!-- scripts                                                                                            -->
<!-- ================================================================================================== -->

<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lte IE 7]>
  <script src="js/IE8.js" type="text/javascript"></script><![endif]-->
<!--[if lt IE 7]>
  <link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->

<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
  });
</script>
<script type="text/javascript" src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>

<script type="text/javascript" src="../js/Hyphenator.js" language="JavaScript" ></script>

</head>
 
<body>

<!-- ================================================================================================== -->
<!-- content                                                                                            -->
<!-- ================================================================================================== --> 

<div class="wrapper">

<!-- header =========================================================================================== -->

<header>
  
  <div id="logo"><img src="../img/zeta.png" border="0"></div>
  <div id="name">Dr. Michelle Rudolph-Lilith</div>
  <div id="fields">THEORETICAL PHYSICS &bull; MATHEMATICS &bull; THEORETICAL NEUROSCIENCE</div>

</header>

<!-- nav ============================================================================================== -->

<nav>

  <ul id="navlist">
    <li><a href="../index.php">HOME</a></li>
    <li><a href="../about.php">ABOUT</a></li>
    <li><a href="../publications.php" class="active">PUBLICATIONS</a></li>
    <li><a href="../contact.php">CONTACT</a></li>
 </ul>

</nav>

<!-- main ============================================================================================= -->
   
<main>
  
<?php include_once($page); ?>  

</main>

</div><!-- wrapper -->

<!-- footer =========================================================================================== -->

<footer>

  <div id="copyright"><?php include_once("../copyright.txt"); ?></div>

</footer>
 
</body>
</html>
