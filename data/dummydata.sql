--/User_type data

INSERT INTO USER_TYPE VALUES
(1,'Administrator'),
(2,'Customer') ;

--/User data

INSERT INTO USER VALUES 
(1,'','System','Administrator','no address','admin@fashionstar.com','123','0770770777','M','Casual',NULL,1),
(2,'Miss','Anjali','Senevirathna','36/3,Colombo Rd.,Peradeniya','anjalisen@gmail.com','aqwersakd236','0771234568','F','casual',NULL,2),
(3,'Mr','Rohan','Ekanayake','74 A,Matale rd.,Katugasthota','rohanekanayake@gmail.com','qdkda234jlas','0717123819','M','formal',NULL,2),
(4,'Mrs','Monica','Pathirana','21,Lady,Maccalum Rd.,Kandy','monique@yahoo.com','pqowiend8721','0757182368','F','formal',NULL,2),
(5,'Mr','Rashen','Silva','43,D.S.Senanayake St.,Kandy','rashen123@gmail.com','kjW21KAS','0779586123','M','casual',NULL,2);

--/check the input for the LastAccess field. I just gave it as a string for now. And note that UserID field has a foreign constraint

--/Colour data

INSERT INTO COLOUR VALUES
(1,'Red','000000001'),
(2,'Blue','000000002'),
(3,'Green','000000003'),
(4,'Purple','000000004'),
(5,'Black','000000005'),
(6,'White','000000006'),
(7,'Grey','000000007') ;

--/Product data

--/the last 3 fields are for FrontImg,BackImg,and description. Didn't fill them out properly. the images fields have just the image numbers given in the folder. How to fill them properly?

INSERT INTO project.product_spec (`ProductID`, `Name`, `Brand`, `Variety`, `Category`, `TypeOfWear`, `Material`, `FrontImg`, `BackImg`, `Description`) 
    VALUES (1, 'Rose print tea dress', 'Love 21', 'Dress', 'Women', 'casual', 'polyester', '13', '14', 'Love 21,Concealed back zipper,Lightweight, partially lined,100% polyester,34" full length, 34" chest, 27" waist, 6" sleeve length,Measured from Small,Hand wash cold,Imported'),
    (2, 'Classic fit pocket shirt', '21 Men', 'Shirt', 'Men', 'formal', 'cotton', '1', '2', 'Lightweight, woven,Classic collar,100% cotton,28" full length, 44" chest, 42" waist, 25" sleeve length,Measured from Medium,Machine wash cold,Imported'),
    (3, 'Crochet sheath dress', 'Love 21', 'Dress', 'Women', 'casual', 'polyester', '7', '8', 'Knit, fully lined,Lightweight,Shell: 96% polyester, 4% spandex; Lining: 100% polyester,34.5" full length, 28" chest, 28" waist,Measured from Small,Machine wash cold,Imported'),
    (4, 'Classic plaid flannel shirt', 'Forever 21', 'Shirt', 'Women', 'casual', 'cotton', '3', '4', 'Woven, unlined,Lightweight,100% cotton,27" full length, 41" chest, 41" waist, 24.24" sleeve length,Measured from Small,Machine wash cold,Imported'),
    (5, 'Classic woven vest', '21 Men', 'Jackets', 'Men', 'formal', 'polyester', '5', '6', 'Fully lined,Lightweight,Shell 1: 71% polyester, 29% cotton; Lining: 100% polyester,26" full length, 41" chest, 38" waist,Measured from Medium,Machine wash cold,Imported'),
    (6, 'Cutout bodycon dress', 'Forever 21', 'Dress', 'Women', 'casual', 'polyester', '9', '10', 'Unlined,Lightweight,95% polyester, 5% spandex,34" full length, 30" chest, 26" waist,Measured from Small,Hand wash cold,Imported'),
    (7, 'Faux leather moto jacket', 'Love 21', 'Jackets', 'Women', 'casual', 'polyurethane', '11', '12', 'Fully lined,Medium weight, woven,Shell: 100% polyurethane; Lining: 85% viscose, 15% polyester,21" full length, 30" chest, 34" waist, 24" sleeve length,Measured from SmallMachine wash cold,Imported'),
    (8, 'Speckled french terry pullover', '21 Men', 'Jackets', 'Men', 'casual', 'cotton', '15', '16', 'Knit,78% cotton, 22% polyester,29.25" full length, 44" chest, 42" waist, 26" sleeve length,Measured from Medium,Machine wash cold,Imported');

--/Item data

INSERT INTO ITEM VALUES
(1,1,1,'Small','27.80',4),
(2,1,2,'Medium','27.80',5),
(3,1,3,'Large','27.80',3),
(4,1,4,'Medium','27.80',6),
(5,2,5,'Small','12.80',6),
(6,2,7,'Large','12.80',6),
(7,2,2,'Small','12.80',4),
(8,2,3,'Medium','12.80',5);