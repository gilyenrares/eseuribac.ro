<!DOCTYPE html>
<html lang="ro">
<head>
	<title>UMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body class="bg-black">
	<!-- Navigation -->
<?php 
include 'sections/dark-navigation.sec.php'; 
?>
<!-- Main body content -->
<div class="mx-5 mt-5 bg-dark">
	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
		<h1 class="display-4 text-center">Eseuri Bac - User Management System</h1>
	</div>
</div>

<!-- UMS nav bar -->
<div class="btn-group ml-5" role="group" aria-label="Toolbar">
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">Users</button>
	<!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#lesson" aria-expanded="false" aria-controls="lesson">Lesson</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#variant" aria-expanded="false" aria-controls="variant">Variant</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#fact" aria-expanded="false" aria-controls="fact">Fact</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#open" aria-expanded="false" aria-controls="open">Open</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#simulator" aria-expanded="false" aria-controls="simulator">Simulator</button>	 -->
</div>

<!-- Acordion interface -->
<div class="accordion" id="interfaceU">

<!-- User interface -->
	<div class="card m-5 bg-dark collapse show" id="users" data-parent="#interfaceU">
		<div class="shadow-lg border-top border-danger text-white p-3 rounded">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Account Type</th>
            <th scope="col">Rep points</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Joined</th>
            <th scope="col">Status</th>
            <th scope="col" style="width: 27%" >Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'includes/get-users.inc.php';?> 
        </tbody>
      </table>
		</div>
	</div>

<!-- New Lesson Interface -->
	<div class="card m-5 bg-dark collapse" id="lesson" aria-labelledby="editLesson" data-parent="#interface">
	    <div class="shadow-lg border-top border-danger text-white p-3 rounded">
	  		<form action="includes/new-lesson.inc.php" method="post">
			<div class="row">
				<div class="col form-group">
					<label for="LessonName">Lesson Name</label>
				    <input type="text" name="lessonName" class="form-control" id="LessonName" aria-describedby="noteLN" placeholder="Enter name" required="required">
				    <small id="noteLN" class="form-text text-muted">Enter lesson name into this field.</small>
				</div>
				<div class="col form-group">
					<label for="LessonChapter">Lesson Chapter</label>
				    <input type="text" name="lessonChapter" class="form-control" id="LessonChapter" aria-describedby="noteLC" placeholder="Enter subject" required="required">
				    <small id="noteLC" class="form-text text-muted">Enter lesson chapter (capitol) into this field.</small>
				</div>
			</div>
			<div class="row">
				<div class="col form-group">
					<?php include 'includes/get-class.inc.php'; ?>
				</div>
				<div class="col form-group">
					<?php include 'includes/get-subject.inc.php'; ?>
				</div>
			</div>
			<div class="form-group">
				<label for="LessonContent">Lesson Content</label>
			    <textarea rows="50" type="text" name="lessonContent" class="form-control" id="LessonContent" aria-describedby="noteLCo" placeholder="Enter main body text" required="required"></textarea>
			    <small id="noteLCo" class="form-text text-muted">Enter the main body of the lesson.</small>
			    <button type="button" class="btn btn-primary mt-3" id="addTagsLesson" aria-describedby="noteAT" >Add Tags</button>
			    <small id="noteAT" class="form-text text-muted">Use this to add paragraph tags.</small>
			</div>
			<div class="row">
				<div class="col form-group">
					<label for="Lesson Author">Lesson Author</label>
				    <input type="text" name="lessonAuthor" class="form-control" id="Lesson Author" aria-describedby="noteEA" placeholder="Enter author's name" required="required" >
				    <small id="noteEA" class="form-text text-muted">Author of this lesson.</small>
				</div>
					<div class="col mt-3">
						<button type="submit" name="lesson-submit" class="mt-3 btn btn-primary">Upload Lesson</button>
					</div>
			</div>
		</form>
	  	</div> 
	</div>

