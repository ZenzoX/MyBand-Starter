var input = document.getElementById("tekst");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("Sbutton").click();
  }
});

function lookUp() {
  let search = document.getElementById('tekst');
if (search.value == "") {
  window.location.href = "/PROJ/myBand/public/search";

}else {
  window.location.href = "/PROJ/myBand/public/search/" + search.value;

}

}
