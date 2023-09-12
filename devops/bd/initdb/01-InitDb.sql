CREATE DATABASE IF NOT EXISTS bd_pw;

USE bd_pw;

CREATE TABLE IF NOT EXISTS endereco (
  id_end INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  pais_end VARCHAR(45),
  cidade_end VARCHAR(100),
  bairro_end VARCHAR(100),
  cep_end VARCHAR(45),
  rua_end VARCHAR(300),
  numero_end INT
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS cliente (
  id_cli INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_cli VARCHAR(45),
  telefone_cli VARCHAR(45),
  email_cli VARCHAR(45),
  genero_cli VARCHAR(45),
  id_end_fk INT,
  FOREIGN KEY (id_end_fk) REFERENCES endereco (id_end)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS fornecedor (
  id_forn INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cnpj_forn VARCHAR(45),
  razao_social_forn VARCHAR(200),
  nome_fantasia_forn VARCHAR(200),
  id_end_fk INT,
  FOREIGN KEY (id_end_fk) REFERENCES endereco (id_end)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS funcionario (
  id_func INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_func VARCHAR(45),
  data_nascimento_func DATE,
  email_func VARCHAR(200),
  cpf_func VARCHAR(45),
  telefone_func VARCHAR(45),
  genero_func VARCHAR(45),
  id_end_fk INT,
  FOREIGN KEY (id_end_fk) REFERENCES endereco (id_end)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS produto (
  id_prod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_prod VARCHAR(45),
  valor_prod FLOAT,
  estoque_prod INT
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS pedido (
  id_ped INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  valor_produtos_ped FLOAT,
  desconto_ped FLOAT,
  valor_final_ped FLOAT,
  id_func_fk INT NOT NULL,
  id_cli_fk INT,
  FOREIGN KEY (id_func_fk) REFERENCES funcionario (id_func),
  FOREIGN KEY (id_cli_fk) REFERENCES cliente (id_cli)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS pedido_produto (
  id_ped_prod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_ped_fk INT NOT NULL,
  id_prod_fk INT NOT NULL,
  valor_un_ped_prod FLOAT,
  quantidade_ped_prod FLOAT,
  FOREIGN KEY (id_ped_fk) REFERENCES pedido (id_ped),
  FOREIGN KEY (id_prod_fk) REFERENCES produto (id_prod)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS promocao (
  id_promo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data_inicio_promo DATE,
  data_final_promo DATE
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS promocao_produto (
  id_promo_prod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_promo_fk INT NOT NULL,
  id_prod_fk INT NOT NULL,
  valor_und_promo_prod FLOAT,
  desconto_promo_prod FLOAT,
  FOREIGN KEY (id_promo_fk) REFERENCES promocao (id_promo),
  FOREIGN KEY (id_prod_fk) REFERENCES produto (id_prod)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS endereco (
  id_end INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  pais_end VARCHAR(45) NOT NULL,
  codigo_postal_end VARCHAR(45) NOT NULL,
  uf_end VARCHAR(2) NOT NULL,
  cidade_end VARCHAR(45) NOT NULL,
  rua_end VARCHAR(45) NOT NULL,
  numero_end INT NOT NULL,
  bairro_end VARCHAR(45) NOT NULL,
  complemento_end VARCHAR(45)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS cliente (
  id_cli INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_cli VARCHAR(200) NOT NULL,
  data_nascimento_cli DATE NOT NULL,
  cpf_cli VARCHAR(11) NOT NULL,
  rg_cli VARCHAR(30) NOT NULL,
  cnh_cli VARCHAR(30) NOT NULL,
  email_cli VARCHAR(45) NOT NULL,
  telefone_cli VARCHAR(45) NOT NULL,
  genero_cli VARCHAR(45) NOT NULL,
  id_end_fk INT
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS veiculo (
  id_vei INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  modelo_vei VARCHAR(45) NOT NULL,
  marca_vei VARCHAR(45) NOT NULL,
  ano_vei INT NOT NULL,
  placa_vei VARCHAR(45) NOT NULL,
  numero_chassi_vei VARCHAR(45) NOT NULL,
  cor_vei VARCHAR(45) NOT NULL,
  data_compra_vei DATE NOT NULL,
  descricao_vei VARCHAR(200) NOT NULL
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS funcionario (
  id_func INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_func VARCHAR(300) NOT NULL,
  data_nascimento_func DATE NOT NULL,
  cpf_func VARCHAR(11) NOT NULL,
  rg_func VARCHAR(45) NOT NULL,
  email_func VARCHAR(45) NOT NULL,
  telefone_func VARCHAR(45) NOT NULL,
  genero_func VARCHAR(45),
  id_end_fk INT
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS locacao (
  id_loc INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data_locacao_loc DATETIME NOT NULL,
  data_devolucao_prevista DATETIME NOT NULL,
  data_devolucao_efetivada DATE,
  status_loc TINYINT NOT NULL,
  id_vei_fk INT,
  id_fun_fk INT,
  FOREIGN KEY (id_vei_fk) REFERENCES veiculo (id_vei),
  FOREIGN KEY (id_fun_fk) REFERENCES funcionario (id_func)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS cliente_locacao (
  id_cli_loc INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_cli_fk INT NOT NULL,
  id_loc_fk INT NOT NULL,
  FOREIGN KEY (id_cli_fk) REFERENCES cliente (id_cli),
  FOREIGN KEY (id_loc_fk) REFERENCES locacao (id_loc)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS produto (
  id_prod INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nome_prod VARCHAR(60),
  preco_prod DOUBLE,
  estoque_prod DOUBLE
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS fornecedor (
  id_forn INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cnpj_forn VARCHAR(20),
  razao_social_forn VARCHAR(45),
  nome_fantasia_forn VARCHAR(45),
  email_forn VARCHAR(60),
  telefone_forn VARCHAR(45),
  id_end_fk INT,
  FOREIGN KEY (id_end_fk) REFERENCES endereco (id_end)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS compra (
  id_com INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data_compra_com DATE,
  numero_nota_com VARCHAR(45),
  id_prod_fk INT,
  id_forn_fk INT,
  FOREIGN KEY (id_prod_fk) REFERENCES produto (id_prod),
  FOREIGN KEY (id_forn_fk) REFERENCES fornecedor (id_forn)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS pagamento (
  id_pag INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  descricao_pag VARCHAR(200) NOT NULL,
  valor_pag DOUBLE,
  data_vencimento_pag DATE,
  data_credenciamento_pag DATE,
  credor_pag VARCHAR(45),
  parcelas_pag INT,
  id_com_fk INT,
  FOREIGN KEY (id_com_fk) REFERENCES compra (id_com)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS recebimento (
  id_rec INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  descricao_rec VARCHAR(200) NOT NULL,
  valor_rec DOUBLE,
  data_vencimento_rec DATE,
  data_credenciamento_rec DATE,
  pagador_rec VARCHAR(200) NOT NULL,
  parcelas_rec INT,
  id_loc_fk INT,
  FOREIGN KEY (id_loc_fk) REFERENCES locacao (id_loc)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS parcela (
  id_par INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  data_vencimento_par DATE NOT NULL,
  valor_par DOUBLE NOT NULL,
  forma_pagamento_par VARCHAR(45),
  numero_parcela_par INT,
  tipo_parcela_par VARCHAR(45),
  status_par TINYINT,
  id_rec_fk INT,
  id_pag_fk INT,
  FOREIGN KEY (id_rec_fk) REFERENCES recebimento (id_rec),
  FOREIGN KEY (id_pag_fk) REFERENCES pagamento (id_pag)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;

CREATE TABLE IF NOT EXISTS usuario (
  id_usua INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  usuario_usua VARCHAR(45) NOT NULL,
  senha_usua VARCHAR(45) NOT NULL,
  id_func_fk INT,
  FOREIGN KEY (id_func_fk) REFERENCES funcionario (id_func)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;