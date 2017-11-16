drop database KapishAB;
create database KapishAB;
use KapishAB;

CREATE TABLE report( #DELSTRÄCKA!

	#rID INT auto_increment,
    rMail VARCHAR(30),
    rName VARCHAR(30), # "R" i Rname står för report
    rDescr TINYTEXT, #Beskriving om var problemet skedde #Tinytext limiterar tecknen till max 255. 
    probChoice VARCHAR(30), #Problemval
	rOrt VARCHAR(20),
    
	PRIMARY KEY (rMail)
    
)engine=innodb;

insert into report (rMail, rName, rDescr, probChoice, rOrt) value ('mail@mail.com', 'Kurt', 'Död björn ligger på spåret', '', '');


CREATE TABLE news(
	
    nID INT,
    nDate DATE,
    article TINYTEXT,
    nHeader VARCHAR(20),
    nOrt VARCHAR(30), #etapp
    
    PRIMARY KEY (nID)
    
)engine=innodb;
    
CREATE TABLE feedback(

	fbID INT auto_increment,
    fb int(1), #1-4 i nöjdhetsgrad
    fbComment TINYTEXT,
    
    PRIMARY KEY (fbID)
    
)engine=innodb;
    

    
CREATE TABLE workOrder( #arbetsorder

	wWorkOrderID INT auto_increment, 
	wStartDate DATE,
	wEndDate DATE,
    wTyp INT(1),  #1 = Under förhandling / 2 = Pågående / 3 = Genomförd
    
    WdNr INT(2), #Delsträckenummer
    
    PRIMARY KEY (wWorkOrderID)
    
    
         
)engine=innodb;
     
INSERT INTO workOrder (wWorkOrderID,wStartDate,wEndDate,wTyp,WdNr) VALUE ('','2017-06-15','2017-06-15', '1', '21');
     
     
CREATE TABLE anv( #Användare
    
    aPnr CHAR(12),
    aPassw VARCHAR(20),
    aUsern VARCHAR(20),
    aNamn VARCHAR(20),
    aMail VARCHAR(20),
    aAdress VARCHAR(30),
    aTel INT(10),
    aTyp INT(1),
    
    PRIMARY KEY (aPnr)
    
)engine=innodb;    

INSERT INTO anv (aPnr) VALUE ('199403023634');

CREATE TABLE UndEntArb(

	aPnr CHAR(12),
	woID INT auto_increment, #WordingOrderID
    
    FOREIGN KEY(aPnr) REFERENCES anv(pnr),
    FOREIGN KEY(woID) REFERENCES workOrder(wWorkOrderID)

)engine=innodb;    

CREATE TABLE inaccessible(
	
    iPnr CHAR(12),
	iStart date,
    iEnd date,

	FOREIGN KEY(ipnr) REFERENCES anv(pnr)

)engine=innodb;

INSERT INTO inaccessible (iPnr, iStart, iEnd) VALUE ('199403023634','2017-06-15','2017-06-15');

CREATE TABLE orter(

	oID INT (1),
	oOrt VARCHAR(20),
    oStatus VARCHAR (15),
    oInfo TINYTEXT, #TINYTEXT limiterar texten till ca 255 tecken
    oDate date,
    
	PRIMARY KEY (oID)

)engine=innodb;

INSERT INTO orter (oID, oOrt, oStatus, oInfo, oDate) VALUE ('1', 'Hedemora', 	'Öppen', '', '');
INSERT INTO orter (oID, oOrt, oStatus, oInfo, oDate) VALUE ('2', 'Norrhyttan', 	'Öppen', '', '');
INSERT INTO orter (oID, oOrt, oStatus, oInfo, oDate) VALUE ('3', 'Bondhyttan', 	'Öppen', '', '');
INSERT INTO orter (oID, oOrt, oStatus, oInfo, oDate) VALUE ('4', 'Bomannbo', 	'Stängd', 'Översvämmat spår', '2018-01-14');
INSERT INTO orter (oID, oOrt, oStatus, oInfo, oDate) VALUE ('5', 'Smedjebacken', 'Under arbete', 'Träd över stigen', '2017-12-21');
INSERT INTO orter (oID, oOrt, oStatus, oInfo, oDate) VALUE ('6', 'Björsjö', 'öppen', '', '');



DELIMITER //
CREATE PROCEDURE Antalordrar(IN typval INT(1))
 BEGIN
 SELECT * 
 FROM workOrder
 WHERE workOrderID = typval;
 END //
DELIMITER ;

#CALL AntalOrdrar('1');
    