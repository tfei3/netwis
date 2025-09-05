<?php

function get_list_books($bookChapter) {
    
    $output = '';
    $output = $output . '<p>[';
    $output = $output . $bookChapter["code"] . '] ';
    $output = $output . $bookChapter["author"] . ', "';
    $output = $output . $bookChapter["title"] . '," in ';
    $output = $output . $bookChapter["editor"] . ', ';
    $output = $output . $bookChapter["booktitle"] . ', ';
    $output = $output . $bookChapter["publisher"] . ', ';
    $output = $output . $bookChapter["year"] . '.</p>';

    return $output;
}

$bookChapters = array();
$bookChapters[6] = array(
    "type" => "book",
    "code" => "BC-6",
    "author" => "Avesh K. Agarwal and Wenye Wang",
    "title" => "An Experimental Study on Security Protocols in WLANs",
    "editor" => "Y. Xiao, X. Shen, and D.-Z. Du",
    "booktitle" => "Wireless Network Security",
    "publisher" => "Springer, ISBN: 0387280405",
    "year" => "2006"
);
$bookChapters[5] = array(
    "type" => "book",
    "code" => "BC-5",
    "author" => "Wenye Wang, Wei Liang, and Avesh K. Agarwal",
    "title" => "The Effects of Authentication Mechanisms on Quality of Service in Mobile Wireless Networks",
    "editor" => "Y. Zhang, H. Hu, and M. Fujise",
    "booktitle" => "Resource, Mobility and Security Management in Wireless Networks and Mobile Communications",
    "publisher" => "Auerbach Publications, CRC Press",
    "year" => "2006"
);
$bookChapters[4] = array(
    "type" => "book",
    "code" => "BC-4",
    "author" => "Wenye Wang, Janise Y. McNair, and Jiang (Linda) Xie",
    "title" => "Location Management and Mobility Modeling in Wireless Systems",
    "editor" => "Mehdi Khosrow-Pour",
    "booktitle" => "Encyclopedia of E-Commerce, E-Government and Mobile Commerce",
    "publisher" => "Idea-Group",
    "year" => "2006"
);
$bookChapters[3] = array(
    "type" => "book",
    "code" => "BC-3",
    "author" => "Wenye Wang, Janise Y. McNair, and Jiang (Linda) Xie",
    "title" => "Authentication and Security Protocols for Ubiquitous Wireless Networks",
    "editor" => "Thanos A. Vasilakos and Witold Pedrycz",
    "booktitle" => "Ambient Intelligence,Wireless Networking, Ubiquitous Computing",
    "publisher" => "Artech House",
    "year" => "July 2005"
);
$bookChapters[2] = array(
    "type" => "book",
    "code" => "BC-2",
    "author" => "Wenye Wang",
    "title" => "Modeling and Management of Location and Mobility",
    "editor" => "D. Katsaros, A. Nanopoulos and Y. Manalopoulos",
    "booktitle" => "Wireless Information Highways, Chapter VI",
    "publisher" => "Hershey, USA: IRM Press",
    "year" => "2005"
);
$bookChapters[1] = array(
    "type" => "book",
    "code" => "BC-1",
    "author" => "Wenye Wang",
    "title" => "Authentication for Inter-Domain Roaming in Wireless IP Networks",
    "editor" => "Panand Xiao",
    "booktitle" => "Design and Analysis of Wireless Networks, Vol. 2",
    "publisher" => "NOVA Science Publisher, ISBN: 1-59454-186-8, Hardbound",
    "year" => "2004"
);


?>