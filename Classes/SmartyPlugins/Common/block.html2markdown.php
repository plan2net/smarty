<?php

/**
 * Smarty plugin "html2markdown"
 * -------------------------------------------------------------
 * File:    block.html2markdown.php
 * Type:    block
 * Name:    HTML to Markdown
 * Version: 1.0
 * Author:  Simon Tuck <stu@rtp.ch>, Rueegg Tuck Partner GmbH
 * Purpose: Turns HTML into markdown using HTML_Parser::get_markdown by [@nickcernis](http://twitter.com/nickcernis)
 * Example: {html2markdown}
 *                <h1>This is a a heading</h1>
 *                <p>This is a line of text<br />
 *                and this is another line...</p>
 *            {/html2markdown}
 * -------------------------------------------------------------
 *
 * @param $params
 * @param $content
 * @param Smarty_Internal_Template $template
 * @param $repeat
 * @return string
 */
function smarty_block_html2markdown($params, $content, Smarty_Internal_Template $template, &$repeat)
{
    if (!$repeat) {
        return html2markdown($content);
    }
}
