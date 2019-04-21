function myFunc(param){
	// param*10;
	return param*10;
}

var res = myFunc(13);
// console.log(res);

function myFunc2(param){
	if(param > 10){
		return 'Greater than 10';
	} else {
		return 'Smaller than 10';
	}

	return param;
}

console.log(myFunc2(10));