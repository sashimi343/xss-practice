<?php

/*
 * Copyright (c) 2017 Kohei Kakimoto
 * Author: Kohei Kakimoto
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of
 * this software and associated documentation files (the "Software"), to deal in
 * the Software without restriction, including without limitation the rights to
 * use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 * the Software, and to permit persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

require_once(__DIR__.'/lib/autoload.php');

// Start session to show 'PHPSESSID=<PHP Session ID>'
// when you success JavaScript code injection.
session_start();

$_skinny_params = array();

function set_title($title) {
    add_param('title', $title);
}

function set_description($description) {
    add_param('description', $description);
}

function add_param($key, $value) {
    global $_skinny_params;
    $_skinny_params[$key] = $value;
}

function render($template, $layout = 'default') {
    global $_skinny_params;
    global $Skinny;

    $template_path = resolv_template_path($template);
    $layout_path = resolv_layout_path($layout);

    $content = $Skinny->SkinnyFetchHTML($template_path, $_skinny_params);
    add_param('content', $content);

    $Skinny->SkinnyDisplay($layout_path, $_skinny_params);
}

function resolv_template_path($template) {
    $path = __DIR__.'/templates_c/'.$template.'.html';
    return $path;
}

function resolv_layout_path($layout) {
    $path = __DIR__.'/templates_c/layouts/'.$layout.'.html';
    return $path;
}

?>
