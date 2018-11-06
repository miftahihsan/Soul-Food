function imagePreview(){

  if(this.files && this.files[0]){

    var object = new FileReader();

    object.onload = function(data){

      var image = document.getElementById("image");
      image.src = data.target.result;
      image.style.display = "block";


    }

    object.readAsDataURL(this.files[0]);

  }

}
