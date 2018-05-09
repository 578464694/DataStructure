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


    public function createChild(TreeNode $child)
    {
        if(!$this->lChild) {
            $this->lChild = $child;
            return true;
        }elseif(!$this->rChild){
            $this->rChild = $child;
            return true;
        }else{
            return false;
        }
    }

}

function height(TreeNode $node = null)
{
    if(! $node) {
        return 0;
    }else{
        return max(height($node->lChild), height($node->rChild))+1;
    }
}

fscanf(STDIN, '%d', $num);
if(is_integer($num) && $num >= 1 && $num <= 1000)
{
    $map = [];
    $map[0] = new TreeNode(0);
    for($i = 1; $i < $num; $i++) {

        $arr = trim(fgets(STDIN));
        list($parent, $child) = explode(' ',$arr);
        if(! isset($map[$parent])) {
            continue;
        }
        if (!isset($map[$parent]->lChild)) {
            $map[$child] = new TreeNode($child);
            $map[$parent]->createChild($map[$child]);
        }elseif(!isset($map[$parent]->rChild)) {
            $map[$child] = new TreeNode($child);
            $map[$parent]->createChild($map[$child]);
        }
    }
    echo height($map[0])."\n";
}
?>