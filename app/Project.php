<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=['title', 'owner', 'description',];

    public function tasks()
    {

      return $this->hasMany(Task::class);

    }


    public function addTask(Array $validated)
    {

      Task::create([
                  'project_id'  => $this->id,
                  'description' => $validated['description']
      ]);

    }
}
