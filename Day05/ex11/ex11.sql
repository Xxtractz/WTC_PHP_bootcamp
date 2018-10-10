SELECT last_name AS "NAME", first_name, price
FROM db_mbaloyi.member INNER JOIN db_mbaloyi.subscription
ON member.id_sub=subscription.id_sub
INNER JOIN db_mbaloyi.user_card
ON member.id_user_card=user_card .id_user
WHERE price > 42
ORDER BY last_name ASC, first_name ASC;