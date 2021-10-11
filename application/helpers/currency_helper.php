<?php
function reais($numero){
    return "R$ " . number_format($numero, decimals:2, decimal_separator:",", thousands_separator:".");
}