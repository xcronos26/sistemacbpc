CREATE TABLE loguin (
  id_usr INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usr VARCHAR(50) NULL,
  senha_usr VARCHAR(50) NULL,
  PRIMARY KEY(id_usr)
);

insert INTO loguin (nome_usr, senha_usr) VALUES ('lucas','lucas')