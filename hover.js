{/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   */}
        $(document).ready(function () {

$(".btn").hover(function () {
  $(".login").css("display", "block");
  $(".login").css("position", "absolute");
}, function () {
  $(".login").css("display", "none");
  // $(".login").css("position", "absolute");
});

$(".login").hover(function () {
  $(this).css("display", "block");
}, function () {
  $(this).css("display", "none");
});


$(".btn1").hover(function () {
  $(".signup").css("display", "block");
  $(".signup").css("position", "absolute");
}, function () {
  $(".signup").css("display", "none");
  // $(".signup").css("position", "absolute");
});

$(".signup").hover(function () {
  $(this).css("display", "block");
}, function () {
  $(this).css("display", "none");
});




});
 