<?php

namespace HtmlPurifier\Node;

class TableNode extends AbstractNode implements AttributesNodeInterface
{
    use TagNodeTrait;
    use ChildrenTrait;

    public function getTagName(): string
    {
        return 'table';
    }
}
