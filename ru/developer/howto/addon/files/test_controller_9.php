    fn_print_die($_data);
    $arow = db_query("UPDATE ?:products SET ?u WHERE product_id = ?i", $_data, $product_id);
