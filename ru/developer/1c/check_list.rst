*********************************************
Этапы проверки модуля обмена для разработчика
*********************************************

.. contents:: Содержание
    :local: 
    :depth: 3

Проверка выгруженных данных в CS-Cart может осуществляться при наличии одной или несколько витрин. 

При наличие нескольких витрин, у выгруженных товаров появится поле "Магазин" со значением магазина, логин и пароль которого указывался при настройке обмена системы учета.


Выгрузка товара
===============

Общие настройки
+++++++++++++++

    1.  Проверить наличие выгружаемых товаров в интернет магазине.

    2.  Проверить значение поля товара "Магазин", при наличие в CS-Cart нескольких магазинов. Значение поля "Магазин" должно соответствовать магазину для которого выгружаются данные.

    3.  "Использовать в названии товара" ("Наименование" или "Полное наименование"). Проверить значение записываемое в поле товара "Название".

    4.  "Использовать в артикуле товара" ("Артикул" или "Код номенклатуры"). Проверить значение поля товара "Артикул".

    5.  "Использовать изготовителя". Проверить характеристики товара, должена создаться характеристика "Изготовитель"" со значением изготовителя.

    6.  "Скрывать товары с нулевым остатком". Проверить "Статус", у товаров с 0 или не заданном количеством статус должен быть "Скрыто".

    7.  "Добавлять налог товарам". Проверить стоит ли галка у поля "Налоги", соответствие которых заданы в "Цены и налоги" ("Модули - 1С - Цены и налоги").
    
    8.  "Использовать в названии страницы (SEO)" ("Не импортировать", "Наименование", "Полное наименование"). Проверить значение записанное в поле "Название страницы" при выборе "Наименование" или "Полное наименование".

Настройки свойств
+++++++++++++++++

    1.  Проверить выгрузку характеристик.

    2.  "Название свойства для промо-текста" проверить значение записанное в поле "Промо-текст".

    3.  "Название свойства для бренда" ("Не импортировать", "Значение изготовителя", "Свойство номенклатуры" с указанием свойства в поле "Наименование свойства для бренда"). Проверить тип у указанной характеристики в качестве бренда.

Настройки опций
+++++++++++++++

    1.  "Тип опций".
    Проверить отображение опций у товара.

    2.  "Способы загрузки опций" проверить опции товара.

        *   "Стандартное отображение": характеристики товара записываются в виде единого индивидуального параметра, название которого задано в поле "Имя опции".

        *   "По свойствам объекта": каждая характеристика товара записывается в виде отдельного общего параметра.
        
    3.  "Название опции".
    Проверить "Название" параметра товара, при выборе в поле "Способы отображения характеристик из 1С" значения "Стандартное отображение".

Настройка цен
+++++++++++++

    1.  "Импортировать количество и цены".
    Проверить загруженные товары. У ранее загруженных товаров должна обновляться только цена и количество.

    2.  "Загружать несколько цен".
    Проверить значения записываемые в поле "Цена".
    Установка параметров значения которых будет записываться в поле "Цена" производиться в меню "Модули - 1С - Цены и налоги".
    В "Цены и налоги" при установке параметров поля "Рекомендованная цена" проверить значение поля товара "Рекомендованная цена".
    В "Цены и налоги" при установке для соответствующей группы цены, проверить значения присваемые группам в "Оптовые скидки".

    3.  "Запустить модуль в режиме отладки цен".
    Проверить в "Цены и налоги" ("Модули - 1С - Цены и налоги") результат соответствия цен при выгрузке.
    
Настройки параметров доставки
+++++++++++++++++++++++++++++

    1.  "Реквизит веса".
    Проверить значение "Вес", при указании названия свойств, у которых задано значение. В поле "Вес"" должно записываться значение свойства.

    2.  "Отображать вес как характеристику".
    Проверить "Характеристики"" товара. Свойства указанные в поле "Реквизит веса", также будут записаны в виде характеристик товара.

    3.  "Бесплатная доставка".
    Проверить поле "Бесплатная доставка". В данном поле должна стоять галочка, если значение указанного свойства "Да".

    4.  "Отображать бесплатную доставку, как характеристику".
    Проверить "Характеристики" товара. Свойства указанные в поле "Бесплатная доставка", также будут записаны в виде характеристик товара.

    5.  "Стоимость доставки".
    Проверить значение поля "Стоимость доставки", при указании свойства, значение которого будет записываться в поле.

    6.  "Количество штук в коробке".
    Проверить значение поля "Количество штук в коробке", при указании свойства, значение которого будет записываться в поле.

    7.  "Длина коробки".
    Проверить значение поля "Длина коробки", при указании свойства, значение которого будет записываться в поле.

    8.  "Ширина коробки".
    Проверить значение поля "Ширина коробки", при указании свойства, значение которого будет записываться в поле.

    9.  "Высота коробки".
    Проверить значение поля "Высота коробки", при указании свойства, значение которого будет записываться в поле.

Выгрузка заказов
================

    1.  "Включать отдельно стоимость доставки товара".
    Доставка товара будет записываться в виде отдельного тега ``<Товар>`` с названием "Доставка заказа".

    2.  "Выгружать с номера".
    Проверить выгруженные заказы в системе учета. В систему учета должны быть выгружены заказы с указанного номера.

    4.  "Статусы выгружаемых заказов"
    Проверить выгруженные заказы в систему учета. В систему учета должны быть выгружены заказы с выбранными статусами.
