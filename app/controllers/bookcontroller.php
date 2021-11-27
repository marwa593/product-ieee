<?php
namespace PHPMVC\Controllers; 
use PHPMVC\models\BookModel;
use PHPMVC\core\InputFilter;
use PHPMVC\core\Helper;

class BookController extends AbstractController
{
    public function defaultAction()
    {
        $this->_view();
    }

    public function addAction()
    {
        $model=new BookModel();
        $help=new helper();

        if(isset($_POST['sub']))
        {
            $data=[$_POST['name'],$_POST['price'],$_POST['category'],$_POST['pages_num'],$_POST['writer'] ];
        
          $model->add("book_data",$data);
          $help->redirect('select');
          
        }
       $this->_view();
    }

    public function selectAction()
    {
        $model=new BookModel ();

        $data=$model->select("*","book_data",1);
        $arrdata=$data->fetchAll();
        $this->_data['booksdata']=$arrdata;
        
        $this->_view();
    }


    public function deleteAction()
    {

        $model=new BookModel();

        $id=$this->_params[0];
        $model->delete("book_data",$id);
    
        $this->_view();
        
    }

    public function editAction()
    {
        $model=new BookModel();
        
        $id=$this->_params[0];
        $stmt=$model->edit("*","book_data",$id);
        $user_data=$stmt->fetch();
        $this->_data['user']=$user_data;

        $this->_view();

        // if(isset($_POST['sub']))
        // {
        //     echo 'marwa';
        //     $edited_data=[$_POST['name'],$_POST['price'],$_POST['category'],$_POST['pages_num'],$_POST['writer']];
        
        //     $model->update("book_data",$edited_data,$id);
        // }
        

    }

    public function updateAction()
    {
        $model=new BookModel();
       
        $id=$this->_params[0];
        if(isset($_POST['sub']))
        {
            //echo 'marwa';
            $edited_data=[$_POST['name'],$_POST['price'],$_POST['category'],$_POST['pages_num'],$_POST['writer']];
        
            $model->update("book_data",$edited_data,$id);
          
          
        }else{echo 'marwa';}
        $this->_view();


    }




}