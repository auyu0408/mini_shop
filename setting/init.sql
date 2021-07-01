drop database if exists mini_shop;
create database mini_shop;
use mini_shop;

drop table if exists goods;
create table goods(
	goods_sn mediumint unsigned not null auto_increment comment '商品編號',
	goods_title varchar(255) not null comment '商品名稱',
	goods_content text comment '商品介紹',
	goods_price mediumint unsigned default 0 comment'商品價錢',
	goods_counter smallint unsigned default 0,
	goods_date datetime not null comment '發佈時間',
	primary key('goods_sn')
)engine=MyISAM default charset=utf-8;

drop table if exists users;
create table users(
	user_sn int unsigned not null auto_increment comment '會員編號';
	user_name varchar(255) not null comment '使用者姓名';
	user_id
	user_passwd
	user_email
	user_sex
)
