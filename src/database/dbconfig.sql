CREATE TABLE `products` (
    `id` varchar(255) NOT NULL,
    `pname` varchar(255) NOT NULL,
    `category` varchar(255) NOT NULL,
    `price` float(24) NOT NULL,
    `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
);

INSERT INTO `products` (`id`, `pname`, `category`, `price`) VALUES
(UUID(), 'Lenovo G505', 'Laptop', 499.99),
(UUID(), 'Fender stratocaster', 'Guitar', 699.99),
(UUID(), 'Toyota Yaris', 'Car', 5999.99),
(UUID(), 'Opel Corsa', 'Car', 4999.99);