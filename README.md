# n-gin
## n-gin is a PHP library to make encryption to another level and a exponential  secure manner that the encode is impossible to break without an key
### introduction
---

### n-gin can encrypt your data and also decrypt.
remember to use vendor folders
# how to set key 
first create a directory to store your key, the directory must have to be a **protected directory** which mean it should not be visible to the public.

<hr/>


in the console: 
```cmd
cd your_project
md keys
```
and then create a file in the directory just created, the file does not need to have a certain file type, you can keep the file without any file type as recomended.

<img src='https://raw.githubusercontent.com/1j4d5/1j4d5/main/n-gin_example1.png' alt='create a file named key'>
and write your pass (that can be anything) in your key file.

```php
<?php

require 'vendor/autoload.php';

use N_Gin\key;

#the file directory is writen in the parrams
$key = key::get('keys/key');

```
# how to encrypt a string of data
At first you sould create an key as the 
<a href='#how-to-set-key'>following</a>

***-***
if so follow these steps to contineu

```php
<?php

use N_Gin\encrypt;
$data = 'your data';

$encrypted_data = encrypt::run($key, $datas);
```
# how to decrypt a string of data
as following as encryption method decryption requires a key as the
<a href='#how-to-set-key'>following</a>

**use the same key to decrypt or the data will be corrupted**



and then follow these steps to decrypt

```php
<?php

use N_Gin\decrypt;


$decrypted_data = decrypt::run($key, $encrypted_data);
```

#### if you want to echo|show in a manner that html won't be effected use
```php
<?php

use N_Gin\crypt;

echo 'your en|decrypted data :' . crypt::show($encrypted_data | $decrypted_data);
```
## how the encryption size works
|    |  data string  |  encripted  |
|------|------|------|
|  digits  |  **null**  |  24  |
|    |  **≤3**  |  32  |
|    |  **≤6**  |  36  |
|    |  **≤9**  |  40  |
|    |  **≤12**  |  48  |
|    |  **≤15**  |  52  |
|    |  **≤18**  |  56  |


to be continiued 