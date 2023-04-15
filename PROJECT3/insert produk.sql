INSERT INTO `product` (`product_name`, `product_price`, `product_image`, `product_code`,`product_category`,`brand_category`,`other_category`) VALUES
('Intensive Moisturizer - Cetaphil', '95000', '../admin/imgProduct/cetaphil/moisturizer/moisturizer2.png', 'b1002','moisturizer',`cetaphil`,`bestSeller`),
('Eye Cream - Keihl`s', '100000', '../atribut/best seller/kiehls.png', 'h8001','eye',`kiehls`,`bestSeller`),
('Serum Sun Screen - Skintific', '150000', '../admin/imgProduct/skintific/sunscreen/sunscreen.jpg', 'p2001','sunscreen',`skintific`,`bestSeller`),
('Serum - The Ordinary', '250000', '../admin/imgProduct/theOrdinary/serum/serum.png', 'r7001','serum',`theOrdinary`,`bestSeller`);

UPDATE product
SET brand_category = 'sensatia'
WHERE product_id IN (85,86,87,88);
