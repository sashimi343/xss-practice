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

require_once(__DIR__.'/../../app.php');

set_title('imgタグ内に挿入');
set_description("入力した文字列をimg要素のsrc属性に設定します。ファイル名に使用できない文字列を入力した場合、エラーメッセージが表示されます。\nヒント: onerrorイベントハンドラ");

$filename = isset($_GET['filename']) ? $_GET['filename'] : 'logo-black.png';

// Check if $filename is valid
// Invalid characters are / \ < > * ? " | : ; \0(NUL)
$has_error = (bool)(preg_match('/[\/\\<>\*\?"\|:;\0]/', $filename, $matches));

add_param('filename', $filename);
add_param('has_error', $has_error);

render('attribution/image', 'question');

?>
