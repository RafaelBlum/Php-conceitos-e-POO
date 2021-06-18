<?php

interface User {
    public function apresentar();
    public function status();
    public function ganhaLuta($v);
    public function perdeLuta($l);
    public function empataLuta($e);

}