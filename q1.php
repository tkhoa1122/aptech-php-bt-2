<?php
$programmingLanguages = [
    "Java" => [
        "name" => "Java",
        "year_created" => 1995,
        "famous_libraries" => ["Spring", "Hibernate", "Struts"]
    ],
    "C#" => [
        "name" => "C#",
        "year_created" => 2000,
        "famous_libraries" => ["ASP.NET", "Entity Framework", "Xamarin"]
    ],
    "PHP" => [
        "name" => "PHP",
        "year_created" => 1995,
        "famous_libraries" => ["Laravel", "Symfony", "Zend Framework"]
    ],
    "Javascript" => [
        "name" => "Javascript",
        "year_created" => 1995,
        "famous_libraries" => ["React", "Angular", "Vue"]
    ],
    "Python" => [
        "name" => "Python",
        "year_created" => 1991,
        "famous_libraries" => ["Django", "Flask", "Pandas"]
    ]
];

// In
echo "<ul>";
foreach ($programmingLanguages as $language) {
    echo "<li>{$language['name']} (Year: {$language['year_created']}) - Famous Libraries: " . implode(", ", $language['famous_libraries']) . "</li>";
}
echo "</ul>";

// Sắp xếp theo tên
ksort($programmingLanguages);

echo "<h2>Sorted Languages:</h2>";
echo "<ul>";
foreach ($programmingLanguages as $language) {
    echo "<li>{$language['name']} (Year: {$language['year_created']}) - Famous Libraries: " . implode(", ", $language['famous_libraries']) . "</li>";
}
echo "</ul>";

// Thêm Golang and Ruby
$programmingLanguages["Golang"] = [
    "name" => "Golang",
    "year_created" => 2009,
    "famous_libraries" => ["Gin", "Beego", "Echo"]
];
$programmingLanguages["Ruby"] = [
    "name" => "Ruby",
    "year_created" => 1995,
    "famous_libraries" => ["Rails", "Sinatra", "Hanami"]
];

// Bỏ Javascript
unset($programmingLanguages["Javascript"]);

echo "<h2>Updated Languages:</h2>";
echo "<ul>";
foreach ($programmingLanguages as $language) {
    echo "<li>{$language['name']} (Year: {$language['year_created']}) - Famous Libraries: " . implode(", ", $language['famous_libraries']) . "</li>";
}
echo "</ul>";
?>
