<?php
$installer = $this;
$installer->startSetup();
$installer->run("

    INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`)
VALUES (NULL,'1','DE','CN,HK','0','','','','package_weight','0.0000','1.0000','7.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','1.0100','2.0000','15.9000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','2.0100','3.0000','32.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','3.0100','4.0000','34.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','4.0100','5.0000','36.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','5.0100','6.0000','38.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','6.0100','7.0000','40.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','7.0100','8.0000','43.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','8.0100','9.0000','45.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','9.0100','10.0000','47.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','10.0100','12.0000','51.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','12.0100','15.0000','57.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','15.0100','18.0000','63.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','18.0100','20.0000','67.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','20.0100','25.0000','77.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','25.0100','28.0000','83.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CN,HK','0','','','','package_weight','28.0100','30.0000','87.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','0.0000','1.0000','7.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','1.0100','2.0000','15.9000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','2.0100','5.0000','37.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','5.0100','6.0000','39.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','6.0100','7.0000','41.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','7.0100','8.0000','43.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','8.0100','9.0000','45.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','9.0100','10.0000','47.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','10.0100','12.0000','51.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','12.0100','15.0000','57.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','15.0100','20.0000','67.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','MO,TW','0','','','','package_weight','20.0100','30.0000','114.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','0.0000','1.0000','7.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','1.0100','2.0000','15.7900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','2.0100','5.0000','39.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','5.0100','6.0000','40.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','6.0100','7.0000','42.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','7.0100','8.0000','43.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','8.0100','9.0000','45.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','9.0100','10.0000','47.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','10.0100','12.0000','50.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','12.0100','15.0000','55.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','15.0100','20.0000','60.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','20.0100','25.0000','71.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','25.0100','28.0000','76.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AU,NZ','0','','','','package_weight','28.0100','30.0000','79.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','0.0000','2.0000','13.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','2.0100','5.0000','16.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','5.0100','10.0000','20.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','10.0100','15.0000','26.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','15.0100','18.0000','28.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','18.0100','20.0000','29.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','20.0100','25.0000','31.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AT,BG,BE,HR,CY,CZ,DK,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','25.0100','30.0000','34.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','0.0000','5.0000','24.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','5.0100','8.0000','26.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','8.0100','10.0000','27.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','10.0100','12.0000','28.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','12.0100','15.0000','30.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','15.0100','18.0000','32.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','18.0100','20.0000','34.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','20.0100','22.0000','35.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','22.0100','25.0000','37.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','25.0100','28.0000','39.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','AL,AD,AM,AZ,BY,BA,FO,GE,GL,GG,IS,JE,KZ,LI,MK,MD,ME,NO,RU,SM,RS,SZ,TR,UA,VA','0','','','','package_weight','28.0100','30.0000','40.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CA,IL,JO,LR,LY,MA,SY,TN,US','0','','','','package_weight','0.0000','5.0000','35.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CA,IL,JO,LR,LY,MA,SY,TN,US','0','','','','package_weight','5.0100','10.0000','47.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CA,IL,JO,LR,LY,MA,SY,TN,US','0','','','','package_weight','10.0100','20.0000','68.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','CA,IL,JO,LR,LY,MA,SY,TN,US','0','','','','package_weight','20.0100','30.0000','93.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','0.0000','5.0000','42.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','5.0100','6.0000','44.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','6.0100','7.0000','46.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','7.0100','8.0000','48.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','8.0100','9.0000','50.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','9.0100','10.0000','52.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','10.0100','12.0000','58.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','12.0100','15.0000','64.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','15.0100','20.0000','76.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','20.0100','25.0000','88.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','JP,KR,KP,ID,IN,MY,SG,TH','0','','','','package_weight','25.0100','30.0000','100.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','DE','0','','','','package_weight','0.0000','10.0000','5.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','DE','0','','','','package_weight','10.0100','20.0000','8.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','DE','0','','','','package_weight','20.0100','30.0000','10.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','HM','0','','','','package_weight','0.0000','2.0000','15.7900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','HM','0','','','','package_weight','2.0100','5.0000','41.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','HM','0','','','','package_weight','5.0100','10.0000','58.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','HM','0','','','','package_weight','10.0100','20.0000','91.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','DE','HM','0','','','','package_weight','20.0100','31.5000','124.9900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','0.0000','1.0000','10.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','1.0100','2.0000','20.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','2.0100','3.0000','30.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','3.0100','4.0000','40.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','4.0100','5.0000','65.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','5.0100','6.0000','76.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','6.0100','7.0000','87.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','7.0100','8.0000','98.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','8.0100','9.0000','109.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','9.0100','10.0000','120.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','10.0100','11.0000','131.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','11.0100','12.0000','142.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','12.0100','13.0000','153.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','13.0100','14.0000','164.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','14.0100','15.0000','175.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','15.0100','16.0000','186.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','16.0100','17.0000','197.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','17.0100','18.0000','208.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','18.0100','19.0000','219.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','CN,NZ,JP,KR,KP,ID,IN,MY,SG,TH,HK,TW,MO','0','','','','package_weight','19.0100','20.0000','230.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','0.0000','1.0000','48.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','1.0100','2.0000','66.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','2.0100','3.0000','84.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','3.0100','4.0000','102.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','4.0100','5.0000','120.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','5.0100','6.0000','138.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','6.0100','7.0000','156.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','7.0100','8.0000','174.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','8.0100','9.0000','192.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','9.0100','10.0000','210.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','10.0100','11.0000','228.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','11.0100','12.0000','246.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','12.0100','13.0000','264.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','13.0100','14.0000','282.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','14.0100','15.0000','300.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','15.0100','16.0000','318.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','16.0100','17.0000','336.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','17.0100','18.0000','354.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','18.0100','19.0000','372.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AT,BG,BE,HR,CY,CZ,DK,DE,EE,FI,FR,GR,HU,IE,IT,LV,LT,LU,MT,MC,NL,PL,RO,SK,SI,ES,SE,GB','0','','','','package_weight','19.0100','20.0000','390.0000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','HM','0','','','','package_weight','0.0000','2.0000','91.5000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','HM','0','','','','package_weight','2.0100','3.0000','112.8000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','HM','0','','','','package_weight','3.0100','5.0000','155.3500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','HM','0','','','','package_weight','5.0100','10.0000','261.7500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','HM','0','','','','package_weight','10.0100','20.0000','474.5500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','486','','','','package_weight','0.0000','22.0000','10.9500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','0.0000','1.0000','10.9500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','1.0100','2.0000','17.3800','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','2.0100','3.0000','26.0700','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','3.0100','4.0000','34.7600','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','4.0100','5.0000','43.4500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','5.0100','6.0000','52.1400','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','6.0100','7.0000','60.8300','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','7.0100','8.0000','69.5200','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','8.0100','9.0000','78.2100','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','9.0100','10.0000','86.9000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','10.0100','11.0000','95.5900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','11.0100','12.0000','104.2800','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','12.0100','13.0000','112.9700','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','13.0100','14.0000','121.6600','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','14.0100','15.0000','130.3500','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','15.0100','16.0000','139.0400','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','16.0100','17.0000','147.7300','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','17.0100','18.0000','156.4200','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','18.0100','19.0000','165.1100','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','19.0100','20.0000','173.8000','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','20.0100','21.0000','182.4900','0.0000','');
INSERT INTO {$this->getTable('shipping_matrixrate')} (`pk`,`website_id`,`depart_country_id`,`dest_country_id`,`dest_region_id`,`dest_city`,`dest_zip`,
`dest_zip_to`,`condition_name`,`condition_from_value`,`condition_to_value`,`price`,`cost`,`delivery_type`) VALUES(NULL,'1','AU','AU','0','','','','package_weight','21.0100','22.0000','191.1800','0.0000','');

    ");
$installer->endSetup();







