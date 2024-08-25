-- Tabla de usuarios
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20),
    type VARCHAR(50)
);

-- Tabla de direcciones
CREATE TABLE addresses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_user INT,
    locality VARCHAR(255),
    street VARCHAR(255),
    number INT,
    floor INT,
    street1 VARCHAR(255),
    street2 VARCHAR(255),
    description TEXT,
    FOREIGN KEY (fk_user) REFERENCES users(id)
);

-- Tabla de métodos de pago
CREATE TABLE pay_methods (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_user INT,
    description VARCHAR(255),
    type VARCHAR(50),
    FOREIGN KEY (fk_user) REFERENCES users(id)
);

-- Tabla de pedidos
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_user INT,
    fk_payMethod INT,
    state_order VARCHAR(50),
    date DATE,
    FOREIGN KEY (fk_user) REFERENCES users(id),
    FOREIGN KEY (fk_payMethod) REFERENCES pay_methods(id)
);

-- Tabla de productos
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    description VARCHAR(255),
    image_path VARCHAR(1000),
    price FLOAT,
    stock INT
);

-- Tabla de detalles de pedidos
CREATE TABLE orders_details (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_product INT,
    fk_order INT,
    amount INT,
    FOREIGN KEY (fk_product) REFERENCES products(id),
    FOREIGN KEY (fk_order) REFERENCES orders(id)
);

-- Tabla de ingredientes
CREATE TABLE ingredients (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_product INT,
    ingredient VARCHAR(255),
    FOREIGN KEY (fk_product) REFERENCES products(id)
);
