<?php

class Model{

protected $_db, $_table, $modelName, $_softDelete, $_columnNames=[];
public $id;


    public function __construct($table)
      {
        $this->_db - DB::getInstance();
        $this->_table = $table;
        $this->_setTableColumns();
        $this->_modelName = str_replace(' ','',ucwords(str_replace('_',' ',$this->_table)));
      }


   protected function _setTableColumns()
     {
       $columns = $this->get_columns();
       foreach ($columnns as $column)
       {
         $this->_columnNames[] = $column->Filed;
         $this->{$columnName}=null;
       }
     }


  public function get_columns()
     {
       return $this->_db->get_columns($this->_table);
     }


  public function find($params = [])
    {
      $results = [];
      $resultsQuery = $this->_db->find($this->_table, $params);
      foreach ($resultsQuery as $result)
      {
        $obj = new $this->_modelName($this->_table);
        $obj->populateObjData($result);
        $results[] = $obj;
      }
      return $results;
    }


    public function findFirst($params = [])
    {
      $resultsQuery = $thi->_db->query($this->_table, $params);
      $result = new $this->_modelName($this->_table);
      $result->populateObjData($resultsQuery);
      return $result;
    }

    public function findById($id)
    {
      return $this->findFirst(['conditions'=>"id = ?",'bind'=>[$id]]);
    }


    protected function populateObjData($result)
     {
       foreach ($result as $key => $val)
       {
         $this->$key = $val;
       }

     }



}
