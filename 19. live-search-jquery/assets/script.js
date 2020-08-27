$(document).ready(function () {
  $("#keyword").on("keyup", function () {
    $("#container").load("assets/ajax/test.php?keyword=" + $("#keyword").val());
  });
});
