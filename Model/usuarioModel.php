<?php

require_once '../Dao/usuarioDao.php';
class usuarioModel
{    
    public function registroUsuario($value)
    {
        try
        {
           $dao=new usuarioDao();
           $rec=$dao->registroUsuario($value);
           return $rec;
        } catch (Exception $ex)
        {
            throw $ex;
            return false;
        }
        
    }
    public function iniciarSesion($value)
    {
        try
        {
           $dao=new usuarioDao();
           $rec=$dao->iniciarSesion($value);
           return $rec;
        } catch (Exception $ex)
        {
            throw $ex;
            return false;
        }

                   

        
    }
  

  
    


    


    
}
?>