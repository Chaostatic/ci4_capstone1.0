<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'admin_users';
    
    protected $allowedFields = [
        'name',
        'email',
        'password',
        'created_at'
    ];
}