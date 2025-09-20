<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone', 'message'];
    protected $useTimestamps = true;

    public function saveContact($data)
    {
        return $this->save($data);
    }
}
