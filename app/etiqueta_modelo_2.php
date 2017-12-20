<?php
/**
 * Created by PhpStorm.
 * User: guilherme
 * Date: 19/12/17
 * Time: 18:32
 */

use Zebra\Client;
use Zebra\Zpl\Image;
use Zebra\Zpl\Builder;

$zpl = new Builder();
$zpl->fo(50, 50);

$image = new Image(file_get_contents('example.png'));
$zpl->gf($image);

$client = new Client('10.0.0.50');
$client->send($zpl);