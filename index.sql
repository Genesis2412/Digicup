CREATE DATABASE befrienders;

CREATE TABLE home(
    ID 	            INTEGER			NOT NULL AUTO_INCREMENT PRIMARY KEY,
    sec_name	    VARCHAR(40)	    NOT NULL,
    image	        VARCHAR(255),	
    description     VARCHAR(8000),
    link            VARCHAR(200),

    
);


INSERT INTO home(ID,sec_name,image,description,link)
VALUES
    (1,'banner','./img/1.jpg','',''),
    (2,'banner','./img/2.jpg','',''),
    (3,'banner','./img/3.jpg','',''),
    (4,'aboutus','./img/president.png',"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.",'This is a quote'),
    (5,'ourteam','./img/grouppic.jpg',"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",''),
    (6,'ourpromise','','Our mission is to be a principal resource in emotional support delivered by volunteers. We value giving a person the opportunity to explore feelings which can cause distress, the importance of being listened to, in confidence, anonymously. We believe in the capacity for each person to build up his resilience and take fundamental descisions about his own life.','OUR MISSION'),
    (7,'ourpromise','','A society in which nobody dies by suicide, where people are able to explore their own feelings, acknowledge and respect the feelings of others.','OUR VISION'),
    (8,'ourpromise','','Our values are based on these beliefs. The importance of having the opportunity to express painful feelings. That being listened to, in confidence and accepted without prejudice can alleviate despair and suicidal feelings.','OUR VALUES'),
    (9,'getintouch','','1st Floor Flat, 152 Royal Road, Beau Bassin','Address'),
    (10,'getintouch','','+230 8009393','HOTLINE'),
    (11,'getintouch','','+230 4670160','Phone'),
    (12,'getintouch','','+230 54837233','Whatsapp'),
    (13,'getintouch','','adminofficer.befrienders@gmail.com','Email');

