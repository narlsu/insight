<?php $count=0;?>
<div class="row travel-contain">
<?php foreach ($travelContents as $travelPost) :?>

	
	
		
		<div class="large-3 medium-6 small-12 columns travel-div">
			<figure class="fig-cont">
				<img src="" alt="">
				<a class="home-mid-a" href="./?page=travelhighlight&amp;id=<?=$movie['id'];?>">
				
				<img src="images/poster/<?php $travelPost->poster;?>">
					<figcaption class="figcap-home">
						<?php echo $travelPost->title; ?>
					</figcaption>
				</a>
			</figure>
		</div>
	
<?php endforeach; ?>
</div>
