## utilites

`var_dump(get_defined_vars());`

`var_dump(get_included_files());`

`json_encode() => convert any response to josn values formatting`

`json_decode() => convert json data to associative array`

```php
	
	var_dump() === **console.log() && typeOf** so 

		it is basically both mixed === 

			**console.log(typeOf(variable))**

```

to fix the undefined vars problem use `isset($_GET[""])` with if

```php
	
	if(isset($_GET['variable'])){
	echo "string";
	return ....
	}

```

-------

**Error Handling**

Simply use `try/catch` like js 

```php

	try {
		
	} catch (Exception $e) {
		echo $e=>getMessage();
	}

```

-------

 **Constants**

```php
	
	define(name, value) === const name = value in js

	echo name

```

**Operators** 

Same as js 

```php
 
 > < >= <= == === != !===

```

----- 
**OOP**

classes contains
1. construct method
2. properties

```php
	
	Class ClassName{

		//Start everthign in private visiblity and then change.
		public $prop1;
		public $prop2;

		public function __construct($arg1,$arg2){

			$this->prop1 = $arg1;
			$this->prop2 = $arg2

		}
	}


	$objectFromTheClass = new ClassName();

	$objectFromTheClass->

```

-----

**Loops**

1. for - while - do while

2. foreach() => for Arrays

```php

	$books = ["Book__1", "Book__2", "Book__3"];


	foreach ($books as $book ) {
			// code...
		echo "Book => ${book} ";
		}	

	// This version shows the index 0 1 2 3 4 5 6

	foreach ($books as $index => $book) {
		// code...
		echo "Index: ${key} Book => ${book} ";
	}

		// This version shows the keys for assoc_array

	foreach ($books as $key => $book) {
		// code...
		echo "Index: ${key} Book => ${book} ";
	}

	array_map() === .map() in JS

		$mapMethod = array_map(function ($book) {
		return "Book Mapped to ${book}";
	}, $books);

	print_r($mapMethod);

	array_filter($array, function(){}) === .filter() in js

	array_reduce(input, function) === .reduce() in js


```

3. 


-----

## Data Types

1. Strings
2. Intgers
3. Floats
4. Null
5. Object => Class
6. Resource
7. Array && Assoicated Arrays {JS Objects but with => instead of : between keys and values}


**Arrays**

$numbersArray = [1,2,3,4,5,6]

-----

**Arrays in PHP vs JavaScript**:
You're partially correct, but there are some important distinctions:

PHP arrays can be both indexed (like JS arrays) and associative (like JS objects).
In PHP, you use square brackets [] for both indexed and associative arrays.
The arrow syntax (=>) is used when defining associative arrays, not when accessing them.
Example:
```php

	$indexed_array = [1, 2, 3];
	$associative_array = ["key1" => "value1", "key2" => "value2"];

```

-----

**Objects in PHP**:
You're correct that objects in PHP are instances of classes, which is different from JavaScript's object literals. In PHP:

* You define a class and then create objects as instances of that class.
* PHP also has a stdClass which can be used similarly to JS objects, but it's not as common.

-----

**The :: operator in PHP**:
The double colon (::) is called the Scope Resolution Operator. It's used for:

Accessing static methods or properties of a class
Accessing constants defined in a class
Calling a parent class's method from within a child class

Example:
```php

	class MyClass {
	    public static $myProperty = "Hello";
	    public static function myMethod() {
	        echo "World";
	    }
	}

	echo MyClass::$myProperty;  // Outputs: Hello
	MyClass::myMethod();  // Outputs: World

```

**Static methods** are pure functions that doesn't depends on outsider value or (state like $this->)

when you need to use static method no need to instantiating a new Class you directly call the function name from the class's

Class::StaticMethod

----

**Let's clarify the ways to access array elements in PHP:**

**For indexed arrays:**

You can use bracket notation with integer keys: $array[0]
You can also use curly braces: $array{0} (though this is deprecated in newer PHP versions)


