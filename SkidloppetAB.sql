drop database KapishAB;
create database KapishAB;
use KapishAB;

CREATE TABLE orter(


	oOrt VARCHAR(30),
    oStatus VARCHAR (15),
    oInfo TINYTEXT, #TINYTEXT limiterar texten till ca 255 tecken
    oDate date,
    
	PRIMARY KEY (oOrt)

)engine=innodb;

INSERT INTO orter (oOrt, oStatus, oInfo, oDate) VALUE ('Hedemora-Norrhyttan', 	'Öppen', '', '');
INSERT INTO orter (oOrt, oStatus, oInfo, oDate) VALUE ('Norrhyttan-Bondhyttan', 	'Öppen', '', '');
INSERT INTO orter (oOrt, oStatus, oInfo, oDate) VALUE ('Bondhyttan-Bomannbo', 	'Öppen', '', '');
INSERT INTO orter (oOrt, oStatus, oInfo, oDate) VALUE ('Bomannbo-Smedjebacken', 	'Stängd', 		'Översvämmat spår', '2018-01-14');
INSERT INTO orter (oOrt, oStatus, oInfo, oDate) VALUE ('Smedjebacken-Björsjö', 	'Under arbete', 'Träd över stigen', '2017-12-21');
INSERT INTO orter (oOrt, oStatus, oInfo, oDate) VALUE ('Björsjö-Grängesberg', 	'öppen', '', '');




CREATE TABLE report( #DELSTRÄCKA!

	rID INT auto_increment,
    rMail VARCHAR(30),
    rName VARCHAR(30), # "R" i Rname står för report
    rDescr TINYTEXT, #Beskriving om var problemet skedde #Tinytext limiterar tecknen till max 255. 
    probChoice VARCHAR(30), #Problemval
	rOrt VARCHAR(30),
    
    FOREIGN KEY (rOrt) REFERENCES orter(oOrt),    
	PRIMARY KEY (rID)
    
    
)engine=innodb;

INSERT INTO report (rMail, rName, rDescr, probChoice, rOrt) VALUE ('mail@mail.com', 'Kurt', 'Död björn ligger på spåret', '', 'Hedemora-Norrhyttan');

SELECT rMail AS Mail, rName AS Namn, rDescr AS Beskrivning, probChoice AS Problembeskrivning, rOrt AS Ort FROM report;

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

	uPnr CHAR(12),
	woID INT auto_increment, #WordingOrderID
    
    FOREIGN KEY(uPnr) REFERENCES anv(aPnr),
    FOREIGN KEY(woID) REFERENCES workOrder(wWorkOrderID)

)engine=innodb;    

CREATE TABLE inaccessible(
	
    iPnr CHAR(12),
	iStart date,
    iEnd date,

	FOREIGN KEY(ipnr) REFERENCES anv(aPnr)

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

#CALL AntalOrdrar('1');
    