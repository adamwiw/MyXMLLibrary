# MyXMLLibrary
Write a simple program to store some simple XML - basic tags and attributes. Don't worry about the encoding or XML features except for the tags and tag attributes. You cannot use any existing XML libraries or APIs. Your code should compile and run and demonstrate the abilities of the your XML classes.

Example code in C#
<pre>
XMLObject x = new XMLObject();
XMLTag root = x.GetRoot();
root.SetName("People");
XMLTag person = root.NewTag("Person");
person.AddAttribute("id", "2323");
person.AddAttribute("DOB", "1/1/1901");
XMLTag fname = person.NewTag("FirstName", "John");
XMLTag lname = person.NewTag("LastName", "Smith");
XMLTag address = person.NewTag("address");
address.NewTag("street", "123 NW 45th street");
address.NewTag("city", "Gaithersburg");
address.NewTag("zip", "21234");
address.NewTag("state", "MD");
x.Print();
</pre>
Example output
<pre>
<people>
    <person id="2323" DOB="1/1/1901">
        <firstname>John</firstname>
        <lastname>Smith</lastname>
        <address>
            <street>123 NW 45th street</street>
            <city>Gaithersuburg</city>
            <zip>21234</zip>
            <state>MD</state>
        </address>
    </person>
</people>
</pre>
test.php
<pre>
&lt;?php
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
</pre>
adam@localhost ~/Documents/newProject/MyXMLLibrary $ php test.php
<pre>
<People>
        <Person id="2323" DOB="1/1/1901">
                <FirstName>John</FirstName>
                <LastName>Smith</LastName>
                <address>
                        <street appartment="205">123 NW 45th street
                                <type>home</type>
                        </street>
                        <city>Gaithersburg</city>
                        <zip>21234</zip>
                        <state>MD</state>
                </address>
        </Person>
</People>
</pre>
adam@localhost ~/Documents/newProject/MyXMLLibrary $ 
