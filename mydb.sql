CREATE TABLE "books" (
  "id" int NOT NULL AUTO_INCREMENT,
  "title" varchar(50) NOT NULL,
  "quantity" int DEFAULT '1',
  "description" varchar(255) DEFAULT NULL,
  "date_added" datetime DEFAULT CURRENT_TIMESTAMP,
  "price" decimal(10,2) DEFAULT NULL,
  "image_filename" varchar(45) DEFAULT NULL,
  PRIMARY KEY ("id")
);

CREATE TABLE "student" (
  "id" int NOT NULL AUTO_INCREMENT,
  "last_name" varchar(45) NOT NULL,
  "first_name" varchar(45) NOT NULL,
  "major" varchar(5) DEFAULT NULL,
  "credits" int DEFAULT '0',
  "ci" decimal(3,2) DEFAULT '4.00',
  "entry_date" datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY ("id")
);

CREATE TABLE "users" (
  "id" int NOT NULL AUTO_INCREMENT,
  "username" varchar(50) NOT NULL,
  "password" varchar(200) NOT NULL,
  "email" varchar(45) NOT NULL,
  "usertype" char(1) DEFAULT 'U',
  "date_created" datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY ("id"),
  UNIQUE KEY "email_UNIQUE" ("email"),
  UNIQUE KEY "username_UNIQUE" ("username")
);

CREATE TABLE "newsletter" (
  "id" int NOT NULL AUTO_INCREMENT,
  "email" varchar(100) NOT NULL,
  PRIMARY KEY ("id"),
  UNIQUE KEY "email_UNIQUE" ("email"));