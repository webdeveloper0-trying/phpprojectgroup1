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


$(".uReport").css("display","none");
$(".uAHistory").css("display","none");
$(".DocNote").css("display","none");

$("#uAHistory").click(function(){
 
  $(".uAHistory").css("display","block");
  $(".uReport").css("display","none");
  $(".uDocNote").css("display","none");
  
  
});

$("#uReport").click(function(){
 
  $(".uReport").css("display","block");
  $(".uAHistory").css("display","none");
  $(".uDocNote").css("display","none");
  
  
});


$("#uDocNote").click(function(){
  
  $(".uDocNote").css("display","block");
  $(".uAHistory").css("display","none");
  $(".uReport").css("display","none");
  
  
  
});
