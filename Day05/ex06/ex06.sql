SELECT title, summary 
FROM db_mbaloyi.film
WHERE LOWER(summary) LIKE "%vincent%"
ORDER BY id_film ASC;