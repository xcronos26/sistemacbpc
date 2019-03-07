CREATE TABLE mensageiro (
  id_mensageiro INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  igreja_id_igreja INTEGER UNSIGNED NOT NULL,
  nome_mensageiro VARCHAR(40) not NULL,
  cpf_mensageiro VARCHAR(40) not NULL,
  email_mensageiro VARCHAR(40) NULL,
  tel_mensageiro VARCHAR(40) NULL,
  val_mensageiro VARCHAR(40) NULL,
  responsavel_m VARCHAR(40) not NULL,
  PRIMARY KEY(id_mensageiro),
  INDEX mensageiro_FKIndex1(igreja_id_igreja)
);

CREATE TABLE igrejas_asb2019 (
  id_igreja INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_igreja VARCHAR(35) not NULL,
  pastor_igreja VARCHAR(35) not NULL,
  responsavel_c VARCHAR(35) not NULL,
  PRIMARY KEY(id_igreja)
);



CREATE TABLE sessao_asb2019 (
  id_sessao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  n_id_mensageiro INTEGER UNSIGNED NOT NULL,
  sessao_n VARCHAR(35) not NULL,
  responsavel_c VARCHAR(35) not NULL,
    PRIMARY KEY (id_sessao),
    INDEX mensageiro_FKIndex1(n_id_mensageiro)
);


CREATE TABLE eleicao_asb2019(
    id_eleicao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    no_id_mensageiro INTEGER UNSIGNED NOT NULL,
    responsavel VARCHAR(35) NOT NULL,
    n_votos VARCHAR (35) NOT NULL,
    PRIMARY KEY (id_eleicao),
    INDEX mensageiro_FKIndex1(no_id_mensageiro)
);
