<?php
$installer = $this;
$installer->startSetup();
$installer->run("

    INSERT
    INTO {$this->getTable('directory_country_region')}
        (`region_id`, `country_id`, `code`, `default_name`)
    VALUES
        (NULL, 'AU', 'VIC', 'Victoria'),
        (NULL, 'AU', 'NSW', 'New South Wales'),
        (NULL, 'AU', 'QLD', 'Queensland'),
        (NULL, 'AU', 'ACT', 'Australian Captial Territory'),
        (NULL, 'AU', 'NT', 'Northern Territory'),
        (NULL, 'AU', 'WA', 'Western Australia'),
        (NULL, 'AU', 'SA', 'South Australia'),
        (NULL, 'AU', 'TAS', 'Tasmania');

    INSERT
    INTO {$this->getTable('directory_country_region_name')}
        (`locale`, `region_id`, `name`)
    VALUES
        ('en_AU', '485', 'Victoria'),
        ('en_AU', '486', 'New South Wales'),
        ('en_AU', '487', 'Queensland'),
        ('en_AU', '488', 'Australian Capital Territory'),
        ('en_AU', '489', 'Northern Territory'),
        ('en_AU', '490', 'Western Australia'),
        ('en_AU', '491', 'South Australia'),
        ('en_AU', '492', 'Tasmania');

    INSERT
    INTO {$this->getTable('core_config_data')}
        (`config_id`,`scope`,`scope_id`,`path`,`value`)
    VALUES
        (NULL , 'default', '0', 'carriers/matrixrate/logo', '/skin/frontend/default/theme540/images/shippinglogo.png');

    INSERT INTO {$this->getTable('core_config_data')}
        (`config_id`,`scope`,`scope_id`,`path`,`value`)
    VALUES
        (NULL , 'default', '0', 'carriers/matrixrate/description', 'Best Delivery Rate to your destination.');

    ");
$installer->endSetup();







