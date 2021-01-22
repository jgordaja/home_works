1 Одним запросом в таблицу `towns` добавить записи в поля `name`
и `post_index`:  

Краматорск и 84313,  
Марьинка и 85600  

	> INSERT INTO `towns` (`name`, `post_index`)
	> VALUES
	> ('Краматорск', 84313),
	> ('Марьинка', 85600);  

2 Удалить записи из таблицы `news`  

	> DELETE FROM `news`  

3 Вывести значения из полей `surname`, `name` из таблицы
студентов `students`  

	> SELECT `surname`, `name` FROM `students`  

4 Необходимо выбрать всех пользователей из таблицы `users`  

	> SELECT * FROM `users`  

5 В таблице `schools`, необходимо обновить значения в
следующих полях: в поле `number` установить значение 5, в поле `status`
установить значение `middle`  

	> UPDATE `schools` SET `number`=5, `status`='middle'  

6 Необходимо выбрать номер (`number`), и дату (`date_sale`) из
таблицы `certificates`  

	> SELECT `number`, `date_sale` FROM `certificates`  

7 В таблицу `towns` добавить запись со следующими полями:
`name` = Краматорск, `post_index` = 84313  

	> INSERT INTO `towns` (`name`, `post_index`)
	> VALUES ('Краматорск', 84313);