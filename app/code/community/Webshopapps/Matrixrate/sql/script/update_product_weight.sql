UPDATE
    catalog_product_entity_decimal AS ped
JOIN
    eav_attribute AS ea
ON
    ea.entity_type_id = {catalog_product's id in the table 'eav_entity_type'}
    AND ea.attribute_code = 'weight'
    AND ped.attribute_id = ea.attribute_id
SET
    ped.value = {your new value}
WHERE
    ped.entity_id = {the product id to update}