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

set_title('リンク先URLに挿入');
set_description("
入力された値をリンク先のURL（href属性）に設定します。HTMLとして意味のある記号は適切にエスケープされます。\n
リンクをクリックしたらアラートボックスが表示されるようにしてください。
");

$url = isset($_GET['url']) ? $_GET['url'] : 'http://www.google.co.jp/';

add_param('url', htmlspecialchars($url));

render('attribution/link', 'question');

?>
