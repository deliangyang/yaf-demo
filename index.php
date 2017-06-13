<?php
/**
 * Created by unkown ide ps.
 * User: phantom
 * Date Time: 6/11/17 10:10 PM
 */

function xrange($len) {
    for ($i = 0; $i < $len; $i++) {
        yield $i;
    }
    //var_dump('xxxxxxx');
    return 'xxxxx';
}

//$db = new mysqli('127.0.0.1', 'root', '123123', 'lawyer');
//$db->set_charset('utf8');
//foreach (xrange(1000000) as $i) {
//    $sql = "INSERT INTO links SET type='court', link='http://www.court.gov.cn/fabu-xiangqing-x{$i}.html', status=1";
//    $db->query($sql);
//}
//$db->close();


$db = new mysqli('127.0.0.1', 'root', '123123', 'lawyer');
$db->set_charset('utf8');

function get_query_row() {
    global $db;
    $sql = 'SELECT * FROM links LIMIT 0, 999';
    $query = $db->query($sql);
    yield 1;
//    while ($row = $query->fetch()) {
//        yield $row;
//    }
}

foreach (get_query_row() as $v) {
    var_dump($v);
}

//$db = new mysqli('127.0.0.1', 'root', '123123', 'lawyer');
//$db->set_charset('utf8');
//$sql = 'SELECT * FROM links';
//$query = $db->query($sql);
//
//while ($row = $query->fetch_assoc()) {
//    var_dump($row);
//}



