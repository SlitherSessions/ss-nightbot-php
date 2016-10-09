<?php
/*
  current_host.php - This file is part of SS Nightbot PHP

  The MIT License (MIT)
  Copyright (c) 2016 Slither Sessions.  All rights reserved.

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files (the "Software"), to deal
  in the Software without restriction, including without limitation the rights to
  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
  of the Software, and to permit persons to whom the Software is furnished to do
  so, subject to the following conditions:

  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.

  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
  SOFTWARE.
*/

header('Access-Control-Allow-Origin: http://slither.io');
header ("Content-Type: text/plain");

$default_host = 'N/A';
$the_file = dirname(__FILE__) . '/last_host.txt';

if (! file_exists ($the_file)) {
  file_put_contents ($the_file, $default_host);
}

if (isset ($_GET ['host'])) {
  if (FALSE === file_put_contents ($the_file, trim($_GET['host']))) {
    echo "Error saving IP";
    exit;
  }
}

if ($text = file_get_contents ($the_file))
  echo $text;
else
  echo $default_host;
