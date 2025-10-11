<!-- PHP for WordPress -->
<!-- To echo or not? -->
<?php
function doubleMe($num)
{
  return $num * 2;
}

doubleMe(5);

function tripleMe($num)
{
  return $num * 3;
}

echo tripleMe(doubleMe(5));

// With WordPress methods, it's hard to tell if we need to echo it or not.
the_title();

get_the_title();

the_ID();

get_the_ID();

// Methods with 'get' will not echo anything for you; they will return it only.
// Without the word 'get', you can assuming it will be echoed for you.
?>