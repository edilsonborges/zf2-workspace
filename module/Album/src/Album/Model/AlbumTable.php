<?php
 namespace Album\Model;

 use Zend\Db\TableGateway\TableGateway;

 class AlbumTable
 {
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }

 }