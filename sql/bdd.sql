
CREATE TABLE date
(
  id_date INTEGER NOT NULL AUTO_INCREMENT,
  date    DATE    NOT NULL,
  PRIMARY KEY (id_date)
);

ALTER TABLE date
  ADD CONSTRAINT UQ_id_date UNIQUE (id_date);

CREATE TABLE person
(
  id_person  INTEGER     NOT NULL AUTO_INCREMENT,
  name       VARCHAR(10) NOT NULL,
  first_name VARCHAR(25) NOT NULL,
  email      VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_person)
);

ALTER TABLE person
  ADD CONSTRAINT UQ_id_person UNIQUE (id_person);

ALTER TABLE person
  ADD CONSTRAINT UQ_email UNIQUE (email);

CREATE TABLE reservation
(
  id_reservation INTEGER NOT NULL AUTO_INCREMENT,
  horaire        TIME    NOT NULL,
  id_weapon      INTEGER NOT NULL,
  id_date        INTEGER NOT NULL,
  id_person      INTEGER NOT NULL,
  PRIMARY KEY (id_reservation)
);

ALTER TABLE reservation
  ADD CONSTRAINT UQ_id_reservation UNIQUE (id_reservation);

CREATE TABLE skin
(
  id_skin INTEGER     NOT NULL AUTO_INCREMENT,
  name    VARCHAR(25) NOT NULL,
  PRIMARY KEY (id_skin)
);

ALTER TABLE skin
  ADD CONSTRAINT UQ_id_skin UNIQUE (id_skin);

CREATE TABLE weapon
(
  id_weapon INTEGER     NOT NULL AUTO_INCREMENT,
  name      VARCHAR(25) NOT NULL,
  type      VARCHAR(30) NOT NULL,
  PRIMARY KEY (id_weapon)
);

ALTER TABLE weapon
  ADD CONSTRAINT UQ_id_weapon UNIQUE (id_weapon);

CREATE TABLE weapon_skin
(
  id_weapon_decoration INTEGER NOT NULL AUTO_INCREMENT,
  id_skin              INTEGER NOT NULL,
  id_weapon            INTEGER NOT NULL,
  PRIMARY KEY (id_weapon_decoration)
);

ALTER TABLE weapon_skin
  ADD CONSTRAINT UQ_id_weapon_decoration UNIQUE (id_weapon_decoration);

ALTER TABLE weapon_skin
  ADD CONSTRAINT FK_skin_TO_weapon_skin
    FOREIGN KEY (id_skin)
    REFERENCES skin (id_skin);

ALTER TABLE weapon_skin
  ADD CONSTRAINT FK_weapon_TO_weapon_skin
    FOREIGN KEY (id_weapon)
    REFERENCES weapon (id_weapon);

ALTER TABLE reservation
  ADD CONSTRAINT FK_weapon_TO_reservation
    FOREIGN KEY (id_weapon)
    REFERENCES weapon (id_weapon);

ALTER TABLE reservation
  ADD CONSTRAINT FK_date_TO_reservation
    FOREIGN KEY (id_date)
    REFERENCES date (id_date);

ALTER TABLE reservation
  ADD CONSTRAINT FK_person_TO_reservation
    FOREIGN KEY (id_person)
    REFERENCES person (id_person);
