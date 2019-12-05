USE crud;

CREATE TABLE marcas(
	codigo INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(150)
);

INSERT INTO marcas VALUES(null, 'Apple')
						,(null, 'Dell')
						,(null, 'Acer')
						,(null, 'Asus')
						,(null, 'HP')
						,(null, 'Razer')
						,(null, 'Huawei')
						,(null, 'Samsung')
						,(null, 'LG')
						,(null, 'Xiaomi')
						,(null, 'Avell')
						,(null, 'Lenovo')
						,(null, 'Microsoft');
