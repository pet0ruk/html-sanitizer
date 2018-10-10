<?php

namespace HtmlPurifier\Node;

/**
 * Used by nodes which can have children.
 */
trait ChildrenTrait
{
    /**
     * @var NodeInterface[]
     */
    private $children = [];

    public function canHaveChildren(): bool
    {
        return true;
    }

    public function addChild(NodeInterface $child)
    {
        $this->children[] = $child;
    }

    private function renderChildren(): string
    {
        $rendered = '';
        foreach ($this->children as $child) {
            $rendered .= $child->render();
        }

        return $rendered;
    }
}
