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
