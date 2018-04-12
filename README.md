# Simple Coupon Generator
Coupon generator this is php class, which provides the ability to generate coupon codes on various parameters. 
Its key feature is the generation of a coupon code on a mask like this “XXXXXX” or “prefix-XXXX-XXXX-suffix” 
where ‘X’ – random symbol, ‘-’ – custom separator.



### Key Feature
* Support prefix- and –suffix
* Support any coupon mask
  * Support all numbers, alphabets, symbols
  * Support different lenghts
  * Generate N number of coupons
  * Simple Portal


## Usage
### SubStacks General Usage
```php
$coupon_code_options = array(</code><br/>
	    'prefix' => '',</code><br/>
	    'suffix' => '',</code><br/>
	    'length' => 10,</code><br/>
	    'letters' => false,</code><br/>
	    'numbers' => true</code><br/>
);
```
```php
use gan068\SimpleCouponGenerator\Coupon; //use namespace
```

```php
$coupon_code = Coupon::generateCoupons($coupon_code_options);
```

1) Dynamic length
```php
	Coupon::generate(8);  	// J5BST6NQ
```

2) Using prefix
```php
	Coupon::generate(6, ”XYZ-”);    // XYZ-NT163E
```


3) Using suffix
```php
	Coupon::generate(6, ”XYZ-”, “-ABC”);    // XYZ-TC2MSD-ABC
```


4) Without numbers
```php
	Coupon::generate(6, ””, ””, false);    // LNTDRS
```


5) Without letters
```php
	Coupon::generate(6, ””, ””, true, false);    // 835710
```


6) With symbols
```php
	Coupon::generate(6, ””, ””, true, true, true);    // #H5&S!7
```


7) Random register (includes lower and uppercase)
```php
	Coupon::generate(6, ””, ””, true, true, false, true);    // aT4hB2
```


8) With custom Mask (Note: length does not matter)
```php
	Coupon::generate(1, ””, ””, true, true, false, false, “XXXXXX”);    // STG6N8
```
