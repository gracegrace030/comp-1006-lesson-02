<?php
    // Var dumb to see the array contents
    $my_arr_constructor = array(); // array(size = 0) empty
    $my_arr_literal = [];
    $my_arr_init_vals = ['a', 1, false, 2.4, "Hello"];
    $mixed_arr = [
        'Shaun',
        true,
        44,
        80.62
      ];

      array_push($mixed_arr, "I like cats");
      $mixed_arr[] = "I like dogs";
      array_unshift($mixed_arr, false);

      array_pop($mixed_arr);
      array_shift($mixed_arr);
?>