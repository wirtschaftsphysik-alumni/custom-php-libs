<?php

function calculate_member_fee($payment_method, $has_discount, $registration_date=null) {

  # Determine base fee
  $fee = 24;
  # Add markup for payment_method
  if($payment_method == "Überweisung") {
    $fee *= 1.1;
  }
  # Adjust for discount
  if($has_discount) {
    $fee /= 2;
  }
  # Reduce fee if registered in current year
  if($registration_date === null) {
    $registration_date = date_create();
  }
  else {
    $registration_date = date_create($registration_date);
  }
  $current_year = date_create()->format("Y");
  if($current_year == $registration_date->format("Y")) {
    $reg_month = $registration_date->format("n");
    $fee = ($fee / 12) * (12 - $reg_month + 1);
  }
    
  return round($fee, 2, PHP_ROUND_HALF_UP);
}

?>
