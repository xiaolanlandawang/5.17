# 20260423

### File
1. app/portal/controller/AdminProductController.php
2. public/themes/admin_simpleboot3/portal/admin_product/edit.html
3. public/themes/simpleboot3/portal/product-info.html
4. public/themes/simpleboot3/public/assets/css/product-info.css
5. public/themes/simpleboot3/public/assets/js/product-info.js
6. public/themes/simpleboot3_mobile/portal/product-info.html
7. public/themes/simpleboot3_mobile/public/assets/css/product-info.css
8. public/themes/simpleboot3_mobile/public/assets/js/product-info.js


# 20260422

### SQL
~~~
ALTER TABLE `weihua`.`cmf_product` 
ADD COLUMN `custom_content` text NULL COMMENT '自定义内容' AFTER `custom_field`;
~~~

### File
1. app/portal/controller/AdminProductController.php
2. app/portal/model/ProductModel.php
3. public/themes/admin_simpleboot3/admin/setting/site.html
4. public/themes/admin_simpleboot3/portal/admin_product/add.html
   public/themes/admin_simpleboot3/portal/admin_product/edit.html
5. public/themes/simpleboot3/portal/product-info.html
6. public/themes/simpleboot3/public/assets/css/common.css
7. public/themes/simpleboot3/public/assets/images/header-vk.png
8. public/themes/simpleboot3/public/assets/js/common.js
   public/themes/simpleboot3/public/assets/js/product-info.js
9. public/themes/simpleboot3/public/foot.html
   public/themes/simpleboot3/public/nav.html
10. public/themes/simpleboot3_mobile/portal/product-info.html



# 20260421

### SQL
~~~
ALTER TABLE `weihua`.`cmf_product_category` 
ADD COLUMN `recommend` tinyint(1) NOT NULL DEFAULT 0 COMMENT '是否推荐' AFTER `thumbnail`;
~~~

~~~
ALTER TABLE `weihua`.`cmf_product` 
ADD COLUMN `parameter` text NULL COMMENT '产品参数' AFTER `authentication_mark`,
ADD COLUMN `custom_field` text NULL COMMENT '自定义字段名' AFTER `customized`;
~~~

### File
1. app/portal/controller/AdminProductCategoryController.php
   app/portal/controller/AdminProductController.php
   app/portal/controller/IndexController.php
2. app/portal/model/ProductCategoryModel.php
   app/portal/model/ProductModel.php
3. public/themes/admin_simpleboot3/portal/admin_product/add.html
   public/themes/admin_simpleboot3/portal/admin_product/edit.html
4. public/themes/admin_simpleboot3/portal/admin_product_category/add.html
   public/themes/admin_simpleboot3/portal/admin_product_category/edit.html
   public/themes/admin_simpleboot3/portal/admin_product_category/index.html
5. public/themes/simpleboot3/portal/product-info.html
6. public/themes/simpleboot3/public/assets/css/common.css
   public/themes/simpleboot3/public/assets/css/index.css
7. public/themes/simpleboot3/public/assets/js/product-info.js
8. public/themes/simpleboot3_mobile/portal/index.html
   public/themes/simpleboot3_mobile/portal/product-info.html
9. public/themes/simpleboot3_mobile/public/assets/js/product-info.js




# 20260420

### SQL
~~~
ALTER TABLE `weihua`.`cmf_product`
ADD COLUMN `features` text NULL COMMENT '特点特征' AFTER `certificate`,
ADD COLUMN `customized` text NULL COMMENT '定制服务' AFTER `features`;
~~~
~~~
INSERT INTO `weihua`.`cmf_route` (`list_order`, `status`, `type`, `full_url`, `url`) VALUES (10000, 1, 1, 'portal/index/cert', 'cert');
INSERT INTO `weihua`.`cmf_route` (`list_order`, `status`, `type`, `full_url`, `url`) VALUES (10000, 1, 1, 'portal/index/create', 'innovation');
INSERT INTO `weihua`.`cmf_route` (`list_order`, `status`, `type`, `full_url`, `url`) VALUES (10000, 1, 1, 'portal/index/excellent_service', 'excellent_service');
INSERT INTO `weihua`.`cmf_route` (`list_order`, `status`, `type`, `full_url`, `url`) VALUES (10000, 1, 1, 'portal/index/download', 'download');
~~~


### File
1. app/portal/controller/IndexController.php
2. app/portal/model/ProductModel.php
3. data/route/route.php
4. public/themes/admin_simpleboot3/portal/admin_product/add.html
   public/themes/admin_simpleboot3/portal/admin_product/edit.html
5. public/themes/simpleboot3/portal/download.html
   public/themes/simpleboot3/portal/index.html
   public/themes/simpleboot3/portal/news.html
   public/themes/simpleboot3/portal/product.html
   public/themes/simpleboot3/portal/product-info.html
6. public/themes/simpleboot3/public/assets/css/about.css
   public/themes/simpleboot3/public/assets/css/common.css
   public/themes/simpleboot3/public/assets/css/index.css
   public/themes/simpleboot3/public/assets/css/industries.css
   public/themes/simpleboot3/public/assets/css/news.css
   public/themes/simpleboot3/public/assets/css/product.css
   public/themes/simpleboot3/public/assets/css/product-info.css
   public/themes/simpleboot3/public/assets/css/quote.css
   public/themes/simpleboot3/public/assets/css/service.css
7. public/themes/simpleboot3/public/assets/images/arrow-left.webp
   public/themes/simpleboot3/public/assets/images/arrow-right.webp
8. public/themes/simpleboot3/public/assets/js/product.js
   public/themes/simpleboot3/public/assets/js/product-info.js
9. public/themes/simpleboot3/public/nav.html
10. public/themes/simpleboot3_mobile/portal/index.html
    public/themes/simpleboot3_mobile/portal/product-info.html
11. public/themes/simpleboot3_mobile/public/assets/css/index.css
    public/themes/simpleboot3_mobile/public/assets/css/product-info.css
12. public/themes/simpleboot3_mobile/public/assets/js/index.js