  



      <div class="row">
        <div class="">

          <?php if($_SESSION['privilege'] == 'admin' ): ?>
			<div class="large-10">
			
	            <h2>Welcome to the Admin page<h2>

				<p><a data-open="super-modal">Blog Editor</a></p>

				<div class="reveal large-12" id="super-modal" data-reveal>
				<form action="./?page=travels.newPost" method="post" enctype="multipart/form-data">
				  <h1>Welcome to the blog editor</h1>

				  <label for="title">Title</label>
				  <input id="title" type="text" name="title">

				<span class="error-color"><?php echo $travelPost->errors['title']?></span>
					
				  <label for="description">Description</label>
				  <input type="text" id="description" name="description">

				<span class="error-color"><?php echo $travelPost->errors['description']?></span>

				  <label for="poster" >Image Upload</label>
				  <input type="file" id="poster" name="poster">

				<span class="error-color"><?php echo $travelPost->errors['poster']?></span>
				  
				  <div class="row">
				  	<fieldset class="large-12 medium-12 columns">

              			<input class="button" type="submit" name="login" value="Submit">
                
              		</fieldset>
          		  </div>
          	</form>

				  <button class="close-button" data-close aria-label="Close reveal" type="button">
				  <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			</div>
          <?php endif; ?>

        </div>
      </div>



         
