<?php

/*
 * This file is part of the HTML sanitizer project.
 *
 * (c) Titouan Galopin <galopintitouan@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlSanitizer\Extension\Basic\NodeVisitor;

use HtmlSanitizer\Model\Cursor;
use HtmlSanitizer\Extension\Basic\Node\H2Node;
use HtmlSanitizer\Node\NodeInterface;
use HtmlSanitizer\Visitor\AbstractNodeVisitor;
use HtmlSanitizer\Visitor\HasChildrenNodeVisitorTrait;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 *
 * @final
 */
class H2NodeVisitor extends AbstractNodeVisitor
{
    use HasChildrenNodeVisitorTrait;

    protected function getDomNodeName(): string
    {
        return 'h2';
    }

    protected function createNode(\DOMNode $domNode, Cursor $cursor): NodeInterface
    {
        return new H2Node($cursor->node);
    }
}
