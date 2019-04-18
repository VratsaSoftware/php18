1зад. Направете SQL заявка към БД, с която да видите пълна информация за наличните в базата хотели
SELECT `hotel_name` FROM `hotels` WHERE `date_deleted` IS NUll

2зад. Направете SQL заявка за средния брой стаи в наличните хотели. 
SELECT AVG(`rooms`) FROM `hotels` WHERE `date_deleted` IS NULL

3 зад. Направете SQL заявка за пакети за почивка с продължителност повече от 5 дни.
SELECT `duration` FROM `durations` WHERE `duration` > 5 AND date_deleted IS NUll 

4 зад. Направете SQL заявка, с която да преброите стаите в Bodrum.
SELECT COUNT(`rooms`) FROM `hotels` WHERE `destination_id` = 6 AND date_deleted IS NULL