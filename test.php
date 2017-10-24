<?php

  echo "\n";

  echo "\tHello, world!\n";

  echo "\n";

  $name = 'Janine';
  echo "\tHello, " . $name . "\n";

  echo "\n";

  for ($i=0; $i < 10; $i++) {
    echo "\tHello! This is #" . $i . "\n";
  }

  echo "\n";

  $colors = ['red', 'orange', 'yellow', 'green', 'blue', 'purple'];
  foreach ($colors as $color) {
    echo "\t" . $color . " is a nice color!\n";
  }

  echo "\tWe have " . count($colors) . " nice colors!\n";

  echo "\n";

  $counter = 25;
  while($counter >= 0) {
    echo "\t", $counter, " is the best number!\n";
    $counter -= 5;
  }

  echo "\n";

  $ideas = [];

  if ($ideas) {
    echo "\t\$ideas evaluates to true!\n";
  }
  else {
    echo "\t\$ideas evaluates to false!\n";
  }

  $ideas[] = 'Eat more candy!';

  if ($ideas) {
    echo "\tNow \$ideas evaluates to true!\n";
  }
  else {
    echo "\tNow \$ideas evaluates to false!\n";
  }

  echo "\n";

  $value1 = 5;
  $value2 = 6;

  echo "\t" . $value1 . "\n";
  echo "\t" . $value2 . "\n";

  echo "\t" . ($value1 + $value2) . "\n";
  echo "\t" . ($value1 - $value2) . "\n";
  echo "\t" . ($value1 * $value2) . "\n"; 
  echo "\t" . ($value1 / $value2) . "\n";
  echo "\t" . ($value1 % $value2) . "\n";
  echo "\t" . ($value1 ** $value2) . "\n";

  echo "\n";

  printStuff();

  echo "\n";

  printThisStuff('Larry', 'Moe', 'Curly');

  echo "\n";

  echo '\tSingle quotes, $value1\n';

  echo "\n";

  echo "\tDouble quotes, $value2\n";

  echo "\n";

  $catspeak = meowify('feed me');

  echo "\t", $catspeak, "\n";

  echo "\n";

  sleep(1);

  echo "\tWow, I got tired of waiting!\n";

  echo "\n";

  $animal = 'weasel';
  switch ($animal) {
    case 'lion':
      echo "\tI like to roar!\n";
      break;
    case 'wolf':
      echo "\tI like to howl!\n";
      break;
    case 'giraffe':
      echo "\tI like to...?\n";
      break;
    default:
      echo "\tEeek! I don't know what I like to say!\n";
  }

  echo "\n";

  $favorites = array(
    'color' => 'purple',
    'food' => 'pizza',
    'animal' => 'tribble',
    'book' => 'Can I pick more than one?',
    'number' => 42
  );

  var_dump($favorites);

  echo "\n";

  foreach ($favorites as $category => $choice) {
    echo "\tMy favorite $category is $choice.\n";
  }

  echo "\n";



function printStuff() {
  echo "\tStuff!!!!!\n";
}

function printThisStuff($x, $y, $z) {
  echo "\t" . $x . "\n";
  echo "\t" . $y . "\n";
  echo "\t" . $z . "\n";
}

function meowify($input) {
  return "meow meow meow " . $input . " meow meow!";
}

?>