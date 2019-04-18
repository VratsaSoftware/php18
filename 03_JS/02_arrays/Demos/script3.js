// var car = {};

var car = {
	name: 'Fiat',
	color: 'White',
	weight: '2 tons'
} 
// console.log(car)
car.price = 15000;
// console.log(car);

for (var prop in car){
	console.log(prop + ':' +car[prop])
}


console.log(Object.keys(car))
console.log(Object.values(car))


