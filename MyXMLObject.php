<?php
include "MyXMLTag.php";

class MyXMLObject {
    private $children;
    private $root;
    private $level;
    
    function __construct() {
	$tag = new MyXMLTag($this, 1);
	$this->children = [];
	$this->children[] = $tag;
	$this->root = $tag;
	$this->level = 0;
    }
    
    public function newTag($name) {
	$tag = new MyXMLTag($this, $name);
	$this->children[] = $tag;
	return $tag;
    }
    public function getLevel() {
	return $this->level;
    }
    public function getRoot() {
	return $this->root;
    }

    public function printTags() {
	foreach($this->children as $child) {
	    echo $child->printTags();
	}
    }
    
}
?>