<?php
include("header.php");
?>
<section class="about-area ptb--110">
        <div class="container">
            <div class="row">
			
<?php
for($i=1;$i<101;$i++)
{
	?>
	<img src="../assets/img/photo/cogent (<?=$i?>).JPG" class="img-thumbnail" alt="Cinque Terre" width="386" height="236">	
	<?php
}
for($i=1;$i<26;$i++)
{
	?>
	<img src="../assets/img/photo/ssp (<?=$i?>).jpg" class="img-thumbnail" alt="Cinque Terre" width="386" height="236">	
	<?php
}
include("footer.php");
?>
</div>
</div>
</section>