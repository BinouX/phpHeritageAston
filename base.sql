#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: aston_classe
#------------------------------------------------------------

CREATE TABLE aston_classe(
        id_classe       int (11) Auto_increment  NOT NULL ,
        name_classe     Varchar (25) NOT NULL ,
        com_classe      Text NOT NULL ,
        delegue1_classe Int ,
        delegue2_classe Int ,
        PRIMARY KEY (id_classe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_administrator
#------------------------------------------------------------

CREATE TABLE aston_administrator(
        id_administrator        int (11) Auto_increment  NOT NULL ,
        firstname_administrator Varchar (25) NOT NULL ,
        lastename_administrator Varchar (25) NOT NULL ,
        PRIMARY KEY (id_administrator )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_teacher
#------------------------------------------------------------

CREATE TABLE aston_teacher(
        id_teacher        int (11) Auto_increment  NOT NULL ,
        firstname_teacher Varchar (25) NOT NULL ,
        lastname_teacher  Varchar (25) NOT NULL ,
        PRIMARY KEY (id_teacher )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_student
#------------------------------------------------------------

CREATE TABLE aston_student(
        id_personne       int (11) Auto_increment  NOT NULL ,
        firstname_student Varchar (25) NOT NULL ,
        lastname_student  Varchar (25) NOT NULL ,
        PRIMARY KEY (id_personne )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_note
#------------------------------------------------------------

CREATE TABLE aston_note(
        id_note   int (11) Auto_increment  NOT NULL ,
        note_note Varchar (25) ,
        com_note  Text ,
        coef_note Int ,
        PRIMARY KEY (id_note )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_commentaire_classe
#------------------------------------------------------------

CREATE TABLE aston_commentaire_classe(
        id_commentaire  int (11) Auto_increment  NOT NULL ,
        com_commentaire Text NOT NULL ,
        id_teacher      Int ,
        PRIMARY KEY (id_commentaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_enseigner
#------------------------------------------------------------

CREATE TABLE aston_enseigner(
        id_teacher Int NOT NULL ,
        id_classe  Int NOT NULL ,
        PRIMARY KEY (id_teacher ,id_classe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_etudier
#------------------------------------------------------------

CREATE TABLE aston_etudier(
        id_personne Int NOT NULL ,
        id_classe   Int NOT NULL ,
        id_note     Int NOT NULL ,
        PRIMARY KEY (id_personne ,id_classe ,id_note )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_noter
#------------------------------------------------------------

CREATE TABLE aston_noter(
        id_classe Int NOT NULL ,
        id_note   Int NOT NULL ,
        PRIMARY KEY (id_classe ,id_note )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_commenter
#------------------------------------------------------------

CREATE TABLE aston_commenter(
        id_classe      Int NOT NULL ,
        id_commentaire Int NOT NULL ,
        PRIMARY KEY (id_classe ,id_commentaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: aston_dater
#------------------------------------------------------------

CREATE TABLE aston_dater(
        date_dater       Date ,
        id_administrator Int NOT NULL ,
        id_note          Int NOT NULL ,
        PRIMARY KEY (id_administrator ,id_note )
)ENGINE=InnoDB;

ALTER TABLE aston_enseigner ADD CONSTRAINT FK_aston_enseigner_id_teacher FOREIGN KEY (id_teacher) REFERENCES aston_teacher(id_teacher);
ALTER TABLE aston_enseigner ADD CONSTRAINT FK_aston_enseigner_id_classe FOREIGN KEY (id_classe) REFERENCES aston_classe(id_classe);
ALTER TABLE aston_etudier ADD CONSTRAINT FK_aston_etudier_id_personne FOREIGN KEY (id_personne) REFERENCES aston_student(id_personne);
ALTER TABLE aston_etudier ADD CONSTRAINT FK_aston_etudier_id_classe FOREIGN KEY (id_classe) REFERENCES aston_classe(id_classe);
ALTER TABLE aston_etudier ADD CONSTRAINT FK_aston_etudier_id_note FOREIGN KEY (id_note) REFERENCES aston_note(id_note);
ALTER TABLE aston_noter ADD CONSTRAINT FK_aston_noter_id_classe FOREIGN KEY (id_classe) REFERENCES aston_classe(id_classe);
ALTER TABLE aston_noter ADD CONSTRAINT FK_aston_noter_id_note FOREIGN KEY (id_note) REFERENCES aston_note(id_note);
ALTER TABLE aston_commenter ADD CONSTRAINT FK_aston_commenter_id_classe FOREIGN KEY (id_classe) REFERENCES aston_classe(id_classe);
ALTER TABLE aston_commenter ADD CONSTRAINT FK_aston_commenter_id_commentaire FOREIGN KEY (id_commentaire) REFERENCES aston_commentaire_classe(id_commentaire);
ALTER TABLE aston_dater ADD CONSTRAINT FK_aston_dater_id_administrator FOREIGN KEY (id_administrator) REFERENCES aston_administrator(id_administrator);
ALTER TABLE aston_dater ADD CONSTRAINT FK_aston_dater_id_note FOREIGN KEY (id_note) REFERENCES aston_note(id_note);
