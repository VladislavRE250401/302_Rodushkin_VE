<?php

namespace Rodushkinve\Task06_1;

interface PaymentAdapterInterface
{
    public function collectMoney($amount);
}