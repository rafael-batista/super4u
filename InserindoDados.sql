INSERT INTO super4u.perfil_usuario VALUES(1, "Administradores");
INSERT INTO super4u.perfil_usuario VALUES(2, "Almoxarifes");
INSERT INTO super4u.perfil_usuario VALUES(3, "Compradores");
INSERT INTO super4u.perfil_usuario VALUES(4, "Engenheiros de Produção");
INSERT INTO super4u.perfil_usuario VALUES(5, "Gerente");

INSERT INTO super4u.usuarios  VALUES(1, "admin@super4u.com", "adminAsd123!.", 1);
INSERT INTO super4u.usuarios  VALUES(2, "almoxarife@super4u.com", "almoxarifeAsd123!.", 2);
INSERT INTO super4u.usuarios  VALUES(3, "comprador@super4u.com", "compradorAsd123!.", 3);
INSERT INTO super4u.usuarios  VALUES(4, "engprod@super4u.com", "engprodAsd123!.", 4);
INSERT INTO super4u.usuarios  VALUES(5, "gerente@super4u.com", "gerenteAsd123!.", 5);

INSERT INTO super4u.produtos VALUES(1, "Grampos de roupa", 50000);
INSERT INTO super4u.produtos VALUES(2, "Vassoura", 10000);


INSERT INTO super4u.materia_prima VALUES(1, "Clipe metálico para grampo de madeira", 45000);
INSERT INTO super4u.materia_prima VALUES(2, "Faces para grampo de madeira", 93000);
INSERT INTO super4u.materia_prima VALUES(3, "Cabo para vassoura", 6000);
INSERT INTO super4u.materia_prima VALUES(4, "Cerdas para vassoura", 12000);


INSERT INTO super4u.produtos_x_materia_prima VALUES(1,1);
INSERT INTO super4u.produtos_x_materia_prima VALUES(1,2);
INSERT INTO super4u.produtos_x_materia_prima VALUES(2,3);
INSERT INTO super4u.produtos_x_materia_prima VALUES(2,4);


