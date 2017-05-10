<?php include('header.php');?>
<div class="inner cover">
<h2 class="cover-heading">Ranking Mundial/h2>

<?php for($n=0; $n<14; $n++){?>
  <?php echo $csv[$n]["state"] ;?>, <?php echo $csv[$n]["clinton"] ;?><br>
<?php };?>

</div>
<?php include('footer.php');?>
