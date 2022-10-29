var img = document.getElementById("image");

function setimg() {
  let files = document.getElementById("uploadfile").files;
  if (files.length == 0) return;

  let file = files[0];
  const reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = () => {
    img.src = reader.result;
  };
}



$("#uAHistory").click(function(){
  console.log("click history");
  
  $(".uAHistory").css("display","block");
  $(".uReport").css("display","none");
  
});

$("#uReport").click(function(){
  console.log("click report");
 
  $(".uAHistory").css("display","none");
  $(".uReport").css("display","block");
  
  
});
