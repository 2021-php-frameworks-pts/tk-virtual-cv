<?php

interface TableInfo
{
    public function tableName(): string;

    public function idKey(): string;
}
