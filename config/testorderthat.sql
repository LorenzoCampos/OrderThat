CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL
);

CREATE TABLE pay_methods (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_user INT NOT NULL,
    description VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    FOREIGN KEY (fk_user) REFERENCES users(id)
);

CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fk_user INT NOT NULL,
    fk_payMethod INT NOT NULL,
    state_order VARCHAR(50) NOT NULL,
    date DATE NOT NULL,
    FOREIGN KEY (fk_user) REFERENCES users(id),
    FOREIGN KEY (fk_payMethod) REFERENCES pay_methods(id)
);

CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    image_path VARCHAR(2000) NOT NULL,
    description VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    stock INT NOT NULL
);

CREATE TABLE orders_details (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fk_product INT NOT NULL,
    fk_order INT NOT NULL,
    amount INT NOT NULL,
    FOREIGN KEY (fk_product) REFERENCES products(id),
    FOREIGN KEY (fk_order) REFERENCES orders(id)
);
