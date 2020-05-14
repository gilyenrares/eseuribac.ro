<!DOCTYPE html>
<html lang="ro">
<head>
	<title>EMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body class="bg-black">
	<!-- Navigation -->
<?php 
include 'sections/dark-navigation.sec.php'; 
$const='Admin';
$essayAuthor = $_SESSION['userName'];
$acTy= $_SESSION['accType'];
if (!($acTy === $const)) {
	header('Location: index.php?error=unauthorised');
} ?>
<!-- Main body content -->
<div class="mx-5 mt-5 bg-dark">
	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
		<h1 class="display-4 text-center">Eseuri Bac - Essay Management System</h1>
	</div>
</div>

<!-- EMS nav bar -->
<div class="btn-group ml-5" role="group" aria-label="Toolbar">
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#new" aria-expanded="true" aria-controls="new">New</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#open" aria-expanded="false" aria-controls="open">Open</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#edit" aria-expanded="false" aria-controls="edit">Edit</button>
</div>

<!-- Acordion interface -->
<div class="accordion" id="interface">

<!-- New Essay interface -->
	<div class="card m-5 bg-dark collapse show" id="new" area-labelledby="newEssay" data-parent="#interface">
		<div class="shadow-lg border-top border-danger text-white p-3 rounded">
			<form action="includes/ems.inc.php" method="post">
			<div class="row">
				<div class="col form-group">
					<label for="EssayName">Essay Name</label>
				    <input type="text" name="essayName" class="form-control" id="EssayName" aria-describedby="noteEN" placeholder="Enter name" required="required">
				    <small id="noteEN" class="form-text text-muted">Enter essay name into this field.</small>
				</div>
				<div class="col form-group">
					<label for="EssaySubject">Essay Subject</label>
				    <input type="text" name="essaySubject" class="form-control" id="EssaySubject" aria-describedby="noteES" placeholder="Enter subject" required="required">
				    <small id="noteES" class="form-text text-muted">Enter essay subject(materie) into this field.</small>
				</div>
			</div>
			<div class="row">
				<div class="col form-group">
					<label for="EssayCategory">Essay Category</label>
				    <input type="text" name="essayCategory" class="form-control" id="EssayCategory" aria-describedby="noteECa" placeholder="Enter category" required="required">
				    <small id="noteECa" class="form-text text-muted">Enter the main category in which this essay will be added.</small>
				</div>
				<div class="col form-group">
					<label for="EssaySubCategory">Essay SubCategory</label>
				    <input type="text" name="essaySubCategory" class="form-control" id="EssaySubCategory" aria-describedby="noteESC" placeholder="Enter subcategory" required="required">
				    <small id="noteESC" class="form-text text-muted">Enter the  subcategory in which this essay will be added.</small>
				</div>
			</div>
			<div class="form-group">
				<label for="EssayContent">Essay Content</label>
			    <textarea rows="50" type="text" name="essayContent" class="form-control" id="EssayContent" aria-describedby="noteECo" placeholder="Enter main body text" required="required"></textarea>
			    <small id="noteECo" class="form-text text-muted">Enter the main body of the essay.</small>
			    <button type="button" class="btn btn-primary mt-3" id="addTags" aria-describedby="noteAT" >Add Tags</button>
			    <small id="noteAT" class="form-text text-muted">Use this to add paragraph tags.</small>
			</div>
			<div class="row">
				<div class="col form-group">
					<label for="Essay Author">Essay Author</label>
				    <input type="text" name="essayAuthor" class="form-control" id="Essay Author" aria-describedby="noteEA" placeholder="Enter author's name" required="required"  value="<?php echo $essayAuthor; ?>">
				    <small id="noteEA" class="form-text text-muted">Author of this essay.</small>
				</div>
					<div class="col mt-3">
						<button type="submit" name="essay-submit" class="mt-3 btn btn-primary">Upload Essay</button>
					</div>
			</div>
		</form>
		</div>
	</div>

<!-- open Essay interface -->
	<div class="card m-5 bg-dark collapse" id="open" aria-labelledby="openEssay" data-parent="#interface">
	  	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
	  		<?php include 'includes/ems-open.inc.php'; ?>
	  	</div> 
	</div>

<!-- Edit Essay Interface -->
	<div class="card m-5 bg-dark collapse" id="edit" aria-labelledby="editEssay" data-parent="#interface">
	    <div class="shadow-lg border-top border-danger text-white p-3 rounded">
	  		<textarea id="input">
This line should have paragraph tags.

<pre>This is code and does not need paragraph tags</pre>

<em>This line should have paragraph tags.</em>

<h1>This is a header and it does not need paragraph tags</h1>

<blockquote>This is a blockquote. This line needs a paragraph tag.

Paragraph tags are needed here too.</blockquote>

<ul>
<li>This is a list item. It does not need a paragraph tag</li>
</ul>

</textarea>

<textarea id="output"></textarea>

<button type="button">Add paragraph tags</button>
	  	</div> 
	</div>

</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
function Add_paragraph_tags(input_text) {
  var lines = input_text.split("\n");
  line_is_inside_code_block = false;
  line_is_inside_pre_block = false;
  line_is_inside_table = false;
  lines.forEach(function(line, index) {
    if (line == '' || line.startsWith('<h') || line.startsWith('<p') || line.startsWith('<img') || line.startsWith('<pre') || line.startsWith('<code') || line.startsWith('<table') || line.startsWith('<li>') || line.startsWith('<ol>') || line.startsWith('</ol>') || line.startsWith('<ul>') || line.startsWith('</ul>')|| line_is_inside_code_block || line_is_inside_pre_block || line_is_inside_table) {} else {
      lines[index] = '<p>' + line + '</p>';
      lines[index] = lines[index].replace('<p><blockquote>', '<blockquote><p>');
      lines[index] = lines[index].replace('</blockquote></p>', '</p></blockquote>');
    }
    if (line.endsWith('</code>')) {
      line_is_inside_code_block = false;
    } else if (line.endsWith('</pre>')) {
      line_is_inside_pre_block = false;
    } else if (line.endsWith('</table>')) {
      line_is_inside_table = false;
    } else if (line.startsWith('<code')) {
      line_is_inside_code_block = true;
    } else if (line.startsWith('<pre')) {
      line_is_inside_pre_block = true;
    } else if (line.startsWith('<table')) {
      line_is_inside_table = true;
    }
  });
  var new_text = lines.join('\n');
  return new_text;
}

$('#addTags').click(
  function() {
    var input_text = $('#EssayContent').val();
    var output_text = Add_paragraph_tags(input_text);
    $('#EssayContent').val(output_text);
  });
</script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>