SELECT user.id, user.login `login`, user.password `password`, obj.id `object.id`, obj.name `name`, obj.status `status`
FROM `users` user
INNER JOIN `objects` obj ON obj.id = user.object_id

/* 
Есть несколько таблиц в БД: users, objects
1.	users: id, login, password, object_id
2.	objects: id, name, status
Нужно сделать выборку пользователей из базы данных с использованием конструкции 
JOIN у которых есть запись в таблице objects, соответствующая значению object_id
*/