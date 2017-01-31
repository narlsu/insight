<?php
namespace App\Controllers;

// use App\Views\MoviesView;
// use App\Models\MoviesModel;
// use App\Views\FeaturedMovieView;
// use App\Views\MovieCreateView;
// use App\Models\CommentsModel;
use App\Models\TravelsModel;

Class TravelsController
{
	public function newPost() {
            
        
        $travelPost = new TravelsModel($_POST);

        if(! $travelPost->isValid()){
            $_SESSION['error.post'] = $travelPost;
            header("Location:./?page=account&error=true");
            exit();
        }
        if ($_FILES['poster']['error'] === UPLOAD_ERR_OK) {
            $travelPost->savePoster($_FILES['poster']['tmp_name']);
        }

        unset($_SESSION['error.post']);
        $travelPost->save(); 
        header("Location:./?page=home". $post->id);


        // Validation

        // If good validation

        // Upload the file, make thumbnail too

        // PostModel

        // Redirect to home page
        



    }

    public function showAll(){

	$movies = new TravelsModel();
	$travelContents = $movies->showAll();
	$view = new HomeView(compact('travelContents'));
    $view->render();

	}

    public function getPostData($id = null){

			if(isset($_SESSION['error.post'])){
			$travelPost = $_SESSION['error.post'];
			// unset($_SESSION['error.post']);

			} else {
			$travelPost = new TravelsModel($id);
		}
		return $travelPost;
    }
	// public function showAll(){

	// 	$movies = new MoviesModel();
	// 	$moviesList = $movies->showAll();

	// 	$view = new MoviesView(compact('moviesList'));
 //     	$view->render();
	// }

	// public function showFeaturedMovie(){
	// 	$featuredmovie = new MoviesModel($_GET['id']);
	// 	$comments = new CommentsModel();
	// 	$allComments = $comments->getAllComments($_GET['id']);
	
	// 	$newcomment = $this->getErrorComment();

	// 	$view = new FeaturedMovieView(compact('featuredmovie', 'allComments', 'newcomment'));
	// 	$view->render();
	// }
	// public function create(){

	// 	$editMovie = $this->getFormData();

	// 	$view = new MovieCreateView(compact('editMovie'));
	// 	$view->render();

	// }
	// public function store(){
	// 	$movie = new MoviesModel($_POST);

	// 	if(! $movie->isValid()){
	// 		$_SESSION['error.movie'] = $movie;
	// 		header("Location:./?page=movie.create");
	// 		exit();
	// 	}

	// 	if ($_FILES['poster']['error'] === UPLOAD_ERR_OK) {
	// 		$movie->savePoster($_FILES['poster']['tmp_name']);
	// 	}
		
	// 	$movie->save();	
	// 	header("Location:./?page=featuredmovie&id=". $movie->id);

	// }
	// public function edit() {
	// 	$editMovie = $this->getFormData($_GET['id']);
	// 	$view = new MovieCreateView(compact('editMovie'));
	// 	$view->render();

	// }
	// public function storeComments () {
	// 	$input = $_POST;
	// 	$input['user_id'] = $_SESSION['user_id'];
	// 	$comment = new CommentsModel($input);
	// 	if(! $comment->isValid()){
	// 		$_SESSION['error.comment'] = $comment;
	// 		header("location:./?page=featuredmovie&id=". $comment->movie_id .'#comment');
	// 		exit();
	// 	}
	// 	$comment->save();
	// 	header('Location:./?page=featuredmovie&id='.$comment->movie_id.'#comment');
	
	// }
	// public function update(){
		
	// 	$movie = new MoviesModel($_POST);
	// 	if(! $movie->isValid()){
	// 		$_SESSION['error.movie'] = $movie;
	// 		header("Location:./?page=movie.edit&id=" . $movie->id);
	// 		exit();
	// 	}

	// 	if($_FILES['poster']['error'] === UPLOAD_ERR_OK){
	// 		$movie->savePoster($_FILES['poster']['tmp_name']);
	// 	} elseif(isset($_POST['removeImage']) && $_POST['removeImage'] === "true") {
	// 		$movie->poster = null;
	// 	}
	// 	$movie->update();
	// 	header("Location:./?page=featuredmovie&id=".$movie->id);
	// }

	// public function delete() {
	// 	$movieID = isset($_GET['id']) ? $_GET['id'] : null;
	// 	MoviesModel::destroy($movieID);
	// 	header("Location:./?page=movies");
	// }
	// // public function getFormData($id){
	// // 	$movie = new MoviesModel($id);
	// // 	return $movie;
	// // }
	// public function getErrorComment(){
	// 	if(isset($_SESSION['error.comment'])){
	// 		$newcomment = $_SESSION['error.comment'];
	
	// 		unset($_SESSION['error.comment']);
	// 	} else {
	// 		$newcomment = new CommentsModel();
	// 	}
	// 	return $newcomment;
	// }
	// public function getFormData($id = null){
	// 		if(isset($_SESSION['error.movie'])){
	// 		$editMovie = $_SESSION['error.movie'];
	
	// 		unset($_SESSION['error.movie']);
	// 	} else {
	// 		$editMovie = new MoviesModel($id);
	// 	}
	// 	return $editMovie;
	// }
}















