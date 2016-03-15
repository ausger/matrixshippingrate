UPDATE
    catalog_product_entity_varchar AS pev
JOIN
    eav_attribute AS ea ON ea.entity_type_id = <catalog_product's id in the table eav_entity_type>
    AND ea.attribute_code = 'country_of_manufacture'
    AND pev.attribute_id = ea.attribute_id
SET
    pev.value = 'DE'
WHERE
    pev.entity_id = '<#the product id to update>'


# check if there is any product doesn't have value for country_of_manufacture
select * from catalog_product_entity_varchar AS pev JOIN eav_attribute AS ea ON ea.entity_type_id = 4
    AND ea.attribute_code = 'country_of_manufacture'
    AND pev.attribute_id = ea.attribute_id
    where pev.value = ''    