<!-- New Variant Interface -->
	<div class="card m-5 bg-dark collapse" id="variant" aria-labelledby="editVariant" data-parent="#interface">
	    <div class="shadow-lg border-top border-danger text-white p-3 rounded">
	  		<form action="includes/new-variant.inc.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col form-group">
					<label for="RootFolder">Root Folder</label>
				    <input type="text" name="rootFolder" readonly="readonly" class="form-control" id="RootFolder" value="documents" aria-describedby="noteRF">
				    <small id="noteRF" class="form-text text-muted">This field is read only.</small>
				</div>
				<div class="col form-group">
					<?php include 'includes/get-subject.inc.php'; ?>
				</div>
				<div class="col form-group">
					<?php include 'includes/get-year.inc.php'; ?>
				</div>
				<div class="col form-group">
					<label for="VariantSpecial">Variant Special:</label>
				    <input type="text" name="variantSpecial" class="form-control" id="VariantSpecial" aria-describedby="noteVS" placeholder="Enter special category">
				    <small id="noteVS" class="form-text text-muted">Enter variant Special category (ex: m1, m2, modele mecanica) into this field.</small>
				</div>
				<div class="col form-group">
					<label for="VariantType">Variant Type</label>
    				<select class="form-control" name="variantType" id="VariantType" aria-describedby="noteVN" placeholder="Select type" required="required">
				      <option value="Variantă">Variantă</option>
				      <option value="Barem">Barem</option>
				    </select>
				    <small id="noteVN" class="form-text text-muted">Enter variant Type into this field.</small>
				</div>
			</div>
		<div class="row">
			<div class="col mt-3 ml-3 custom-file">
				<input type="file" name="file" class="custom-file-input" id="validatedCustomFile" required="required">
				<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
				<div class="invalid-feedback">Invalid file.</div>
			</div>
			<div class="col">
				<button type="submit" name="variant-submit" class="mt-3 btn btn-primary">Upload Variant</button>
			</div>
		</div>
		</form>
	  	</div> 
	</div>

<!-- New Fact Interface -->
	<div class="card m-5 bg-dark collapse" id="fact" aria-labelledby="editFact" data-parent="#interface">
	    <div class="shadow-lg border-top border-danger text-white p-3 rounded">
	  		<form action="includes/new-fact.inc.php" method="post">
			<div class="row">
				<div class="col form-group">
					<label for="FactImage">Fact Image</label>
				  <input type="text" name="factImage" class="form-control" id="FactImage" aria-describedby="noteFI" placeholder="Enter image location" required="required">
				  <small id="noteFI" class="form-text text-muted">Enter fact image location into this field.</small>
					<label for="FactTitle">Fact Title</label>
				  <input type="text" name="factTitle" class="form-control" id="FactTitle" aria-describedby="noteFT" placeholder="Enter name" required="required">
				  <small id="noteFT" class="form-text text-muted">Enter fact title into this field.</small>
				</div>
				<div class="col form-group">
					<?php include 'includes/get-subject.inc.php'; ?>
				</div>
			</div>
			<div class="form-group">
				<label for="FactContent">Fact Content</label>
			    <textarea rows="20" type="text" name="factContent" class="form-control" id="FactContent" aria-describedby="noteFCo" placeholder="Enter main body text" required="required"></textarea>
			    <small id="noteFCo" class="form-text text-muted">Enter the main body of the fact.</small>
			    <button type="button" class="btn btn-primary mt-3" id="addTagsFact" aria-describedby="noteAT" >Add Tags</button>
			    <small id="noteAT" class="form-text text-muted">Use this to add paragraph tags.</small>
			</div>
			<div class="row">
				<div class="col form-group">
					<label for="Fact Author">Fact Author</label>
				    <input type="text" name="factAuthor" value="<?php echo$nickname; ?>" class="form-control" id="Fact Author" placeholder="Enter author's name" required="required" >
				</div>
					<div class="col mt-3">
						<button type="submit" name="fact-submit" class="mt-3 btn btn-primary">Upload Fact</button>
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

<!-- Simulator interface -->
	<div class="card m-5 bg-dark collapse" id="simulator" aria-labelledby="openEssay" data-parent="#interface">
	  	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
			<button class="btn btn-lg btn-primary btn-block mb-3" type="submit" form="simulatorForm" value="Submit">Simulate</button>
			<div class="row">
				<div class="col-6">
					<form class="form-group" id="simulatorForm" name="Simulator" action="simulator.php" target="view" method="post">
						<label for="SimulatorContent">Html Code</label>
						<textarea rows="50" type="text" name="code" class="form-control" id="SimulatorContent" aria-describedby="noteSHC" placeholder="Enter the code here" required="required"></textarea>
						<small id="noteSHC" class="form-text text-muted">Enter the main body of the document with Html tags.</small>
					</form>
				</div>
				<div class="col-6">
					<label for="simulatorView">Html Page</label>
					<iframe class="rounded" width="100%" height="1213" frameborder="0" src="simulator.php" name="view" id="simulatorView" aria-describedby="noteSHP"> </iframe>
					<small id="noteSHP" class="form-text text-muted">Enter the main body of the document with Html tags.</small>
				</div>
			</div>
	  	</div> 
	</div>


</div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
<!-- Scripts -->
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

$('#addTagsEssay').click(
  function() {
    var input_text = $('#EssayContent').val();
    var output_text = Add_paragraph_tags(input_text);
    $('#EssayContent').val(output_text);
  });
$('#addTagsLesson').click(
  function() {
    var input_text = $('#LessonContent').val();
    var output_text = Add_paragraph_tags(input_text);
    $('#LessonContent').val(output_text);
  });
	$('#addTagsFact').click(
  function() {
    var input_text = $('#FactContent').val();
    var output_text = Add_paragraph_tags(input_text);
    $('#FactContent').val(output_text);
  });
</script>
</html>