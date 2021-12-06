<?php header ( "Content-type: text / html; 
Charset = UTF-8; "); 
// Створення об'єкта і завантаження в нього документа
$sxml = simplexml_load_file("catalog.xml");
?>
<html>
    <head>
        <title> Каталог </title>
    </head>
    <body>
        <h1> Каталог книг </h1>
        <table border = "1" width = "100%">
            <tr>
                <th> Автор </th>
                <th> Назва </th>
                <th> Рік видання </th>
                <th> Ціна, грн.</th>
            </tr>
            <?php
            // Виведення всіх книг в циклі
            foreach ($sxml->book as $book) {
                echo "<tr>";
                echo "<td>", $book->author, "</td>";
                echo "<td>", $book->title, "</td>";
                echo "<td>", $book->pubyear, "</td>";
                echo "<td>", $book->price, "</td>";
                echo "</tr>";
            }?>
        </table>
    </body>
</html>