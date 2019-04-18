2.1 --- "SELECT h.hotel_name, d.destination_name, h.rooms, c.name FROM hotels h JOIN destinations d ON h.destination_id=d.destination_id JOIN countries c ON d.country_id=c.country_id WHERE h.date_deleted IS NULL"

"SELECT * FROM hotels"

2.2 --- "SELECT AVG(rooms) FROM hotels"

2.3 --- "SELECT p.package_id, d.duration_id, d.duration FROM packages p JOIN durations d ON p.duration_id=d.duration_id WHERE d.duration>5"

2.4 --- "SELECT SUM(rooms), d.destination_name FROM hotels h JOIN destinations d ON h.destination_id=d.destination_id WHERE d.destination_id=6"