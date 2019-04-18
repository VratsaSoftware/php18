zad.2 4.4
SELECT MAX(rooms) FROM hotels
zad.2 4.3
SELECT duration_id,package_id FROM packages WHERE duration_id = 4 LIMIT 6 
zad.2 4.1
SELECT COUNT(*) FROM hotels
zad.2  4.2
SELECT hotel_id, rooms FROM hotels WHERE rooms>(SELECT AVG(rooms) FROM hotels)