<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <link type="text/css" href="cke/sample/css/sample.css" rel="stylesheet" media="screen" />
</head>
<body>

<form action="mail.php" enctype="multipart/form-data" method="POST">
<input type="text" class="form-control" name="email" placeholder="Email">
<input type="text" class="form-control" name="tieude" placeholder="ten">
<textarea name="content" id="editor" class="form-control"></textarea>
<input type="file" class="form-control" name="file"  >
<button type="submit" class="btn btn-primary">Gửi</button>
 
<script src="cke/ckeditor.js"></script>
<!-- <script>
	CKEDITOR.replace('editor');
</script> -->

<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			// toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( err => {
			console.error( err.stack );
		} );
</script>

</body>

</html>
