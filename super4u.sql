  -- phpMyAdmin SQL Dump
  -- version 5.0.2
  -- https://www.phpmyadmin.net/
  --
  -- Host: localhost
  -- Tempo de geração: 16-May-2021 às 17:59
  -- Versão do servidor: 10.4.11-MariaDB
  -- versão do PHP: 7.4.6

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";


  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Banco de dados: `super4u`
  --

  -- --------------------------------------------------------

  --
  -- Estrutura da tabela `materia_prima`
  --
  CREATE SCHEMA super4u;
  USE super4u;

  CREATE TABLE `materia_prima` (
    `idmateriaprima` int(11) NOT NULL,
    `descricao` varchar(45) NOT NULL,
    `quantidade` float(10,2) NOT NULL,
    `unidade` varchar(45) NOT NULL

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Extraindo dados da tabela `materia_prima`
  --

  INSERT INTO `materia_prima` (`idmateriaprima`, `descricao`, `quantidade`, `unidade`) VALUES
  (1, 'Clipe metálico para grampo de madeira', '45000', 'Unidades'),
  (2, 'Faces para grampo de madeira', '93000', 'Unidades'),
  (3, 'Cabo para vassoura', '6000', 'Unidades'),
  (4, 'Cerdas para vassoura', '12000', 'Unidades');

  -- --------------------------------------------------------


  -- Estrutura da tabela filiais (ver tipos e nomes)
  CREATE TABLE `filiais` (
    `idfilial` INT(11) NOT NULL,
    `descricao` varchar(100) NULL,
    `ocupacao` float(10,2) NULL,
    `capacidade` float(10,2) NULL
  )ENGINE=InnoDB;

  INSERT INTO `filiais` (`idfilial`, `descricao`, `ocupacao`, `capacidade`) VALUES
  (1, 'Curitiba - Paraná', '0', '100000'),
  (2, 'São José dos Pinhais', '0', '200000'),
  (3, 'Pato Branco', '0', '900'),
  (4, 'Londrina', '0', '850'),
  (5, 'Paranaguá', '0', '78500000'),
  (6, 'Ponta Grossa', '0', '7851');


  --
  -- Estrutura da tabela `perfil_usuario`
  --

  CREATE TABLE `perfil_usuario` (
    `idperfil_usuario` int(11) NOT NULL,
    `perfil` varchar(45) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Extraindo dados da tabela `perfil_usuario`
  --

  INSERT INTO `perfil_usuario` (`idperfil_usuario`, `perfil`) VALUES
  (1, 'Administradores'),
  (2, 'Almoxarifes'),
  (3, 'Compradores'),
  (4, 'Engenheiros de Produção'),
  (5, 'Gerente');

  -- --------------------------------------------------------

  --
  -- Estrutura da tabela `produtos`
  --

  CREATE TABLE `produtos` (
    `idprodutos` int(11) NOT NULL,
    `descricao` varchar(45) NOT NULL,
    `quantidade` float(10,2) NOT NULL,
    `unidade` varchar(45) NOT NULL,
    `idfilial` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Extraindo dados da tabela `produtos`
  --

  INSERT INTO `produtos` (`idprodutos`, `descricao`, `quantidade`,  `idfilial`, `unidade`) VALUES
  (1, 'Grampos de roupa', '50000', 1, 'Unidades'),
  (2, 'Vassoura', '10000', 2, 'Unidades'),
  (3, 'Vassoura', '10000', 4, 'Unidades');

  -- --------------------------------------------------------

  --
  -- Estrutura da tabela `produtos_x_materia_prima`
  --

  CREATE TABLE `produtos_x_materia_prima` (
    `produtos_id` int(11) NOT NULL,
    `materia_prima_id` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Extraindo dados da tabela `produtos_x_materia_prima`
  --

  INSERT INTO `produtos_x_materia_prima` (`produtos_id`, `materia_prima_id`) VALUES
  (1, 1),
  (1, 2),
  (2, 3),
  (2, 4);

  -- --------------------------------------------------------

  --
  -- Estrutura da tabela `usuarios`
  --

  CREATE TABLE `usuarios` (
    `idusuarios` int(11) NOT NULL,
    `usuario` varchar(45) NOT NULL,
    `senha` varchar(45) NOT NULL,
    `perfil_usuario_id` int(11) NOT NULL,
    `idfilial` int(11) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

  --
  -- Extraindo dados da tabela `usuarios`
  --

  INSERT INTO `usuarios` (`idusuarios`, `usuario`, `senha`, `perfil_usuario_id`, `idfilial`) VALUES
  (1, 'admin@super4u.com', 'a', 1, 1),
  (2, 'almoxarife@super4u.com', 'almoxarifeAsd123!.', 2, 2),
  (3, 'comprador@super4u.com', 'compradorAsd123!.', 3, 3),
  (4, 'engprod@super4u.com', 'engprodAsd123!.', 4, 4),
  (5, 'gerente@super4u.com', 'gerenteAsd123!.', 5, 5);

  -- --------------------------------------------------------
  --
  -- Índices para tabelas despejadas
  --

  --
  -- Índices para tabela `materia_prima`
  --
  ALTER TABLE `materia_prima`
    ADD PRIMARY KEY (`idmateriaprima`);

  --
  -- Índices para tabela `perfil_usuario`
  --
  ALTER TABLE `perfil_usuario`
    ADD PRIMARY KEY (`idperfil_usuario`);

  --
  -- Índices para tabela `filiais`
  --
  ALTER TABLE `filiais`
    ADD PRIMARY KEY (`idfilial`);

  --
  -- Índices para tabela `produtos`
  --
  ALTER TABLE `produtos`
    ADD PRIMARY KEY (`idprodutos`);

  --
  -- Índices para tabela `produtos_x_materia_prima`
  --
  ALTER TABLE `produtos_x_materia_prima`
    ADD PRIMARY KEY (`produtos_id`,`materia_prima_id`),
    ADD KEY `fk_produtos` (`materia_prima_id`),
    ADD KEY `fk_materia_prima` (`produtos_id`);

  --
  -- Índices para tabela `usuarios`
  --
  ALTER TABLE `usuarios`
    ADD PRIMARY KEY (`idusuarios`),
    ADD KEY `fk_usuarios_perfil_usuario_idx` (`perfil_usuario_id`);

  --
  -- AUTO_INCREMENT de tabelas despejadas
  --

  --
  -- AUTO_INCREMENT de tabela `materia_prima`
  --
  ALTER TABLE `materia_prima`
    MODIFY `idmateriaprima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

  --
  -- AUTO_INCREMENT de tabela `perfil_usuario`
  --
  ALTER TABLE `perfil_usuario`
    MODIFY `idperfil_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  --
  -- AUTO_INCREMENT de tabela `produtos`
  --
  ALTER TABLE `produtos`
    MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  --
  -- AUTO_INCREMENT de tabela `filiais`
  --
  ALTER TABLE `filiais`
    MODIFY `idfilial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  --
  -- AUTO_INCREMENT de tabela `usuarios`
  --
  ALTER TABLE `usuarios`
    MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

  --
  -- Restrições para despejos de tabelas
  --

  --
  -- Limitadores para a tabela `produtos`
  --
  ALTER TABLE `produtos`
    ADD CONSTRAINT `fk_produtos_idfilial` FOREIGN KEY (`idfilial`) REFERENCES `filiais` (`idfilial`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  --
  -- Limitadores para a tabela `produtos_x_materia_prima`
  --
  ALTER TABLE `produtos_x_materia_prima`
    ADD CONSTRAINT `fk_materia_prima` FOREIGN KEY (`materia_prima_id`) REFERENCES `materia_prima` (`idmateriaprima`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `fk_produtos` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`idprodutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

  --
  -- Limitadores para a tabela `usuarios`
  --
  ALTER TABLE `usuarios`
    ADD CONSTRAINT `fk_usuarios_perfil_usuario` FOREIGN KEY (`perfil_usuario_id`) REFERENCES `perfil_usuario` (`idperfil_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
   -- ADD CONSTRAINT `fk_usuarios_idfilial` FOREIGN KEY (`idfilial`) REFERENCES `filiais` (`idfilial`);
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
