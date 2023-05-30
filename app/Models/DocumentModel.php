<?php namespace App\Models;

use CodeIgniter\Model;

class DocumentModel extends Model
{
    protected $table = 'upload';
    protected $allowedFields = ['id','filename', 'filedata'];
}