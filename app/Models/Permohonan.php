<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icNo',
        'phoneNo',
        'schoolName',
        'examType',
        'subject1',
        'grade1',
        'subject2',
        'grade2',
        'subject3',
        'grade3',
        'subject4',
        'grade4',
        'subject5',
        'grade5',
        'subject6',
        'grade6',
        'subject7',
        'grade7',
        'subject8',
        'grade8',
        'subject9',
        'grade9',
        'subject10',
        'grade10',
        'subject11',
        'grade11',
        'subject12',
        'grade12',
        'subject13',
        'grade13',
        'dikemaskiniOleh',
        'status',
        'file',
        'dateSubmit'];

    protected $table = 'permohonan';
}
