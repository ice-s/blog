<?php

namespace App\Http\Controllers\Admin;

use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\DriverManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Doctrine\DBAL\Configuration;

class DBManagement extends Controller
{
    public function index()
    {
        return view('admin.layout');
    }

    public function show()
    {
        $schemaManager = $this->getSchema();

        $tables = $schemaManager->listTables();

        foreach ($tables as $table) {
            foreach ($table->getColumns() as $column) {
                $columnData = $column->toArray();
                $columnData['type'] = $column->getType()->getName();
                $tablesData[$table->getName()][] = $columnData;
            }
        }

        return view('admin.db-management.table-list', compact('tables'));
    }

    public function detail($tableName)
    {
        $schemaManager = $this->getSchema();

        $table = $schemaManager->listTableDetails($tableName);
//        dd($table);
        return view('admin.db-management.table-detail', compact('table'));
    }

    private function getSchema()
    {
        // https://www.doctrine-project.org/projects/doctrine-dbal/en/2.8/reference/schema-manager.html#listtables
        $config = new Configuration();
        $connectionParams = array(
            'dbname'   => 'abase',
            'user'     => 'root',
            'password' => '',
            'host'     => 'localhost',
            'driver'   => 'pdo_mysql',
        );

        try{
            $connection = DriverManager::getConnection($connectionParams, $config);
        }catch (DBALException $e){
            die("Warning :Can not connect database!!");
        }

        return $connection->getSchemaManager();
    }
}
