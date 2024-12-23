<?php
      include('config.php');    
	  session_start();	  
	  if (!$_SESSION || $_SESSION['role'] != 'admin'){
        header('location:404');
	  }
?>
<!DOCTYPE html>
<html>
<body>
<h1>HTML DOM Events</h1>
<h2>The onclick Event</h2>

<p>The onclick event triggers a function when an element is clicked on.</p>
<p>Click to trigger a function that will output "Hello World":</p>

<button onclick="myFunction(10)">Click me</button>
<button onclick="myFunction(10)">Click me</button>
<p id="demo"></p>
<p id="demo1"></p>
<button onclick="myclick1234()">Click me</button>
<button onlick="myclick1234()">CLICK</button>
<h1>Admin page</h1>
<a href="index">Xem trang chủ</a>
<br>
<a href="logout">Đăng xuất</a>
<script>
	function click() {
    	alert('hi')
    
	}

	function click1234() {
		alert('hi')
		
	}
</script>

<script>
var cnt = 0;
function myFunction(a) {
console.log("OK " + ++cnt);
	a=a+100;
  document.getElementById("demo").innerHTML = "Hello World";
  document.getElementById("demo1").innerHTML = a;
  
  alert('OK');
}
function myclick1234(){
	alert('OK');
}
</script>

</body>
</html>
