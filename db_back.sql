create database parking
use parking
CREATE TABLE Users (
    id int,
	username varchar(255),
    pass varchar(255),
    primary key(id)
);
CREATE TABLE User_details (
    id int,
	user_id int,
    firstname varchar(255),
	lastname varchar(255),
	addr varchar(1000),
	contactno varchar(15),
	foreign key(user_id) references Users,
    primary key(id)
);
CREATE TABLE parking_details(
    id int,
	user_id int,
    carno varchar(255),
	carname varchar(255),
	cartype varchar(255),
	foreign key(user_id) references Users,
    primary key(id)
);
CREATE TABLE balance(
    id int,
	user_id int,
    amt varchar(255),
	foreign key(user_id) references Users,
    primary key(id)
);
CREATE TABLE Rates(
    id int,
    cost varchar(4),
	car_type varchar(255),
    primary key(id)
);


CREATE TABLE timing(
    id int,
	user_id int,
    entry_time varchar(255),
	exit_time varchar(255),
	rate_id int,
	book_time int,
	foreign key(user_id) references Users,
	foreign key(rate_id) references Rates,
    primary key(id)
);


insert into Users values(1,'anay97','anay97')
insert into Users values(2,'a','a')
insert into Users values(3,'b','b')
insert into Users values(4,'c','c')
insert into Users values(5,'d','d')
insert into Users values(6,'e','e')
insert into Users values(7,'f','f')
insert into Users values(8,'g','g')
insert into Users values(9,'h','h')
insert into Users values(10,'i','i')
select * from User_details



insert into User_details values(1,1,'Anay','Awasthi','Mira Road','1232')
insert into User_details values(2,2,'Amrish','Puri','Juhu','99420')
insert into User_details values(3,3,'Bansal','Sharma','Borivali','12333')
insert into User_details values(4,4,'Charles','Fernandes','Kandivali','23453')
insert into User_details values(5,5,'Dhaval','Desai','Goregaon','32432')
insert into User_details values(6,6,'Eesha','Shah','Bandra','23423')
insert into User_details values(7,7,'Faruq','Khan','Mira Road','3445')
insert into User_details values(8,8,'Govind','Mishra','Thane','87745')
insert into User_details values(9,9,'Lakhan','Kabra','Kandivali','98689678')
insert into User_details values(10,10,'Ishita','Gupta','Goregaon','6757567')
select * from User_details

insert into parking_details values(1,1,'MH-04-AB-22','Verna','Car')
insert into parking_details values(2,2,'MH-02-bc-12','Mercedes','Car')
insert into parking_details values(3,3,'mh-03-qq-12','BMW','Car')
insert into parking_details values(4,4,'mh-03-ff-qwe','Honda','Bike')
insert into parking_details values(5,5,'mh-02-sa-23','Ertiga','Car')
insert into parking_details values(6,6,'mh-03-ss-14','Activa','Scooter')
insert into parking_details values(7,7,'mh-04-r-33','Avenger','Bike')
insert into parking_details values(8,8,'mh-04-r-34','Bullet','Bike')
insert into parking_details values(9,9,'mh-04-r-35','City','Car')
insert into parking_details values(10,10,'mh-02-ig-277','Audi','Car')
select * from parking_details


insert into balance values(1,1,500)
insert into balance values(2,2,1500)
insert into balance values(3,3,500)
insert into balance values(4,4,2500)
insert into balance values(5,5,500)
insert into balance values(6,6,1500)
insert into balance values(7,7,2500)
insert into balance values(8,8,250)
insert into balance values(9,9,500)
insert into balance values(10,10,1000)


insert into Rates values(1,'500','Basic Car')
insert into Rates values(2,'250','2-wheeler')
insert into Rates values(3,'1500','Luxury Car')
select * from Rates

insert into timing values(1,1,'9','10',1,2)
insert into timing values(2,2,'9','10',2,2)
insert into timing values(3,3,'9','10',3,2)
insert into timing values(4,4,'9','10',1,2)
insert into timing values(5,5,'9','10',2,2)
insert into timing values(6,6,'9','10',3,2)
insert into timing values(7,7,'9','10',1,2)
insert into timing values(8,8,'9','10',2,2)
insert into timing values(9,9,'9','10',3,2)
insert into timing values(10,10,'9','10',1,2)
SELECT * FROM timing

/*vertical fragmentaion*/
select * from parking_details where cartype='Car'
select * from parking_details where cartype='Bike'

select * from User_details where addr='Goregaon'
select * from User_details where addr='Mira Road'


