<?php

// asset the information that you want
    $student_info_keys = [
        'name', //key
        'age',
        'dob'
    ];

    $students = [
        ['Shaun',44,'1978-12-22'],
        ['1997-02-01','Gagandeep',26] // Check later???
    ];

    $aa_students = [
        [
            "name" => "Shuan McKinnon",
            "age" => 44,
            "dob" => "1978-12-22"
        ],
        [
            "age" => 22, // even though reorder, it doesn't matter. Because its key is "age"
            "name" => "Amrit",
            "dob" => "2001-01-18"
        ]
    ];

    foreach($aa_students as $student){ //every students in array take them to $student
        echo $student["age"];
    };
    // function take multiply arguement, you need to know to order. The order matters, you don't remember, it's annoying
    // ???? [This is super powerful!!] 1 arguement + 1 associative array. all the values associative array.

    // explicitly key: you define the order of key ????

    //__DIR__, constant in .NET Core.That means Reserve. asset, return the specific number
    
    /*
    Super Global Associative Arrays
    ================

    Q: What is $_Session?
    A: Generate a session key at the backend. using session key to send things to specific user. authunticated data???

    $_SERVER: What they came from? What they want to do .... but don't trust that
    
    https://www.google.com/search?q=boo+the+dog&source=hp&ei=lITIY6ShFNrIkPIP_4aV4Ac&iflsig=AK50M_UAAAAAY8iSpBBHaV2sdJAgI0Q8eEm25EVQX1dX&oq=boo+the+&gs_lcp=Cgdnd3Mtd2l6EAMYADIHCAAQgAQQCjIHCAAQgAQQCjIHCAAQgAQQCjIHCAAQgAQQCjIHCAAQgAQQCjIKCC4QgAQQ1AIQCjIHCAAQgAQQCjIHCAAQgAQQCjIHCAAQgAQQCjIHCAAQgAQQCjoOCAAQjwEQ6gIQjAMQ5QI6DgguEI8BEOoCEIwDEOUCOhEILhCDARDHARCxAxDRAxCABDoICC4QsQMQgwE6EQguEIAEELEDEIMBEMcBENEDOggIABCxAxCDAToLCAAQgAQQsQMQgwE6CwguEIAEELEDEIMBOgsILhDUAhCxAxCABDoOCC4QgAQQsQMQxwEQ0QM6FAguEIAEELEDEIMBEMcBENEDENQCOgsILhCABBCxAxDUAjoOCC4QgwEQ1AIQsQMQgAQ6CAgAEIAEELEDOggILhCABBCxAzoOCC4QgAQQsQMQgwEQ1AI6BQgAEIAEOgsILhCABBDHARDRAzoICC4QgAQQ1AI6BQguEIAEOg4ILhCxAxCDARDHARCvAToNCC4QgAQQxwEQ0QMQCjoICC4Q1AIQgARQwANY15QBYJqfAWgCcAB4AIABqQOIAZAOkgEJNi4xLjMuMC4xmAEAoAEBsAEK&sclient=gws-wiz
    // "?" evert setup parameter to send to the server
    // q is a key
    // after "=" is value
    // &(and percent) is stop, after that other keys
    */
?>
