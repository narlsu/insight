  



      <div class="row">
        <div class="">

          <?php if($_SESSION['privilege'] == 'admin' ): ?>
			<div class="large-10">
			
	            <h2>Welcome to the Admin page<h2>

				<p><a data-open="super-modal">Blog Editor</a></p>

				<div class="reveal background-travel large-12" id="super-modal" data-reveal>
				<form action="./?page=travels.newPost" method="post" enctype="multipart/form-data">
				  <h1 class="cent-h1">Welcome to the blog editor</h1>

				<div class="row large-6 medium-10 small-12">
				  <label class="white" for="title">Title</label>
				  <input id="title" type="text" name="title">
				

					<span class="error-color"><?php echo $travelPost->errors['title']?></span>
				</div>

				<div class="row large-6 medium-10 small-12">
				  <label class="white" for="description">Description</label>
				  <input type="text" id="description" name="description">

					<span class="error-color"><?php echo $travelPost->errors['description']?></span>
				</div>
				<div class="row large-6 medium-10 small-12">
				  <label class="white" for="poster" >Image Upload</label>
				  <input class="white" type="file" id="poster" name="poster">

				<span class="error-color"><?php echo $travelPost->errors['poster']?></span>
				</div> 
				  <div class="row flex-parent">
				  	

              			<input class="button flex-child" type="submit" name="login" value="Submit">
                

          		  </div>
          	</form>

				  <button class="close-button submit-but" data-close aria-label="Close reveal" type="button">
				  <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
          <?php endif; ?>

        </div>
      </div>



         
