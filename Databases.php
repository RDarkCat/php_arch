<?php

interface Databases
{
    public function connection(string $dsn);
    public function queryBuilder();
    public function sqlRecord();
}

interface IRecord
{
    public function createInsert();
}

interface IQueryBuilder
{
    public function createSelect();
    public function createSelectWithCondition();
}

class MySQLRecord implements IRecord
{     
    public function createInsert()
    {
        return 'INSERT INTO mysql created database';
    }
}

class MySQLQueryBuilder implements IQueryBuilder
{
    
    public function createSelect()
    {
        return 'SELECT mysql query created';
    }
    
    public function createSelectWithCondition()
    {
        return 'SELECT mysql query with condition created';
    }
}

class MySQLDatabase implements Databases
{
    public function connection(string $dsn): PDO
    {
        return new PDO($dsn);
    }

    public function sqlRecord(): MySQLRecord
    {
        return new MySQLRecord();
    }

    public function queryBuilder(): MySQLQueryBuilder
    {
        return new MySQLQueryBuilder();
    }
    
}

class OracleRecord implements IRecord
{
    
    public function createInsert()
    {
        return 'INSERT INTO created';
    }
}

class OracleQueryBuilder implements IQueryBuilder
{
    
    public function createSelect()
    {
        return 'SELECT oracle query created';
    }
    
    public function createSelectWithCondition()
    {
        return 'SELECT oracle query with condition created';
    }
}

class OracleDatabase implements Databases
{
    public function connection(string $dsn): PDO
    {
        return new PDO($dsn);
    }
    public function sqlRecord(): OracleRecord
    {
        return new OracleRecord();
    }

    public function queryBuilder(): OracleQueryBuilder
    {
        return new OracleQueryBuilder();
    }

    
}

class PostgreSQLRecord implements IRecord
{
    
    public function createInsert()
    {
        return 'INSERT INTO postgresql created';
    }
}

class PostgreSQLQueryBuilder implements IQueryBuilder
{
    
    public function createSelect()
    {
        return 'SELECT postgresql query created';
    }
    
    public function createSelectWithCondition()
    {
        return 'SELECT postgresql query with condition created';
    }
}

class PostgreSQLDatabase implements Databases
{
    public function connection(string $dsn): PDO
    {
        return new PDO($dsn);
    }

    public function sqlRecord(): PostgreSQLRecord
    {
        return new PostgreSQLRecord();
    }
    
    public function queryBuilder(): PostgreSQLQueryBuilder
    {
        return new PostgreSQLQueryBuilder();
    }
    
}

class DatabaseWriter
{
    public function write($databaseType)
    {
        switch ($databaseType) {
            case 'mysql':
                return new MySQLDatabase();
            case 'oracle':
                return new OracleDatabase();
            case 'postgresql':
                return new PostgreSQLDatabase();
        }
    }
}

var_dump((new DatabaseWriter())->write('oracle'));
