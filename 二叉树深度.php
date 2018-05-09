<?php
class TreeNode
{
	public $val;
	public $lChild;
	public $rChild;
	
	public function __construct($val = null) {
		$this->val = $val;
	}
	
	function createBinaryTree(TreeNode $lChild = null, TreeNode $rChild = null)
	{
		if(!is_null($lChild)) {
			$this->lChild = $lChild;
		}
		if(!is_null($rChild)) {
			$this->rChild = $rChild;
		}
	}

	function treeDepth(TreeNode $tree = null)
	{
		if($tree == null) {
			return 0;
		}
		$deepLeft = $tree->treeDepth($tree->lChild);
		$deepRight = $tree->treeDepth($tree->rChild);
		return $deepLeft > $deepRight ? ($deepLeft+1) : ($deepRight + 1);
	}
}

$a = new TreeNode('A');
$b = new TreeNode('B');
$c = new TreeNode('C');
$d = new TreeNode('D');
$e = new TreeNode('E');
$f = new TreeNode('F');

$a->createBinaryTree($b, $c);
$b->createBinaryTree($d, $e);
$c->createBinaryTree($f, null);


echo $a->treeDepth($a);
?>