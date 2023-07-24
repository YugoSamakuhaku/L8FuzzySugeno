-- Query menampilkan total penjualan tiap bulan
-- SET sql_mode = 'TRADITIONAL';

SELECT
    MONTH(request_sales.date_sale) AS month,
    YEAR(request_sales.date_sale) AS year,
    detail_request_sales.id_product,
    SUM(detail_request_sales.qty) AS total_qty
FROM
    request_sales
    JOIN detail_request_sales ON request_sales.id_sale = detail_request_sales.id_sale
WHERE
    detail_request_sales.id_product = '2'
    AND YEAR(request_sales.date_sale) = '2021'
GROUP BY
    MONTH(request_sales.date_sale)
	
-- Query menampilkan total pemakaian bahan baku tiap bulan
-- SET sql_mode = 'TRADITIONAL';

SELECT
    MONTH(request_sales.date_sale) AS month,
    YEAR(request_sales.date_sale) AS year,
    detail_request_sales.id_product,
    product_inggridients.id_inggridient,
    product_inggridients.usage_amount,
    (
        detail_request_sales.qty * product_inggridients.usage_amount
    ) AS total_usage_amount
FROM
    request_sales
    JOIN detail_request_sales ON request_sales.id_sale = detail_request_sales.id_sale
    JOIN product_inggridients ON detail_request_sales.id_product = product_inggridients.id_product
WHERE
    detail_request_sales.id_product = '2'
    AND MONTH(request_sales.date_sale) = '7'
    AND YEAR(request_sales.date_sale) = '2021'
GROUP BY
    product_inggridients.id_inggridient