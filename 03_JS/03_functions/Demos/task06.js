var check = 1,
	rows = 6, str = '';

	while(check <= rows){
		var num = 1;
		while(num<=check){
			str += num;
			str += ' ';
			
			num++;
		}
		console.log(str);
		str = '';
		check++;
	}