**For associative arrays:**

You can use bracket notation with string keys: $array["key"]
You can also use curly braces: $array{"key"} (again, deprecated in newer versions)


**An important addition: Arrow notation**

For both indexed and associative arrays, you can use the arrow notation: $array->key
This works when the key is a string and doesn't contain special characters
It's especially useful when chaining array/object access

Here are some examples:

```php

	$indexed_array = [10, 20, 30];
	echo $indexed_array[0];  // Outputs: 10

	$assoc_array = ["name" => "John", "age" => 30];
	echo $assoc_array["name"];  // Outputs: John
	echo $assoc_array->name;    // Also outputs: John

	// Chaining example
	$nested_array = ["user" => ["name" => "Alice", "age" => 25]];
	echo $nested_array["user"]["name"];  // Outputs: Alice
	echo $nested_array->user->name;      // Also outputs: Alice

```

The arrow notation (->) is particularly useful when you're not sure if you're dealing with an object or an array, as it works for both in many cases.
Remember, while the arrow notation is convenient, using the bracket notation ["key"] is generally more explicit and is considered good practice, especially when the keys might contain spaces or special characters.

-----

**Accessing methods of an instantiated object using new keyword:**

You're correct. When you create an object from a class using the new keyword, you use the arrow operator (->) to access its methods and properties, not the scope resolution operator (::).
Here's an example:

```php
	
	class MyClass {
	    public function myMethod() {
	        echo "Hello from myMethod!";
	    }
	}

	$obj = new MyClass();
	$obj->myMethod();  // Outputs: Hello from myMethod!

```

The :: operator is used for static methods/properties or when you want to access something without instantiating the class.

-----



** String manuplation Template literals **

```php
	
	$stringVariable = "string";
	$integerVariable = 556677;

	echo "${stringVariable} is a String and ${integerVariable} is an Intger"

	1. Use " " double quotes

	2. use the same js ${varibale} syntax

```

---


The error in the provided PHP code is a syntax error caused by a typo in the catch block. The arrow operator (`=>`) is used for array key-value pairs or object property access, but in this case, it is being used incorrectly.

Here's the corrected version of the code:

```php
try {
    echo "string";
} catch (Exception $e) {
    echo 'Error:', $e->getMessage();
}
```

In the catch block, the correct syntax to access the exception message is to use the arrow operator (`->`) instead of the arrow (`=>`). By replacing `=>` with `->`, you can access the `getMessage()` method of the `$e` object to retrieve the error message of the exception.


Certainly! In PHP, the arrow operator (`->`) and the double arrow operator (`=>`) have different purposes when it comes to accessing object properties and array elements.

1. Arrow Operator (`->`):
   - The arrow operator is used to access properties and methods of an object.
   - It is used after an object instance to reference its properties or invoke its methods.
   - The syntax is `$object->property` to access a property or `$object->method()` to call a method.

   For example:
   ```php
   class MyClass {
       public $property = 'value';

       public function method() {
           echo 'Hello, world!';
       }
   }

   $obj = new MyClass();
   echo $obj->property;  // Output: value
   $obj->method();       // Output: Hello, world!
   ```

2. Double Arrow Operator (`=>`):
   - The double arrow operator is used in array literals or when working with associative arrays.
   - It is used to associate a key with a value in an array.
   - The syntax is `['key' => 'value']` to define an element in an associative array.

   For example:
   ```php
   $array = [
       'key1' => 'value1',
       'key2' => 'value2',
       'key3' => 'value3'
   ];

   echo $array['key2'];  // Output: value2
   ```

   The double arrow operator is used to define the relationship between keys and values in associative arrays. It is not used for accessing properties or methods of objects.

In summary, the arrow operator (`->`) is used to access properties and methods of objects, while the double arrow operator (`=>`) is used to define key-value pairs in arrays, particularly associative arrays.
-----



