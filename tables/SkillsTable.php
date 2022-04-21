<?php

class SkillsTable implements TableInfo
{

    public function tableName(): string
    {
        return "skills";
    }

    public function idKey(): string
    {
        return "id";
    }
}
