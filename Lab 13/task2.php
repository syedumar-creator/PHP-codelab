<?php
$shopname= "Tailor Shop";
function display(string $cust){
    global $shopname;
    static $count=0;
    $count++;
    echo "Shop Name: $shopname <br>";
    echo "Current Customer: $cust <br>";
    echo "Total Customers: $count <br> <br>";
}
display("Ali");
display("Ahmad");
display("Umar");
?>