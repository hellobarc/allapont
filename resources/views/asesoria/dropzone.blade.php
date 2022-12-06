<!--LINKS-->
<script src="{{asset('dropzone/dropzone.js')}}"></script>
<link rel="stylesheet" href="{{asset('dropzone/dropzone.css')}}">


<script>

Dropzone.options.dropzone  = {
addRemoveLinks: true
//acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
init: function() {
    this.on("error", function(file, message, xhr) {
       if (xhr == null) this.removeFile(file); // perhaps not remove on xhr errors
       alert(message);
    });
},
removedfile: function(file) {
    console.log(file);
            file.previewElement.remove();
}

};
</script>


<form id="upload-widget" action="{{route('asesoria.file_upload')}}" class="dropzone rad-10" style="border: solid 5px; border-style: dashed; " id="dropzone">
@csrf
    <input type="hidden" name="des">
  <div class="fallback" >
    <input name="file" type="file" multiple />
  </div>
</form>


<!--https://codepen.io/kumatechlab/pen/NWvaBKe  if need to remove link-->




