var arr = ['2', '2', '2', '2', '2', '3', '3', '2', '2', '2', '2'],
			current_num = arr[0],			
			maxCount = 1,
			count = 1;

for( var i = 1; i < arr.length; i++){
	if(current_num == arr[i]){
		count++;
	} else {
		if(count > maxCount){
			maxCount = count;
		}
		count = 1;
		current_num = arr[i];
	}
}
if(count >  maxCount){
	maxCount = count;
}
console.log(maxCount)