<?php

$best_sellers = $devless->randomize()->size(4)->getData('orders', 'stock')['payload']['results'];
