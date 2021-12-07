<h1>test text hello world</h1>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
function loadData(){
   $('#name').load("server.php");
}
$(function(){
  setInterval(loadData, 100);
});
</script>
</head>
<body>
</body>
</html>

<input id="add1">
<button onclick="add()">Add</button>
<input id="answer">
<script type="text/javascript">
function add(){
var c;
c= document.getElementById('add1');
document.getElementById("answer").value= c;
}
var a= document.getElementById('name').innerHTML;
// refreshTime=a.toString();
//var refreshTime = document.getElementById('name').innerHTML;
var refreshTime = a.toString();
var foo = document.write('<meta http-equiv="refresh" content="'+refreshTime+';url=http://www.google.com">');
</script>
//sdfjk