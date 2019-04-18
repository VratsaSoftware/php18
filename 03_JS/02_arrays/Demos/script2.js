var arr = [],
	len = 5,
	i;

	for( i = 0; i < len; i++){
		arr[i] = i*5;
	}

	// console.log(arr);

	for( var j=0; j < arr.length; j++){
		// console.log(arr[j])
	}

	delete arr[2];

	// console.log(arr);

	for( var num in arr ){
		console.log(num);
	}