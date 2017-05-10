<body>
<div class="site-wrapper">
<div class="site-wrapper-inner">
<div class="cover-container">
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo $title; ?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Ranking Mundial</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='page_1.php'){?> class="active" <?php };?>><a href="page_1.php">Ranking Mundial</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='page_2.php'){?> class="active" <?php };?>><a href="page_2.php">Ranking en Chile</a></li>
</ul>
</nav>
</div>
</div>
<?php
$csv = array_map('str_getcsv', file('data/13-estados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>
