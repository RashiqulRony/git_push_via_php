<?php

require_once('Git.php');

$repo = Git::open('D:\xampp\htdocs\gittest');
$repo->create_branch('aaa');
$repo->add('.');
$repo->commit('Some commit message');
$repo->push('origin', 'master');
//$repo->add('.');
print_r($repo);exit();


