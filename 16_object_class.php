<html>
<body>

<script>
function person(firstname, lastname, age, eyecolor)
{
	this.fName = firstname;
	this.lName = lastname;
	this.tAge = age;
	this.eColor = eyecolor;
}

myFather = new person("MD. Kamal", "Bhuyan", 50, "black");
itsMe = new person("Kaniz", "Fatima", 22, "brown");
document.write(myFather.fName + " " + myFather.lName + " is " + myFather.tAge + " years old.<br />");

document.write("My First Name is: " + itsMe.fName + " And I am not a Terrorist");
</script>



</body>
</html>