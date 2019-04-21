var a = 10;

function myFunc(){
	// console.log(a);
	var b = 13;
	function myFunction(){
		var c = 15;
		// console.log(b);
	}

	myFunction();
	console.log(c);
}

myFunc();