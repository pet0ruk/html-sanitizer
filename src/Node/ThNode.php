<?php

namespace HtmlPurifier\Node;

class ThNode extends AbstractNode implements AttributesNodeInterface
{
    use TagNodeTrait;
    use ChildrenTrait;

    public function getTagName(): string
    {
        return 'th';
    }
}
