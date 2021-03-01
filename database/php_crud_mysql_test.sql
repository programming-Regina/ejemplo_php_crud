DROP TABLE `articulos`; DROP TABLE `categoria`;    
    CREATE TABLE `articulos` (
      `codigo` smallint(6) NOT NULL,
      `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
      `categoria` tinyint(4) NOT NULL,
      `precio` double NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
    
    --
    -- Volcado de datos para la tabla `articulos`
    --
    
    INSERT INTO `articulos` (`codigo`, `nombre`, `categoria`, `precio`) VALUES
    (1, 'PANTALON OXFORD DE FIESTA', 1, 1500),
    (2, 'PANTALON GABARDINA CARGO', 1, 1200),
    (4, 'CAMISA MANGA LARGA MAO', 2, 800),
    (5, 'BLUSA ESTAMPADA GASA', 2, 1500),
    (6, 'CAMISA RAYAS TRADICIONAL', 2, 1000),
    (7, 'CAMISA KIMONO FLORES', 2, 2300),
    (8, 'CAMISA CUADRILLE MANGA CORTA', 2, 1300),
    (9, 'CAMISA BASICA BLANCA', 2, 1120),
    (10, 'CAMISA BASICA NEGRA', 2, 1100),
    (11, 'CAMISA BASICA GRIS', 2, 1000),
    (12, 'CAMISA BASICA ROSA', 2, 1000),
    (13, 'CAMISA BASICA BEIGE', 2, 1000),
    (15, 'CAMISA BASICA NARANJA', 2, 1000),
    (16, 'CAMISA BASICA VERDE LIMA', 2, 1000),
    (17, 'CAMISA BASICA GRIS OSCURO', 2, 1000),
    (18, 'PANTALON BERMUDA NEGRO', 1, 1300),
    (19, 'PANTALON CARGO VERDE MILITAR', 1, 2000),
    (26, 'GORRA VISERA LISA NEGRA', 4, 700),
    (28, 'CAMISA CUADRILLE MANGA CORTA', 1, 2333),
    (30, 'GORRA VISERA LISA NEGRA', 1, 2365.33),
    (32, 'CAMISA CUADRILLE MANGA CORTA', 1, 2000),
    (33, 'CAMISA CUADRILLE MANGA CORTA', 2, 123.21),
    (34, 'CAMISA CUADRILLE MANGA CORTA', 1, 2525.25);
    
    CREATE TABLE `categoria` (
      `categ_id` tinyint(4) NOT NULL,
      `categoria` varchar(40) COLLATE utf8_spanish_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
    
   
    INSERT INTO `categoria` (`categ_id`, `categoria`) VALUES
    (1, 'PANTALONES'),
    (2, 'CAMISAS / BLUSAS'),
    (3, 'FALDAS / VESTIDOS'),
    (4, 'DEPORTIVO');
   
    ALTER TABLE `articulos`
      ADD PRIMARY KEY (`codigo`),
      ADD KEY `categoria` (`categoria`);
    
   
    ALTER TABLE `categoria`
      ADD PRIMARY KEY (`categ_id`);
    
    --
    -- AUTO_INCREMENT de las tablas volcadas
    --
    
    --
    -- AUTO_INCREMENT de la tabla `articulos`
    --
    ALTER TABLE `articulos`
      MODIFY `codigo` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
    
    --
    -- Restricciones para tablas volcadas
    --
    
    --
    -- Filtros para la tabla `articulos`
    --
    ALTER TABLE `articulos`
      ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`categ_id`) ON DELETE CASCADE ON UPDATE CASCADE;
    COMMIT;
   