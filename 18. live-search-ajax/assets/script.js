let keyword = document.getElementById("keyword");
let searchBtn = document.getElementById("search-btn");
let container = document.getElementById("container");

keyword.addEventListener("keyup", function () {
  // buat objek ajax
  var xhr = new XMLHttpRequest();

  // cek kesaiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "assets/ajax/test.php?keyword=" + keyword.value, true);
  xhr.send();
});
