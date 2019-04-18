1. SELECT f.film_id, d.director_id, d.director_name, f.film_name FROM directors d JOIN films f ON d.director_id = f.director_id WHERE f.date_deleted IS NULL
2.1 SELECT * FROM `films` ORDER BY year_of_production DESC LIMIT 1
2.2 SELECT * FROM `films` WHERE year_of_production = (SELECT MAX(year_of_production) FROM films)
3.SELECT * FROM `films` WHERE imdb_index > 8
4. 