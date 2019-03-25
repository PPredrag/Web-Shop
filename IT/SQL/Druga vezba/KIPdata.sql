INSERT into P VALUES('p1','B.Copic',2,'Jugoslavija');
INSERT into P VALUES('p2','M.Benson',1,'Engleska');
INSERT into P VALUES('p3','B.Sljivic-Simsic',1,'Jugoslavija');
INSERT into P VALUES('p4','D.Maksimovic',2,'Jugoslavija');
INSERT into P VALUES('p5','C.J.Date',1,'Amerika');

INSERT into K VALUES('k1','Osma ofanziva','roman');
INSERT into K VALUES('k2','Nemam vise vremena','poezija');
INSERT into K VALUES('k3','Pionirska trilogija','roman');
INSERT into K VALUES('k4','Srpskohrvatsko-engleski recnik','leksikografija');
INSERT into K VALUES('k5','An Introduction to Database Systems','racunarstvo');
INSERT into K VALUES('k6','Trazim pomilovanje','poezija');

INSERT into I VALUES('i1','Prosveta',30,'Jugoslavija');
INSERT into I VALUES('i2','Addison Wesley',20,'Amerika');
INSERT into I VALUES('i3','Decje novine',10,'Jugoslavija');
INSERT into I VALUES('i4','Matica srpska',30,'Jugoslavija');


INSERT into KI VALUES('k1','i1',2,1965,10000);
INSERT into KI VALUES('k2','i1',2,1974,7000);
INSERT into KI VALUES('k3','i1',1,1975,10000);
INSERT into KI VALUES('k4','i1',2,1979,10000);
INSERT into KI VALUES('k5','i2',4,1986,5000);
INSERT into KI VALUES('k6','i3',1,1966,3000);
INSERT into KI VALUES('k6','i4',3,1988,5000);
  
INSERT into KP VALUES('k1','p1',1);
INSERT into KP VALUES('k2','p4',1);
INSERT into KP VALUES('k3','p1',1);
INSERT into KP VALUES('k4','p2',1);
INSERT into KP VALUES('k4','p3',2);
INSERT into KP VALUES('k5','p5',1);
INSERT into KP VALUES('k6','p4',1);