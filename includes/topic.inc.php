<?php 
require 'dbh.inc.php';
$catId = mysqli_real_escape_string($conn, $_GET['catId']);
$subcatId = mysqli_real_escape_string($conn, $_GET['subcatId']);
$subcatName = mysqli_real_escape_string($conn, $_GET['subcatName']);

if (isset($_SESSION['userId'])) {
    echo '<h2 class="text-center text-white w-100">Topic - '.$subcatName.'</h2>';
      		include'sections/topic-modal.sec.php';
      		echo '<div class="my-2">
      		<button type="button" class="btn btn-success w-100 h-100" data-toggle="modal" data-target="#topicModal">
      		<img src="images/plus.png" height="50" width="50" alt="Eseuribac.ro logo"><br>
      		Crează un topic nou</button> </div>';	
}
else {
	echo '<h2 class="text-center text-white w-100">Topic - '.$subcatName.'</h2>
  <div class="alert alert-info alert-dismissible fade show text-center" role="alert">Trebuie să te loghezi pentru a putea posta topicuri
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
}
addView($subcatId);
echo topics($catId, $subcatId);

// author(id)
function author($id) {
  require 'dbh.inc.php';
  $userId = $id;
  $sql = "SELECT * FROM users WHERE userId='$userId';";
  $results =mysqli_query($conn, $sql);
  $resultsCheck = mysqli_num_rows($results);
  if ($resultsCheck >0) {
    while ($userData = mysqli_fetch_assoc($results)) {
      return ''.$userData["userName"].' (<cite title="Rank">'.$userData["accType"].'</cite>) - Rep('.$userData["repPoints"].')';   
    }
  } else {
    return 'Autorul este de negasit';
  }
}

//commentsNo(topicId)
function commentsNo($topic) {
  require 'dbh.inc.php';
  $topicId = $topic;
  $sql = "SELECT * FROM comments WHERE commentTopic='$topicId';";
  $results = mysqli_query($conn, $sql);
  return mysqli_num_rows($results);
}

//repliesNo(comentId)
function repliesNo($comment) {
  require 'dbh.inc.php';
  $commentId = $comment;
  $sql = "SELECT * FROM replies WHERE commentId='$commentId';";
  $results = mysqli_query($conn, $sql);
  return mysqli_num_rows($results);
}

function addView($subcategory) {
  require 'dbh.inc.php';
  $subcategoryId = $subcategory;  
  $viewSql = "SELECT subcategoryViews FROM subcategory WHERE subcategoryId='$subcategoryId';";
  $results = mysqli_query($conn, $viewSql);
  while ($views = mysqli_fetch_assoc($results)) {
    $newViews = 1 + $views["subcategoryViews"];
  }
  $sql = "UPDATE subcategory SET subcategoryViews='$newViews' WHERE subcategoryId ='$subcategoryId'";
  mysqli_query($conn, $sql);
}

