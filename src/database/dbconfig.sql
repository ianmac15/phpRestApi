CREATE TABLE `products` (
    `id` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `category` varchar(255) NOT NULL,
    `price` float(24) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO `products` (`id`, `name`, `category`, `price`) VALUES
(1, 'Lenovo G505', 'Laptop', 499.99),
(2, 'Fender stratocaster', 'Guitar', 699.99),
(3, 'Toyota Yaris', 'Car', 5999.99),
(4, 'Opel Corsa', 'Car', 4999.99);