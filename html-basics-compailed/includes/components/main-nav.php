
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="#courses">Course Details</a>
  <a href="#news">Latest News</a>
  <a href="#events">Upcoming Events</a>
  <a href="Contact.php">Contact-Us</a>
  <a href="#about">About</a>
  <a href="#reviews">Reviews</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

