<?php
function console_log($var) {
    echo "<script>console.log(\"$var\");</script>";
}

include("./database-credentials.php");


$link = mysqli_connect(HOST, USER, PASS, DB);
if (mysqli_connect_errno()) {
    //it's not connecting....
    console_log("Failed to connect");
    exit();
} else {
    console_log("Connected");
}

$allcontent = [];

$allcontent[] = "<p>An array is a data structure that stores elements sequentially, allowing fast access to any element by its index. Depending on the language, the term may refer either to a fixed-length block of contiguous memory or to a higher-level abstraction built on top of such storage.</p>";

$allcontent[] = "<h2>Fixed Length Arrays</h2>";

$allcontent[] = "<p>At a low level, arrays store elements of a single type in contiguous memory. Because each element occupies a fixed amount of space, the address of any element can be computed directly from its index, providing constant-time (O(1)) random access.</p>";

$allcontent[] = "<p>Fixed length arrays provide very fast random access using indexes, and efficient iteration, but their size cannot change. Adding or removing elements, especially from the beginning of the array, requires shifting every following element, resulting in O(n) time complexity. Changing the size requires allocating a new array and copying the elements over.</p>";

$allcontent[] = "<h2>Dynamic Arrays</h2>";

$allcontent[] = "<p>To address these limitations, many programming languages provide higher level dynamic array abstractions that handle resizing and memory internally and provide helpful methods, like sorting and searching, while preserving the same index semantics.<p>";

$allcontent[] = "<h2>Arrays in Java</h2>";
$allcontent[] = "<h3>Arrays</h3>";

$allcontent[] = "<p>Java provides fixed length arrays with contiguous storage semantics. Although they are actually objects, they are the closest to true low level arrays in this post. Although they are objects, their length is immutable, and cannot be expanded as in dynamic arrays.</p>";

$allcontent[] = "<p>When an array is created, its elements are automatically initialized to empty values: 0 for integers, 0.0 for floats, false for boolean, and null for reference types such as String. If initialized with values, the length is set as the number of values provided.</p>";

$allcontent[] = "<h3>ArrayList</h3>";

$allcontent[] = "<p>Java also provides a dynamic array, ArrayList, which uses a fixed length array internally, allocating a larger array when capacity is exceeded. Although resizing is expensive, it occurs infrequently, providing an amortized O(1) cost to append elements. Because Java is strongly typed, ArrayLists can only store elements of a single reference type (not primitives, so the Integer class would be used instead of int).</p>";

$allcontent[] = "<h2>Arrays in Python</h2>";

$allcontent[] = "<h3>Arrays</h3>";

$allcontent[] = "<p>Python's array module provides a more memory efficient alternative to the core list data structure by restricting data to one type using C-style type codes (integers, floats, or chars). This allows for less memory use and better performance, and is often used for working with large numerical datasets.</p>";

$allcontent[] = "<h3>Lists</h3>";

$allcontent[] = "<p>Python's list is a core data structure and dynamic array. Unlike Java, Python lists can store mixed types. Internally, references to objects are stored in a dynamic array, rather than the objects themselves. This provides greater flexibility, but incurs additional memory overhead and slower iteration than contiguous numeric arrays due to pointer dereferencing and dynamic type checks.</p>";

$allcontent[] = "<h2>Arrays in JavaScript</h2>";
$allcontent[] = "<h3>TypedArrays</h3>";

$allcontent[] = "<p>JavaScript provides typed arrays, which are backed by contiguous memory arrays and enforce fixed element sizes. Typed arrays offer predictable memory usage and faster processing for numeric types, similar to low level arrays. However, typed arrays can only be used for different sizes of integers and floats, such as Int16Array and Float32Array, and are fixed length.</p>";

$allcontent[] = "<h3>Arrays</h3>";

$allcontent[] = "<p>JavaScript's array is a core data structure and is actually an object with behavior that changes based on how it is used. Different JavaScript engines optimize arrays differently, but in general, dense arrays that store data of the same type are stored efficiently in fixed length typed arrays, while arrays with large gaps or 'holes' degrade into dictionary representations. This can also happen if strings are used as indexes, which is allowed but slows performance.</p>";

$allcontent[] = "<h2>Summary</h2>";

$allcontent[] = "<p>Arrays, both fixed length and dynamic, provide excellent performance for indexed random access and iteration. Understanding how different languages implement array abstractions helps you make better design choices. By selecting appropriate data structures, limiting unnecessary type flexibility, and avoiding patterns that degrade performance (such as sparse arrays), you can write more efficient and predictable code.</p>";



$title = "Arrays in Java, Python, and JavaScript";

#don't change, this adds content to the database!
$stmt = mysqli_prepare(
    $link,
    "INSERT INTO blog_post_content (`html_content`, `order_index`, `post`) VALUES (?, ?, ?)"
);

for ($myIndex = 0; $myIndex < count($allcontent); $myIndex++) {
    mysqli_stmt_bind_param(
        $stmt,
        "sis", #string integer string
        $allcontent[$myIndex],
        $myIndex,
        $title
    );
    
    mysqli_stmt_execute($stmt);
}

mysqli_close($link);