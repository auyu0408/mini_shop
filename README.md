# mini_shop  
根據[這本書](https://ebook.nlpi.edu.tw/bookdetail/32953)做出來的簡易購物網站，但也可作為單純的歌曲分享網站  
![](https://i.imgur.com/x9eG3gK.png)

## Set Up  
There are some setting in `setting_example/`  
- `init.sql`: MYSQL setting with complete DB, include some product samples, default admin and order samples.  
use `$ mysql -u Username -p < init.sql` to restore database.  
- `php.ini`: php config  
- `sites-avalible/default`:nginx config, default root=`/mini_shop`  

About env: in `.env.example`
```.env
DB_HOST="127.0.0.1"
DB_ID="user_in_mysql"
DB_PW="passwd_in_mysql"
DB_NAME="mini_shop" #don't need to change

#usually we don't need too much admin
ADMIN1="admin_name" #ex.ADMIN1="A"
```
after edit, chamge name into `.env` 
## Use  
in `mode-choose` we can let the website have different function.  
- default admin  
```
user id:A
password:00000000
```
you can edit user id and password, I will mention it later.   
- change mode
  in `mode_choose/var_config.php`
```php
<?php
define('_SHOP_NAME','Hololive Production');//your website title

//mode Song example

define('_NOTICE','Lyrics');
define('_SERVICE','Video');
define('_SPECIAL','Credict');	
define('_GOOD','Song');
define('_MODE','S');


//mode Product example
/*
define('_NOTICE','Notice');
define('_SERVICE','Service');
define('_SPECIAL','Special');	
define('_GOOD','Product');
define('_MODE','P');
 */
?>
```
- if you want to use Mode 1, comment the top half, show the bottom half.  
- else, comment the bottom half, default is mode 2. 
- variable _SHOP_NAME is the website title, you can change it.  
- you can also change the cover in `image/`. My cover is combine by a big picture and a small picture.

### Mode 1 Simple shopping website  
#### When you see the website first:  
![](https://i.imgur.com/eNoG77m.png)
- upward of the right side  
  login pannel, login with default admin or sign up.  
- middle of the right side  
  shopping cart, you can add product wherever who you are, but only member can check out.  
- click the product you can see product introduction.  
#### After you login and click it:
![](https://i.imgur.com/pH79cUC.png)
- upward of the right side  
  tool pannel, only admin can published new thing  
- middle is product information  
  only admin can edit and delete product  
- admin can arrange product information by yourself.  
- Go Back button will go to Home Page.
#### Account and Order management:  
![](https://i.imgur.com/soG8tTn.png)
- account managerment  
  you can't delete admin account  
  only admin can edit or delete all people's account  
  normal member can only edit themselves.  
  
![](https://i.imgur.com/aUidcW4.png)
- order managerment  
  order would seperate into done or undo  
  only admin can see all people's order and delete/mark then done.  
  
![](https://i.imgur.com/16XORGD.png)
- Order detail display  

#### edit product:
![](https://i.imgur.com/sDpRQcU.png)
- 在Service欄嵌入原始碼不會被洗掉，其他的話可能要每次編輯就要重新嵌入  
- 一但在Service嵌入原始碼，要讓該欄完全空白會偏難（可以考慮嵌入沒有字顯示的原始碼）  

#### When you change admin ID or want to add new admin
- first, edit `.env` file  
```.env
...
DB_NAME="mini_shop"

#usually we don't need too much admin
ADMIN1="A" #change to user_id you set
ADMIN2="B" #if you need to add new admin, add line like this
...(admin list)
```
- second, edit `config.php`  
```php
<?php
require "vendor/autoload.php";
...

//include env variable
$DB_HOST = $_ENV['DB_HOST'];
$DB_ID = $_ENV['DB_ID'];
$DB_PW = $_ENV['DB_PW'];
$DB_NAME = $_ENV['DB_NAME'];
$ADMIN1 = $_ENV['ADMIN1'];
$ADMIN2 = $_ENV['ADMIN2'];(if you want to add new admin)
...(also list your admin,根據.env裡的命名)

$admin_array = [$ADMIN1,$ADMIN2,...]; //有幾個admin就加到幾
?>
```
### Mode 2 Song display website  
#### When you see the website first:  
![](https://i.imgur.com/1EjlRCm.png)
- upward of the right side  
  login pannel, login with default admin.  
- click the product you can see song introduction.  
- no price, just popularity
#### After you login and click it:
![](https://i.imgur.com/VQBOLA9.png)

![](https://i.imgur.com/Fni4TnB.png)

![](https://i.imgur.com/x3NBMZ3.png)

![](https://i.imgur.com/nNQzb0D.png)

- upward of the right side  
  tool pannel, no order function  
- middle is product information  
  only admin can edit and delete product  
  no add to cart  
- admin can edit song information like above.  
- Go Back button will go to Home Page.
#### edit product:
![](https://i.imgur.com/YnGOc5h.png)
- 在Service欄嵌入原始碼不會被洗掉，其他的話可能要每次編輯就要重新嵌入
- 一但在Service嵌入原始碼，要讓該欄完全空白會偏難（可以考慮嵌入沒有字顯示的原始碼）

#### When you change admin ID
這個功能沒辦法新增admin
- edit `.env` file
```.env
...
DB_NAME="mini_shop"

#usually we don't need too much admin
ADMIN1="A" #change to user_id you set
```
## Materia  
[Youtube](https://www.youtube.com)  
[Walfie](https://twitter.com/walfieee?s=21)(cover picture)  
[hololive logo](https://en.hololive.tv/)(logo picture)
