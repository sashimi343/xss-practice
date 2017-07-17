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

set_title('属性値に挿入（イベントハンドラ使用2）');
set_description("入力された値をinput要素のvalue属性に設定します。HTMLタグの開始記号 '<' と終了記号 '>' は適切にエスケープされます。");

$message = isset($_GET['message']) ? $_GET['message'] : 'XSS';
$message_tag_escaped = str_replace('<', '&lt;', str_replace('>', '&gt;', $message));    // Escape '<' and '>'
//$message_tag_escaped = htmlspecialchars($message_tag_escaped);

add_param('message', $message);
add_param('message_tag_escaped', $message_tag_escaped);

render('attribution/quot', 'question');

?>
