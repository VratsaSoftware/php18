// Hello, how are you.'
// Life is pretty good, isn’t it?'

var res = '',
	str,
	str_split,
	reversed_word;

	str = 'Life is pretty good, isn’t it?';

	str_split = str.split(' ');

	for(var i = 0; i < str_split.length; i++){
		res += ' ';
		reversed_word = str_split[i]
						.split('')
						.reverse()
						.join('');
		res += reversed_word;
		
	}

	console.log(res)

