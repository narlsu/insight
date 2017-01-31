<?php $count=0;?>
<div class="row travel-contain">
<?php foreach ($travelContents as $travelPost) :?>

	
	
		
		<div class="large-3 medium-6 small-12 columns travel-div">
			<figure class="fig-cont">
				<img src="" alt="">
				<a class="home-mid-a" href="./?page:travelPost&amp; id=$travelPost->id;">
					<figcaption class="figcap-home">
						<?php echo $travelPost->title; ?>
					</figcaption>
				</a>
			</figure>
		</div>
	
<?php endforeach; ?>
</div>
