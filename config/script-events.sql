create database excel;
use excel;

CREATE TABLE events (
  id int NOT NULL,
  date date NOT NULL,
  event varchar(255) NOT NULL,
  turno varchar(255) NOT NULL,
  hora varchar(255) NOT NULL,
  hora_final varchar(255) NOT NULL,
  sala varchar(255) NOT NULL
);

CREATE TABLE cliente (
  id INT PRIMARY KEY,
  user_name VARCHAR(255) NOT NULL,
  user_email VARCHAR(255) NOT NULL UNIQUE,
  user_password VARCHAR(255) NOT NULL,
  user_photo VARCHAR(255)
);

INSERT INTO events (date, event, turno, hora, hora_final, sala)
VALUES 
('2024-11-12', 'Reunião de Planejamento', 'Manhã', '09:00', '12:00', 'Sala 1'),
('2024-11-13', 'Treinamento de Vendas', 'Tarde', '14:00', '16:00', 'Sala 2'),
('2024-11-14', 'Workshop de Marketing', 'Manhã', '10:00', '13:00', 'Sala 3'),
('2024-11-15', 'Palestra de Inovação', 'Noite', '18:00', '20:00', 'Auditório'),
('2024-11-16', 'Fórum de Tecnologia', 'Tarde', '13:30', '17:00', 'Sala 4');

INSERT INTO cliente (user_name, user_email, user_password, user_photo)
VALUES 
('João Silva', 'joao.silva@example.com', 'senha123', 'joao.jpg'),
('Maria Oliveira', 'maria.oliveira@example.com', 'senha456', 'maria.jpg'),
('Carlos Pereira', 'carlos.pereira@example.com', 'senha789', 'carlos.jpg'),
('Ana Costa', 'ana.costa@example.com', 'senha321', 'ana.jpg'),
('Lucas Santos', 'lucas.santos@example.com', 'senha654', 'lucas.jpg');
