// 2, [1, 2,3, 3, 5]
// 2, [1, 2,5, 3, 4]
// 5, [1, 2, 5, 3, 4]
// 0, [1, 2, 5, 3, 4]
var arr = [1, 2,3, 3, 5],
	ind = 2,
	len;

len = arr.length;

if( ind >= len){
	console.log('invalid index');
} else {
	if( ind == 0 || ind == (len-1)) {
		console.log('only one neighbor');
	} else {
		if((arr[ind] > arr[ind-1] && (arr[ind] > arr[ind+1]))){
			console.log('bigger');
		} else {
			console.log('not bigger');
		}
	}
}
console.log(len)