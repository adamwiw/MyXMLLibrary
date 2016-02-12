<?php
include "MyXMLObject.php";

$x = new MyXMLObject();
$root = $x->getRoot();
$root->setName("People");
$person = $root->newTag("Person");
$person->addAttribute("id", "2323");
$person->addAttribute("DOB", "1/1/1901");
$fname = $person->newTag("FirstName", "John");
$lname = $person->newTag("LastName", "Smith");
$address = $person->newTag("address");
$street = $address->newTag("street", "123 NW 45th street");
$street->addAttribute("appartment", "205");
$street->newTag("type", "home");
$address->newTag("city", "Gaithersburg");
$address->newTag("zip", "21234");
$address->newTag("state", "MD");
$x->printTags();
?>
