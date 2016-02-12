<?php
include "MyAttribute.php";

class MyXMLTag {
    private $children;
    private $name;
    private $attributes;
    private $content;
    private $level;
    
    function __construct($parent, $name = "") {
	$this->children = [];
	$this->attributes = [];
	$this->parent = $parent;
	$this->name = $name;
	$this->level = $parent->getLevel()+1;
    }

    public function getLevel() {
	return $this->level;
    }
    
    public function setName($name) {
	$this->name = $name;
    }
    
    public function addAttribute($name, $value) {
	$this->attributes[] = new MyAttribute($name, $value);
    }
    
    public function newTag($name, $value = "") {
	$tag = new MyXMLTag($this, $name);
	if($value) {
	    $tag->content = $value;
	} 
	$this->children[] = $tag;
	return $tag;	
    }
    
    public function printTags() {
	$out = "";
	for($n = 1; $n < $this->getLevel(); $n++) 
	    $out .= "\t";
	$out .= "<{$this->name}";
	$out = count($this->attributes)?"$out ":$out;
	if(count($this->attributes)) {
	    foreach($this->attributes as $attribute) {
		$out .= $attribute->name . '="' . $attribute->value . '" ';
	    }
	    $out = substr($out, 0, -1);
	}
	$out .= ">";
	if($this->content)
	    $out .= $this->content;
	if(count($this->children)) {
	    $out .= "\n";
	    foreach($this->children as $child) 
		$out .= $child->printTags();
	    for($n = 1; $n < $this->getLevel(); $n++) 
		$out .= "\t";
	}
	$out .= "</{$this->name}>";
	return "$out\n";
    }
}
?>