function myFunc(param1 = 1, param2 = 2){
	console.log(param1 + ' ' + param2);
}

myFunc(2, 3);
myFunc(2);

function myFunc2(param1, param2 = 2){
	console.log(param1 + ' ' + param2);
}

myFunc2(22);
myFunc2(22, 50);