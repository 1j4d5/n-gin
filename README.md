# n-gin
## n-gin is a PHP library to make encryption to another level and a exponential  secure manner that the encode is impossible to break without an key
### introduction
---

### n-gin can encrypt your data and also decrypt.
# how to set key 
first create a directory to store your key, the directory must have to be a **protected directory** which mean it should not be visible to the public.

<hr/>


in the console: 
```cmd
cd your_project
md keys
```
and then create a file in the directory just created, the file does not need to have a certain file type, you can keep the file without any file type as recomended.
```php
<?php

require 'vendor/autoload.php';

use N_Gin\key;

#the file directory is writen in the parrams
$key = key::get('keys/key');

```
