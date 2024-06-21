## utilites

`var_dump(get_defined_vars());`

`var_dump(get_included_files());`

```php
	
	var_dump() === **console.log() && typeOf** so 

		it is basically both mixed === 

			**console.log(typeOf(variable))**

```

-----


## Data Types

1. Strings
2. Intgers
3. Floats
4. Null
5. Object => Class
6. Resource
7. Array && Assoicated Arrays {JS Objects but with => instead of : between keys and values}


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