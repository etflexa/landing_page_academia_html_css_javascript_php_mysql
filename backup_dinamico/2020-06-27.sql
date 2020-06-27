-- TABLE: clientes
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`) VALUES ('2', 'Eduardo Teixeira', 'teixeira_wifi@hotmail.com', '(96) 99179-2845');
INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`) VALUES ('4', 'Luiza de Souza Campos', 'luiza23ap@gmail.com', '(96)981665433');
INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`) VALUES ('5', 'RogÃ©rio da Silva Castro', 'rogerap@hotmail.com', '(96) 99179-2845');
INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`) VALUES ('6', 'Jurema da silva Peterson', 'jujubr@gmail.com', '(98)981556634');

