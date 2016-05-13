<!DOCTYPE html>
<html>
<body>



<input type="number" id="myNumber" value="2">

<p>Choose a colour from the above graphic diagram!</p>

<button onclick="myFunction()">Try it</button>



<p id="demo"></p>

<script>
function myFunction() {
    var x = document.getElementById("myNumber").value;
    //document.getElementById("demo").innerHTML = x;
	if (x >=5 && x<=32) {
        document.getElementById("demo").innerHTML = "Go ahead !Continue with your day,your just fine!!!";
    }
	
}
</script>

</body>
</html>