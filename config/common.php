<?php
const BASE_URL = "http://localhost:8000";
const PUBLIC_PATH = BASE_URL . "public/";

return [
    'product_order_by'=>[
        1=> "Sắp xếp theo thứ tự tăng dần",
        2=>"Sắp xếp theo tên giảm dần",
        3=>"Sắp xếp theo giá tăng dần",
        4=>"Sắp xếp theo giá giảm dần",
        5=>"Sắp xếp theo số lượng tăng dần",
        6=>"Sắp xếp theo số lượng giảm dần",
    ],
    'page_size'=>[
        10,
        20,
        30,
        40
    ],
    'category_order_by'=>[
        1=> "Sắp xếp theo thứ tự tăng dần",
        2=>"Sắp xếp theo tên giảm dần",
    ],
    'default_page_size'=>10,

    'page_size'=>[
        1=> "Sắp xếp theo thứ tự tăng dần",
        2=>"Sắp xếp theo tên giảm dần",
    ],
]
?>
