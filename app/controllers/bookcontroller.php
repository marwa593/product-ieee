<?php

namespace PHPMVC\Controllers; 
use PHPMVC\models\Bookmodel ;
use PHPMVC\Lib\InputFilter;
use PHPMVC\Lib\Helper;

class BookController extends AbstractController
{
    //use InputFilter;

    public function defaultAction()
    {
        $this->_view();

    }

    public function addAction()
    {
        $model=new Bookmodel();
        //$filter=new InputFilter(); 
         $help=new helper();
        if(isset($_POST['sub']))
        {
            $data=[$_POST['name'],$_POST['price'],$_POST['category'],$_POST['pages_num'],$_POST['writer'] ];
        
          $model->add("book_data",$data);
          var_dump($_POST);
          $help->redirect('select');
          
        }
       
       $this->_view();
    }

    public function selectAction()
    {
        
        $model=new Bookmodel();
        $data=$model->select("*","book_data",1);
        $arrdata=$data->fetchAll();
        $this->_data['booksdata']=$arrdata;
    
        $this->_view();

    }


    public function deleteAction()
    {
        $model=new Bookmodel();
        $id=$this->_params[0];
        
        $model->delete("book_data",$id);
        $this->_view();

    }

    public function editAction()
    {

        $model=new Bookmodel();
        $id=$this->_params[0];

        $editdata=$model->select("*", "book_data", "id='$id'");
        var_dump($editdata);


        $this->_view();

    }




}