//topics(categoryId,subcategoryId)
function topics($category, $subcategory) {
  require 'dbh.inc.php';
  $categoryId = $category;
  $subcategoryId = $subcategory;
  $sql = "SELECT * FROM topics WHERE topicCat='$categoryId' AND topicSubcategory='$subcategoryId';";
  $results = mysqli_query($conn, $sql);
  $resultsCheck = mysqli_num_rows($results);
  if ($resultsCheck > 0) {
    $output= '';
    while ($topicData = mysqli_fetch_assoc($results)) {
      $output.='<div class="card w-100 my-2">
              <div class="card-header bg-primary text-center text-white"><h3>'.$topicData["topicName"].'</h3></div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>'.$topicData["topicDescription"].'</p>
                  <footer class="blockquote-footer">'.author($topicData["topicAuthor"]).'- Postat în: '.$topicData["topicDate"].'</footer>
                </blockquote>
              </div>
              <div class="card-footer bg-dark">';
      if (isset($_SESSION['userId'])) {
        $topicId = $topicData['topicId'];
        $output.= '<form class="form-inline mb-2" action="includes/new-comment.inc.php" method="post" >
                    <div class="form-group col-sm-10">
                      <input type="hidden" name="topicId" value="'.$topicId.'">
                      <input type="text" name="comment" class="form-control w-100" placeholder="Comentariul tău ..." required="required">
                    </div>
                      <button type="submit" name="new-comment-submit" class="btn btn-primary" data-toggle="modal" data-target="#errorsystem">Comentează</button>
                  </form>';
      }
      $output .=' <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseComments'.$topicData["topicId"].'" aria-expanded="false" aria-controls="collapseComments">Comentarii
                  <span class="badge badge-light">'.commentsNo($topicData["topicId"]).'</span>
                  <span class="sr-only">numarul de comentari</span>
                  </button>
                  <div class="collapse" id="collapseComments'.$topicData["topicId"].'">'.comments($topicData["topicId"]).'</div>
              </div>
            </div>';
    }
    return $output;
  }
  else {
    echo '<h3 class="text-center w-100">Momentan nu există nici un topic creat în această secțiune.</h3>';
  } 
}

//comments(topicId)
function comments($topic) {
  require 'dbh.inc.php';
  $topicId = $topic;
  $sql = "SELECT * FROM comments WHERE commentTopic='$topicId';";
  $results = mysqli_query($conn, $sql);
  $resultsCheck = mysqli_num_rows($results);
   if ($resultsCheck > 0) {
    $output = '';
    while ($commentData = mysqli_fetch_assoc($results)) {
      $commentId =$commentData["commentId"];
      $output .= '<div class="card w-100 my-2">
                    <div class="card-header bg-info">'.author($commentData["commentAuthor"]).'</div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                      <p>'.$commentData["commentContent"].'</p>
                      <footer class="blockquote-footer">Postat în: '.$commentData["commentDate"].'</footer>
                      </blockquote>
                    </div>
                    <div class="card-footer bg-secondary">';
      if (isset($_SESSION['userId'])) {
        $output.= '<form class="form-inline mb-2" action="includes/new-reply.inc.php" method="post" >
                    <div class="form-group col-sm-10">
                      <input type="hidden" name="commentId" value="'.$commentId.'">
                      <input type="text" name="reply" class="form-control w-100" placeholder="Răspunsul tău ..." required="required">
                    </div>
                      <button type="submit" name="new-reply-submit" class="btn btn-primary" data-toggle="modal" data-target="#errorsystem">Răspunde</button>
                  </form>';
      }
      $output .= '<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseReplies'.$commentId.'" aria-expanded="false" aria-controls="collapseComments">Raspunsuri
                      <span class="badge badge-light">'.repliesNo($commentData["commentId"]).'</span>
                      <span class="sr-only">numarul de raspunsurii</span>
                      </button>
                      <div class="collapse" id="collapseReplies'.$commentId.'">'.replies($commentId).'</div>
                    </div>
                  </div>';    
    } 
    return $output; 
  } else {
    return 'Comentariu de negasit';
  }
}

//replies(commentId)
function replies($comment) {
  require 'dbh.inc.php';
  $commentId = $comment;
  $sql = "SELECT * FROM replies WHERE commentId='$commentId';";
  $results = mysqli_query($conn, $sql);
  $resultsCheck = mysqli_num_rows($results);
  if ($resultsCheck > 0) {
    $output = '';
    while ($replyData = mysqli_fetch_assoc($results)) {
      $output .= '<div class="card w-100 my-2">
                  <div class="card-header">'.author($replyData["replyAuthor"]).'</div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0">
                      <p>'.$replyData["replyContent"].'</p>
                      <footer class="blockquote-footer">Postat în: '.$replyData["replyDate"].'</footer>
                    </blockquote>
                  </div>
                </div>';
    }
    return $output;
  } else {
    return 'Raspuns de negasit';
  }
}
 ?>
