drop database KapishAB;
create database KapishAB;
use KapishAB;

CREATE TABLE report( #DELSTRÄCKA!

	#rID INT auto_increment,
    rMail VARCHAR(30),
    rName VARCHAR(30), # "R" i Rname står för report
    #descr TINYTEXT, #Tinytext limiterar tecknen till max 255. 
    #probChoice VARCHAR(30), #Problemval
    
	PRIMARY KEY (rMail)
    
)engine=innodb;

insert into report (rMail, rName) value ('mail@mail.com', 'Kurt');
select * from report;

CREATE TABLE news(
	
    nID INT,
    nDate DATE,
    article TINYTEXT,
    nHeader VARCHAR(20),
    nPhase VARCHAR(30), #etapp
    
    PRIMARY KEY (nID)
    
)engine=innodb;
    
CREATE TABLE feedback(

	fbID INT auto_increment,
    fb int(1),
    fbComment TINYTEXT,
    
    PRIMARY KEY (fbID)
    
)engine=innodb;
    
CREATE TABLE distance ( #sträcka

	nr INT(2), #Delsträcka 1-21
    ort VARCHAR(20),
    dStatus INT(1), #DStatus = Distance status (1=Öppen/0=Stängd/2=Under arbete)
	
	PRIMARY KEY (nr) 
    
)engine=innodb;

INSERT INTO distance (nr, ort, dStatus) VALUE ('21','Norrhyttan', '1');
    
CREATE TABLE workOrder( #arbetsorder

	workOrderID INT auto_increment, 
	startDate DATE,
	endDate DATE,
    typ INT(1),  #1 = Under förhandling / 2 = Pågående / 3 = Genomförd
    
    dNr INT(2), #distance number
    
    PRIMARY KEY (workOrderID),
    
    FOREIGN KEY (dNr) REFERENCES distance(nr)
         
)engine=innodb;
     
INSERT INTO workOrder (workOrderID,startDate,endDate,typ,dNr) VALUE ('','2017-06-15','2017-06-15', '1', '21');
     
     
CREATE TABLE anv( #Användare
    
    pnr CHAR(12),
    passw VARCHAR(20),
    usern VARCHAR(20),
    aNamn VARCHAR(20),
    aMail VARCHAR(20),
    adress VARCHAR(30),
    tel INT(10),
    aTyp INT(1),
    
    PRIMARY KEY (pnr)
    
)engine=innodb;    

INSERT INTO anv (pnr) VALUE ('199403023634');

CREATE TABLE UndEntArb(

	aPnr CHAR(12),
	woID INT auto_increment, #WordingOrderID
    
    FOREIGN KEY(aPnr) REFERENCES anv(pnr),
    FOREIGN KEY(woID) REFERENCES workOrder(workOrderID)

)engine=innodb;    

CREATE TABLE inaccessible(
	
    iPnr CHAR(12),
	iStart date,
    iEnd date,

	FOREIGN KEY(ipnr) REFERENCES anv(pnr)

)engine=innodb;

INSERT INTO inaccessible (iPnr, iStart, iEnd) VALUE ('199403023634','2017-06-15','2017-06-15');



DELIMITER //
CREATE PROCEDURE Antalordrar(IN typval INT(1))
 BEGIN
 SELECT * 
 FROM workOrder
 WHERE workOrderID = typval;
 END //
DELIMITER ;

CALL AntalOrdrar('1');
    