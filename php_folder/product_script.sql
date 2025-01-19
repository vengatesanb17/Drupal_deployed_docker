CREATE TABLE product (
    product_id INT AUTO_INCREMENT PRIMARY KEY,        -- Unique product identifier
    product_name VARCHAR(255) NOT NULL,              -- Product name
    product_description TEXT,                        -- Detailed product description
    price DECIMAL(10, 2) NOT NULL DEFAULT 0.00,      -- Product price with default value
    quantity INT NOT NULL DEFAULT 0,                 -- Available stock quantity with default value
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Record creation timestamp
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Last updated timestamp
);

-- Insert default values
INSERT INTO product (product_name, product_description, price, quantity) VALUES
('Product A', 'Description for Product A', 19.99, 100),
('Product B', 'Description for Product B', 29.99, 50),
('Product C', 'Description for Product C', 9.99, 200),
('Product D', 'Description for Product D', 49.99, 30),
('Product E', 'Description for Product E', 99.99, 10);

-- Query to view the data
SELECT * FROM product;
