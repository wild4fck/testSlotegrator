**Получение списка продуктов:**

* Запрос: GET _/products?category=category-1&sort=name_
* Ответ: 
  * HTTP/1.1 200 OK
  * Content-Type: application/json;charset=UTF-8
  * [first.json](first.json)

**Добавление продукта в избранное:**

* Запрос: POST _/products/{id}/favorite_
* Ответ:
    * HTTP/1.1 200 OK
    * Content-Type: application/json;charset=UTF-8
    * [second.json](second.json)

**Получение списка избранных продуктов:**

* Запрос: GET _/favorites_
* Заголовок: _Authorization: Bearer <token>_
* Ответ:
  * HTTP/1.1 200 OK
  * Content-Type: application/json;charset=UTF-8
  * [third.json](third.json)


    


