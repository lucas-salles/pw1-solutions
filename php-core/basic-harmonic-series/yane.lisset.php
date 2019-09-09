<?php

const size = 10;
$ac = 0;
for ($i = 1; $i <= size; $i++) {
  $ac += 1 / $i;
}
print("h(10): ${ac}");