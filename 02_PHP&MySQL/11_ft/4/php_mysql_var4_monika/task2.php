1.SELECT hotels.hotel_name, hotels.rooms, packages.price FROM `hotels` JOIN packages ON hotels.destination_id = packages.package_id
2. SELECT AVG(rooms) AS AverageRooms FROM hotels
3.SELECT packages.price, durations.duration FROM `durations` JOIN packages ON durations.duration_id = packages.duration_id WHERE durations.duration > 5
4.SELECT destinations.destination_name, COUNT(rooms) FROM hotels JOIN destinations ON hotels.destination_id = destinations.destination_id GROUP BY destination_name