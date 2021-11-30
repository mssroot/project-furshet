CREATE TABLE login(
login_id int NOT NULL AUTO_INCREMENT ,
login_username varchar( 125 ) ,
login_password varchar( 125 ) ,
PRIMARY KEY ( login_id )
);

CREATE TABLE contact(
contact_id int NOT NULL AUTO_INCREMENT ,
your_name varchar( 125 ) ,
email varchar( 125 ) ,
subject varchar( 125 ) ,
message varchar( 555 ) ,
PRIMARY KEY ( contact_id )
);


CREATE TABLE reservetion(
reservetion_id int NOT NULL AUTO_INCREMENT ,
full_name varchar( 125 ) ,
email varchar( 125 ) ,
phone_number varchar( 125 ) ,
how_many varchar( 125 ) ,
reservetion_date varchar( 125 ) ,
phone_no varchar( 125 ) ,
message varchar( 125 ) ,
PRIMARY KEY ( reservetion_id )
);


CREATE TABLE slider(
slider_id int NOT NULL AUTO_INCREMENT ,
FILE varchar( 125 ) ,
file_size varchar( 125 ) ,
brand varchar( 125 ) ,
title varchar( 125 ) ,
paragraph varchar( 125 ) ,
PRIMARY KEY ( slider_id )
);

CREATE TABLE galary(
galary_id int NOT NULL AUTO_INCREMENT ,
food_big varchar( 125 ) ,
food_big_size int( 11 ) ,
food_small varchar( 125 ) ,
food_small_size int( 11 ) ,
drink_big varchar( 125 ) ,
drink_big_size int( 11 ) ,
drink_small varchar( 125 ) ,
drink_small_size int( 11 ) ,
restaurant_big varchar( 125 ) ,
restaurant_big_size int( 11 ) ,
restaurant_small varchar( 125 ) ,
restaurant_small_size int( 11 ) ,
dinner_big varchar( 125 ) ,
dinner_big_size int( 11 ) ,
dinner_small varchar( 125 ) ,
dinner_small_size int( 11 ) ,
dessert_big varchar( 125 ) ,
dessert_big_size int( 11 ) ,
dessert_small varchar( 125 ) ,
dessert_small_size int( 11 ) ,
PRIMARY KEY ( galary_id )
);
