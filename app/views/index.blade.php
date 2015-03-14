<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>

    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/basic.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>
    
    <style>
        .wrapper {
            width: 700px;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div id="dropzone">
        {{ Form::open(array('url' => 'upload', 'class'=>'dropzone', 'id'=>'my-dropzone')) }}
        <!-- Single file upload 
        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        -->
        <!-- Multiple file upload-->
        <input type="text" value="10" name="naz" hidden>
        <div class="fallback">
            <input name="file" type="file" multiple />
        </div>
        
        {{ Form::close() }}
    </div>
</div>
<script language="javascript">
// myDropzone is the configuration for the element that has an id attribute
  // with the value my-dropzone (or myDropzone)
  Dropzone.options.myDropzone = {
    init: function() {
      this.on("addedfile", function(file) {
        var removeButton = Dropzone.createElement('<a class="dz-remove">Remove file</a>');
        var _this = this;
        removeButton.addEventListener("click", function(e) {
          e.preventDefault();
          e.stopPropagation();
           var fileInfo = new Array();
           fileInfo['name']=file.name;
            $.ajax({
                type: "POST",
                url: "{{ url('/delete-image') }}",
                data: {"file": file.name,"name": 100},
                beforeSend: function () {
                    // before send
                },
                success: function (response) {
               
                    if (response == 'success')
                       alert('deleted');
                },
                error: function () {
                    alert("error");
                }
            });
          _this.removeFile(file);
          // If you want to the delete the file on the server as well,
          // you can do the AJAX request here.
        });
        // Add the button to the file preview element.
        file.previewElement.appendChild(removeButton);
      });
    }
  };
</script>
</body>
</html>