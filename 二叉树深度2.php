<?php
class TreeNode
{
	public $value;
	public $rChild;
	public $lChild;
	
	public function __construct($value)
	{
		$this->value = $value;
	}
	
	public function createTree(TreeNode $lChild = null, TreeNode $rChild = null)
	{
		$this->lChild = $lChild;
		$this->rChild = $rChild;
	}
	
	public function deepTree(TreeNode $node = null)
	{
		if($node == null) {
			return 0;
		}
		$lDeep = $node->deepTree($node->lChild);
		$rDeep = $node->deepTree($node->rChild);
		return $lDeep > $rDeep ? ($lDeep+1) : ($rDeep+1);
	}
	
	public function preOrder(TreeNode $node = null)
	{
		if($node) {
			print_r($node->value);
			$node->preOrder($node->lChild);
			$node->preOrder($node->rChild);
		}
	}
	
	public function midOrder(TreeNode $node = null)
	{
		if($node) {
			$node->midOrder($node->lChild);
			print_r($node->value);
			$node->midOrder($node->rChild);
		}
	}
	
	public function endOrder(TreeNode $node = null)
	{
		if($node) {
			$node->endOrder($node->lChild);
			$node->endOrder($node->rChild);
			print_r($node->value);
		}
	}
	
	public function levelOrder(TreeNode $node = null)
	{
		if($node == null) {
			return null;
		}
		$queue = new splqueue();
		$queue->enqueue($node);
		while(! $queue->isEmpty())
		{
			$node = $queue->dequeue();
			echo $node->value." ";
			if(! is_null($node->lChild)) {
				$queue->enqueue($node->lChild);
			}
			if(! is_null($node->rChild)) {
				$queue->enqueue($node->rChild);
			}
		}
	}
}

$a = new TreeNode('a');
$b = new TreeNode('b');
$c = new TreeNode('c');
$d = new TreeNode('d');
$e = new TreeNode('e');
$f = new TreeNode('f');
$g = new TreeNode('g');
$h = new TreeNode('h');

$a->createTree($b, $c);
$b->createTree($d, $e);
$c->createTree($f, null);
$d->createTree($g, null);
$g->createTree($h, null);


// $a->deepTree($a);
//$a->preOrder($a);
//$a->midOrder($a);
//$a->endOrder($a);
$a->levelOrder($a);
?>