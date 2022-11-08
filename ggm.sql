BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "Customer" (
	"CustomerID"	INTEGER NOT NULL,
	"FirstName"	TEXT,
	"LastName"	TEXT,
	"Address"	TEXT,
	"City"	TEXT,
	"Province"	TEXT,
	"Postcode"	TEXT,
	"phonenumber"	TEXT,
	"Username"	TEXT,
	"Password"	TEXT,
	PRIMARY KEY("CustomerID" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "Product" (
	"P_id"	INTEGER NOT NULL,
	"P_name"	TEXT,
	"P_type"	TEXT,
	"P_desc"	TEXT,
	"P_brand"	TEXT,
	"P_price"	INTEGER,
	"P_image"	TEXT,
	PRIMARY KEY("P_id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "Order" (
	"Order_ID"	INTEGER NOT NULL,
	"CustomerID"	INTEGER NOT NULL,
	"Order_Status"	TEXT,
	PRIMARY KEY("Order_ID" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "OrderDetail" (
	"ID"	INTEGER NOT NULL,
	"Order_ID"	INTEGER,
	"CustomerID"	INTEGER,
	"P_id"	INTEGER,
	"P_value"	INTEGER,
	"Order_qtn"	INTEGER,
	PRIMARY KEY("ID" AUTOINCREMENT)
);
INSERT INTO "Customer" VALUES (1,'ชาติณโยดม','วิบูลย์พานิช','ที่ไหนสักแห่ง','สายไหม
','กรุงเทพ','10220','0910789810','baipor2545','0910789810');
INSERT INTO "Customer" VALUES (2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'customer1','0910789810');
INSERT INTO "Customer" VALUES (3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'customer03','manymany');
INSERT INTO "Product" VALUES (1,'Product1','Figure','THis product is sussy baka.','Pochita',2300,NULL);
INSERT INTO "Product" VALUES (2,'Product2','Accessory','This product is to damn cute.','Son',5000,NULL);
INSERT INTO "Product" VALUES (3,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO "Product" VALUES (4,NULL,NULL,NULL,NULL,NULL,NULL);
INSERT INTO "Product" VALUES (5,NULL,NULL,NULL,NULL,NULL,NULL);
COMMIT;
