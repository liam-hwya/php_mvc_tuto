<?php

    class QueryBuilder{


        protected $pdo;

        public function __construct(PDO $pdo){

            $this->pdo = $pdo;

        }

        public function selectAll($table){

            try{
            
                $statement = $this->pdo->prepare("select * from $table");

                $statement->execute();

                return $statement->fetchAll(PDO::FETCH_OBJ);
            
            }catch(Exception $e){
            
                die($e->getMessage());
            
            }

        }



        public function insert($table,$parameters){

            //insert into {tablename} ({columns}) values ({values}) 

            $sql = sprintf('insert into %s (%s) values (%s)',

                $table,
            
                implode(',',array_keys($parameters)),

                ':'.implode(',:',array_keys($parameters))
                

            );

            try{
            
                $statement = $this->pdo->prepare($sql);

                $statement->execute($parameters);
              
            
            }catch(Exception $e){
            
                die($e->getMessage());
            
            }


        }

    }

?>