<?php

require __DIR__ . '/../src/prime-nth.php';

describe('Number Tools', function () {
  it('looking for the first 3 prime number', function () {
    expect(nthPrime(3))->toBe(5);
  });

  it('looking for the first 4 prime number', function () {
    expect(nthPrime(4))->toBe(7);
  });

  it('looking for the first 6 prime number', function () {
    expect(nthPrime(6))->toBe(13);
  });

  it('looking for the first 7 prime number', function () {
    expect(nthPrime(7))->toBe(17);
  });

  it('looking for the first 8 prime number', function () {
    expect(nthPrime(8))->toBe(19);
  });
});
