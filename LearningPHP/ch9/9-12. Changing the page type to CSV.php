<?php
/**
 * Created by PhpStorm.
 * User: baobaochu
 * Date: 2017/08/28
 * Time: 13:40
 */
// Tell the web client to expect a CSV file
header('Content-Type:text/csv');
// Tell the web client to view the CSV file in a separate program
header('Content-Disposition:attachment;filename="dishes.csv');

