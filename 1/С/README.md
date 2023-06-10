1. Unit тесты:
    * **_testGetImageUrls_ExistingImages_**: Проверяет, что метод getImageUrls() возвращает корректные URL-адреса существующих изображений.
    * **_testGetImageUrls_NonexistentImages_**: Проверяет, что метод getImageUrls() не возвращает URL-адреса для несуществующих изображений.
    * **_testUpdateImages_Success_**: Проверяет, что метод updateImages() успешно обновляет существующие изображения.
    * **_testUpdateImages_Failure_**: Проверяет, что метод updateImages() возвращает false в случае ошибки при обновлении изображений.

2. API тесты:
    * **_testGetProductImagesAPI_**: Проверяет, что API-маршрут для получения изображений продукта возвращает корректный набор URL-адресов.
    * **_testUpdateProductImagesAPI_Success_**: Проверяет, что API-маршрут для обновления изображений продукта успешно обновляет существующие изображения.
    * **_testUpdateProductImagesAPI_Failure_**: Проверяет, что API-маршрут для обновления изображений продукта возвращает ошибку в случае неудачи при обновлении изображений.
